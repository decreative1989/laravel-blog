<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'web_gallery';
    protected $guarded = [];

    public function album()
    {
        return $this->hasOne('App\Models\Web\Album', 'web_album_id');
    }

}
