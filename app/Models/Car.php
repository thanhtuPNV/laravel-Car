<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use\App\Models\Manufacture;

class Car extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='cars';
    protected $fillable=['name','descriptions','price','image','mf_id'];
    public function mf(){
        return $this->belongsTo(Manufacture::class,'mf_id','id');
    }
}
