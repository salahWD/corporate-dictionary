<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model {
  use HasFactory;

  public $fillable = [
    'title',
    'overview',
    'parent',
  ];

  public $timestamps = false;

  public function image_url() {
    if ($this->image) {

      return url("images/fields/" . $this->image);
    } else {
      return 'https://www.talentxchange.my/_assets/images/default_logo.png';
    }
  }
}
