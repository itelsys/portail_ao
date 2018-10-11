<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppelOffre extends Model
{
    public function scopeSearch($query, $s) {
      return $query->where('Objet' , 'like' , '%' .$s. '%')
      ->orWhere('Type_Annonce' , 'like' , '%' .$s. '%')
      ->orWhere('Acheteur' , 'like' , '%' .$s. '%')
      ->orWhere('Reference' , 'like' , '%' .$s. '%')
      ->orWhere('Contact' , 'like' , '%' .$s. '%');
    }
}
