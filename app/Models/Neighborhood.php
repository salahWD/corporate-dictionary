<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;

class Neighborhood extends Model {
  use HasFactory;

  public $timestamps = false;

  public $fillable = [
    "title",
  ];

  public function company() {
    return $this->belongsTo(Company::class);
  }
}
