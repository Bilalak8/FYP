<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TaielrInfo;

class AddTailer extends Model
{
    use HasFactory;

    protected $table="add_tailers";


    public function tailerinfo()
    {
        return $this->hasOne(TailerInfo::class);
 
    }

    public function user(){
        return  $this->belongsTo(User::class);
      }

      public function measurment()
      {
          return $this->hasOne(Measurment::class);
   
      }
}

