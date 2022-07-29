<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Independient extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
    */
    protected $table = 'independients';

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
    protected $fillable = [
        'id', 'categorias'
    ];

    /**
     * Get the categorie that owns the client.
     */
    public function clients()
    {
        return $this->belongsTo(Client::class, 'id_independiet', 'id');
    }

}
