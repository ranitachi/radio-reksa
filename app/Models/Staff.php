<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;
    protected $table = 'penyiar';
    protected $dates = ['deleted_at'];
    protected $fillable =['nama','photo','desc','facebook','twitter','linkedin','id_user','created_at','updated_at'];
    public function user()
    {
      return $this->belongsTo('App\Models\User', 'id_user');
    }

}
