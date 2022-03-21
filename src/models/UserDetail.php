<?php

namespace  Trb\Table\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserDetail extends Model
{
  use HasFactory;

  // Disable Laravel's mass assignment protection
  protected $guarded = [];

  protected $fillable = [
      'treblle_id',
    'bio',
   
    
    
];
public function treblle()
    {
        return $this->belongsTo(Treblle::class);
    }
}