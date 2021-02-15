<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vcard extends Model
{
     protected $guarded = [];


     /**
    * Get the service for the vcard.
    */
     public function service()
     {
         return $this->hasmany(VcardService::class);
     }
     public function galleries()
     {
        return $this->hasMany(VcardGallery::class);
     }
}
