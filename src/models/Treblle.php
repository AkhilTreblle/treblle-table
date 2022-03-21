<?php

namespace  Trb\Table\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Treblle extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
  protected $guarded = [];

  protected $fillable = [
    'name',
    'email',
    
    
];
}