<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hospital extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function getVisits(){
        return $this->hasMany(Visit::class, 'patients_id', 'id');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    protected $fillable = ['name', 'mobile', 'disease', 'medicines', 'slug'];

}
