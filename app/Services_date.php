<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services_date extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Services_date';
    public $timestamps = false;

    public function getServicePhrases($id)
    {
        $service1 = $this->where('id_service', $id)->get();
        return $service1;
    }
}
