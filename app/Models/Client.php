<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'clients';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'id', 'nombre', 'apellido', 'cedula', 'email', 'pais', 'direccion', 'celular'
    ];

    /**
     * Get the phone associated with the independient.
     */
    public function categories()
    {
        return $this->hasOne(Independient::class);
    }
}
