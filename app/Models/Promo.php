<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Promo extends Model
{
    use SoftDeletes;
    protected $table = 'promo';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nama_promo','lokasi','tanggal_event','pic','desc','flag','view','id_user','created_at','updated_at'];
    public function user()
    {
      return $this->belongsTo('App\Models\User', 'id_user');
    }
}
