<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Author';
    public $timestamps = false;

    public function getAuthorInfo()
    {
        $auth = $this->all();
        return $auth[0];
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
}
