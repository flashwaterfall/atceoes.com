<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';

    protected $primaryKey = 'itemNum';

    public $timestamps = false;

    protected $fillable = [
        'itemType', 
        'itemModule', 
        'itemEquip',
        'itemBasis',
        'itemHeader',
        'itemContent',
        'itemRecord',
        'itemCheck',
        'itemPoint',
        'itemFather',
        'itemState',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
