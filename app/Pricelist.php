<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricelist extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Pricelist';
    public $timestamps = false;

    public function getPricelist($id)
    {
        $pricelist = $this->where('section_id', $id)->get();
        return $pricelist;
    }
}
