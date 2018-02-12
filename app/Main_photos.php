<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_photos extends Model
{
    /**
* Связанная с моделью таблица.
*
* @var string
*/
    protected $table = 'Main_photos';
    public $timestamps = false;

    public function getPhotos()
    {
        $photos = $this->all();
        return $photos;
    }

    public function SetPhoto($name){
        $this->photo = $name;
        $this->save();
    }

    public function DeletePhoto($name){
        $this->where('photo', $name)->delete();
    }
}
