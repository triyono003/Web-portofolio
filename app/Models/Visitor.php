<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  use HasFactory;
  protected $fillable = [
    "desktop",
    "tablet",
    "phone",
    "browser",
    "vbrowser",
    "clientip",
    "platform",
    "vplatform",
    "robot",
  ];
}
