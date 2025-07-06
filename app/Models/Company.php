<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Neighborhood;
use App\Models\City;

class Company extends Model {

  use HasFactory;

  public $fillable = [
    "title",
    "parent_id",
    "country_id",
    "city_id",
    "neighborhood_id",
    "overview",
    "email",
    "website",
    "phone",
    "image",
  ];

  public function image_url() {
    return $this->image != null ? url("images/companies/" . $this->image) : "https://www.shutterstock.com/image-illustration/mockup-3d-logo-facade-sign-600nw-2046330740.jpg";
  }

  public function parentCompany() {
    return $this->belongsTo(Company::class, "parent_id");
  }

  public function country() {
    return $this->belongsTo(Country::class);
  }

  public function city() {
    return $this->belongsTo(City::class);
  }

  public function neighborhood() {
    return $this->belongsTo(Neighborhood::class, "neighborhood_id");
  }

  public function address() {
    return $this->country?->title . "-" . $this->city?->title . "-" . $this->neighborhood?->title;
  }
}
