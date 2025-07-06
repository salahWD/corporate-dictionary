<?php

namespace App\Http\Controllers;

use File;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Neighborhood;

class CompanyController extends Controller {

  public function index() {
    $companies = Company::paginate(15);
    return view("dashboard.companies.index", compact("companies"));
  }

  public function create() {
    $countries = Country::all();
    $cities = City::all();
    $neighborhoods = Neighborhood::all();
    $companies = Company::all();

    return view("dashboard.companies.single", compact("countries", "cities", "neighborhoods", "companies"));
  }

  public function store(Request $request) {
    $validated = $request->validate([
      "title" => ["required", "string", "min:2", "max:255"],
      "overview" => ["nullable", "string", "max:500"],
      "parent" => ["sometimes", "nullable", "exists:companies,id"],
      "country" => ["required", "integer", "exists:countries,id"],
      "city" => ["nullable", "exists:cities,id"],
      "neighborhood" => ["nullable", "string"],
      "address" => ["nullable", "string"],
      "email" => ["nullable", "email"],
      "website" => ["nullable", "url"],
      "phone" => ["nullable", "regex:/^[\+]?(\([0-9]+\))?[0-9\s\-\.]+/"],
      "image" => ["sometimes", "nullable", "image", "mimes:png,jpg,jpeg", "max:2048"], // max = 2 mega byte
    ]);


    if ($request->hasFile('image')) {
      // upload new image
      $validated["image"] = date('mdYHis') . uniqid() . substr($request->file('image')->getClientOriginalName(), -10);
      $request->image->move(public_path('images/companies'), $validated["image"]);
    }

    $comp_info = [
      "title" => $validated["title"],
      "overview" => $validated["overview"],
      "parent_id" => $validated["parent"],
      "country_id" => $validated["country"],
      "city_id" => $validated["city"],
      "phone" => $validated['phone'],
      "address" => $validated['address'],
      "email" => $validated['email'],
      "website" => $validated['website'],
      "image" => isset($validated["image"]) ? $validated["image"] : NULL,
    ];

    $neighborhood = Neighborhood::where("title", "LIKE", "%" . trim($validated["neighborhood"]) . "%")->first();
    if ($neighborhood?->id) {
      $comp_info["neighborhood_id"] = $neighborhood->id;
    } else {
      $neighbor = Neighborhood::create([
        "title" => trim($validated["neighborhood"]),
      ]);
      $comp_info["neighborhood_id"] = $neighbor->id;
    }

    $res = Company::create($comp_info);

    $request->session()->flash("company-created", (bool)$res);
    return redirect()->route("companies_manage");
  }

  public function show(Company $company) {
    //
  }

  public function edit(Company $company) {
    $countries = Country::all();
    $cities = City::all();
    $neighborhoods = Neighborhood::all();
    $companies = Company::all();

    return view("dashboard.companies.single", compact("company", "countries", "cities", "neighborhoods", "companies"));
  }

  public function update(Request $request, Company $company) {
    $validated = $request->validate([
      "title" => ["required", "string", "min:2", "max:255"],
      "overview" => ["nullable", "string", "max:500"],
      "parent" => ["sometimes", "nullable", "exists:companies,id," . $company->id],
      "country" => ["required", "integer", "exists:countries,id"],
      "city" => ["nullable", "exists:cities,id"],
      "neighborhood" => ["nullable", "string"],
      "address" => ["nullable", "string"],
      "email" => ["nullable", "email"],
      "website" => ["nullable", "url"],
      "phone" => ["nullable", "regex:/^[\+]?(\([0-9]+\))?[0-9\s\-\.]+/"],
      "image" => ["nullable", "image", "mimes:png,jpg,jpeg", "max:2048"], // max = 2 mega byte
    ]);

    $company->title = $validated['title'];
    $company->overview = $validated['overview'];
    $company->parent_id = $validated['parent'];
    $company->country_id = $validated['country'];
    $company->city_id = $validated['city'];
    $company->address = $validated['address'];
    $company->phone = $validated['phone'];
    $company->email = $validated['email'];
    $company->website = $validated['website'];


    $neighborhood = Neighborhood::where("title", "LIKE", "%" . trim($validated["neighborhood"]) . "%")->first();
    if ($neighborhood?->id) {
      $company->neighborhood_id = $neighborhood->id;
    } else {
      $neighbor = Neighborhood::create([
        "title" => trim($validated["neighborhood"]),
      ]);
      $company->neighborhood_id = $neighbor->id;
    }

    if ($request->hasFile('image')) {
      // delete old image
      if ($company->image != NULL && File::exists(public_path("images/companies/$company->image"))) {
        File::delete(public_path("images/companies/$company->image"));
      }
      // upload new image
      $company->image = date('mdYHis') . uniqid() . substr($request->file('image')->getClientOriginalName(), -10);
      $request->image->move(public_path('images/companies'), $company->image);
    }

    $res = $company->save();

    $request->session()->flash("company-saved", (bool)$res);
    return redirect()->route("companies_manage");
  }

  public function destroy(Request $request, Company $company) {
    if (auth()->user()->is_admin()) {

      $res = $company->delete();
      $request->session()->flash('company-deleted', $res);
      return redirect()->route("companies_manage");
    }
    return abort(404);
  }
}
