<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Services';
    public $timestamps = false;

    public function getServiceInfo()
    {
        $service = $this->all();
        return $service;
    }
}
