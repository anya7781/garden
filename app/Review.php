<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Review';
    public $timestamps = false;

    public function getReviews()
    {
        $reviews = $this->all();
        return $reviews;
    }
}
