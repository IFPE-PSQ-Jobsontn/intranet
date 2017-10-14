<?php

namespace App\Models;

use Bootstrapper\Interfaces\TableInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model implements TableInterface
{
    use SoftDeletes;

    /**
     * A list of headers to be used when a table is displayed
     *
     * @return array
     */

    protected $fillable = [
        'cpf',
        'registration_number',
        'registry_entity',
        'registry_entity_uf_id',
        'registration_date',
        'name',
        'mother',
        'father',
        'birth_date',
    ];

    protected $dates = [
        'registration_date',
        'birth_date',
    ];

    public function getTableHeaders()
    {
        return ['ID', trans('labels.cpf'),trans('labels.name'),trans('labels.birth_date')];
    }

    /**
     * Get the value for a given header. Note that this will be the value
     * passed to any callback functions that are being used.
     *
     * @param string $header
     * @return mixed
     */
    public function getValueForHeader($header)
    {
        switch ($header){
            case 'ID':
                return $this->id;
            case trans('labels.cpf'):
                return $this->cpf;
            case trans('labels.name'):
                return $this->name;
            case trans('labels.birth_date'):
                if (is_null($this->birth_date)){
                    return $this->birth_date;
                }
                return $this->birth_date->format('d/m/Y');
        }
    }
}
