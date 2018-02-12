<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Portfolio';
    public $timestamps = false;

    public function getPhotos()
    {
        $photos = $this->all();
        return $photos;
    }
}
