<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    protected $table = 'program';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_program','logo','desc','view','created_at','updated_at'];
    
}
