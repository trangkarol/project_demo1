<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ChiTietDangKy extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'khunggio', 'ma_diadiem','ma_ser','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    // defined relationship
    public function chitietdangky()
    {
    	return $this->belongsToMany('App\Model\User', 'App\Model\DiaDiem','ma_user','ma_diadiem');
    }

    
}
