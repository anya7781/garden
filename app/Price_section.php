<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_section extends Model
{
    /**
     * Связанная с моделью таблица.
     *
     * @var string
     */
    protected $table = 'Price_section';
    public $timestamps = false;

    public function getPriceSection($id)
    {
        $section = $this->find($id);
        return $section;
    }

    public function getAllSections()
    {
        $sections = $this->all();
        return $sections;
    }
}
