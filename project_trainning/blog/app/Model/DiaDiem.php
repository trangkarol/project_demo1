<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'tendiadiem', 'diachi','lat','log'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    // define relationship of user and diadiem
    public function users()
    {
    	$this->belongsToMany('App\Model\Users');
    }

    // create scope of table DiaDiem
}
