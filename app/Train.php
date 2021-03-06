<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "trains";

    public function getData()
    {
        return date('d/m/Y', strtotime($this->data_di_partenza));
    }
}
