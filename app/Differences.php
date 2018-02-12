<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Differences extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Differences';
    public $timestamps = false;

    public function getDiff()
    {
        $phrases = $this->all();
        return $phrases;
    }
}
