<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Car;

class Manufacture extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='manufactures';
    protected $fillable=['mf_name'];
    public function cars(){
        return $this->hasMany(Car::class,'mf_id','id');
    }
}
