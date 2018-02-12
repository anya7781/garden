<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Info';
    public $timestamps = false;

    public function getInfo()
    {
        $info = $this->all();
        return $info[0];
    }

    public function setDesc($desc){
        $this->description = $desc;
    }
}
