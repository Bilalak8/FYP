<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AddTailer;

class TailerInfo extends Model
{
    use HasFactory;


    protected $table="tailer_infos";

    public function addtailer()
    {

        return $this-belongsTo(AddTailer::class);
    }
    public function measurment()
    {

        return $this-hasOne(Measurment::class);
    } 

    public function user()
    {

        return $this-belongsTo(User::class);
    }

}
