<?php

namespace App\Domains\Links;

use App\Domains\Model;

class Link extends UserModel
{
  protected $fillable = [
  	'url',
  	'slug'
  ];
}
