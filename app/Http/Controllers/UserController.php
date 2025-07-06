<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller {

  public function index() {
    $users = User::paginate(15);
    return view("dashboard.users.index", compact("users"));
  }

  public function create() {
    return view("dashboard.users.single");
  }

  public function store(Request $request) {
    $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
      'password' => ['required', Password::defaults()],
    ]);

    $res = $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    $request->session()->flash('user-created', (bool)$res);
    return redirect()->route("users_manage");
  }

  public function show(User $user) {
  }

  public function edit(User $user) {
    return view("dashboard.users.single", compact("user"));
  }

  public function update(Request $request, User $user) {
    $validated = $request->validate([
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class . ",email, " . $user->id],
      'password' => ['sometimes', 'nullable', Password::defaults()],
      "permission" => ["required", "integer", "min:0", "max:2"],
    ]);

    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->permission = $validated['permission'];

    if ($validated["password"] != null) {
      $user->password = \Hash::make($validated['password']);
    }

    // save session trigger
    $res = $user->save();
    $request->session()->flash('user-saved', $res);
    return redirect()->route("users_manage");
  }

  public function destroy(Request $request, User $user) {
    if (auth()->user()->is_admin()) {

      $res = $user->delete();
      $request->session()->flash('user-deleted', $res);
      return redirect()->route("users_manage");
    }
    return abort(404);
  }
}
