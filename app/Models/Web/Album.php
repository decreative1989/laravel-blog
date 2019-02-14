<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'web_album';
    protected $guarded = [];

    public function gallery()
    {
        return $this->hasMany('App\Models\Web\Gallery', 'web_album_id');
    }

}
