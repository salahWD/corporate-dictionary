<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller {

  public function index() {
    $fields = Field::paginate(15);
    return view("dashboard.fields.index", compact("fields"));
  }

  public function create() {

    $fields = Field::select(["title", "id"])->get();
    return view("dashboard.fields.single", compact("fields"));
  }

  public function store(Request $request) {
    $validated = $request->validate([
      "title" => ["required", "string", "min:2", "max:255"],
      "overview" => ["nullable", "string", "max:500"],
      "parent_id" => ["sometimes", "nullable", "exists:fields,id"],
      // "image" => ["sometimes", "nullable", "image", "mimes:png,jpg,jpeg", "max:2048"], // max = 2 mega byte
    ]);


    // if ($request->hasFile('image')) {
    //   $validated["image"] = date('mdYHis') . uniqid() . substr($request->file('image')->getClientOriginalName(), -10);
    //   $request->image->move(public_path('images/companies'), $validated["image"]);
    // }

    $field_info = [
      "title" => $validated["title"],
      "overview" => $validated["overview"],
      "parent_id" => $validated["parent"],
      // "image" => isset($validated["image"]) ? $validated["image"] : NULL,
    ];

    $res = Field::create($field_info);

    $request->session()->flash("field-created", (bool)$res);
    return redirect()->route("fields_manage");
  }

  public function show(Field $field) {
  }

  public function edit(Field $field) {

    $fields = Field::select(["title", "id"])->where("id", "!=", $field->id)->get();
    return view("dashboard.fields.single", compact("field", "fields"));
  }

  public function update(Request $request, Field $field) {
    // dd($field);
    $validated = $request->validate([
      "title" => ["required", "string", "min:2", "max:255"],
      "overview" => ["nullable", "string", "max:500"],
      "parent_id" => ["sometimes", "nullable", "int", "exists:fields,id"],
      // "image" => ["nullable", "image", "mimes:png,jpg,jpeg", "max:2048"], // max = 2 mega byte
    ]);

    $field->title = $validated['title'];
    $field->overview = $validated['overview'];
    $field->parent_id = $validated['parent_id'];

    // if ($request->hasFile('image')) {
    //   // delete old image
    //   if ($company->image != NULL && File::exists(public_path("images/companies/$company->image"))) {
    //     File::delete(public_path("images/companies/$company->image"));
    //   }
    //   // upload new image
    //   $company->image = date('mdYHis') . uniqid() . substr($request->file('image')->getClientOriginalName(), -10);
    //   $request->image->move(public_path('images/companies'), $company->image);
    // }

    $res = $field->save();

    $request->session()->flash("field-saved", (bool)$res);
    return redirect()->route("fields_manage");
  }

  public function destroy(Request $request, Field $field) {
    if (auth()->user()->is_admin()) {

      $res = $field->delete();
      $request->session()->flash('field-deleted', $res);
      return redirect()->route("fields_manage");
    }
    return abort(404);
  }
}
