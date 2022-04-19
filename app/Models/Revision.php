<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'revisions';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'revisions_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'mensaje',
        'estado'
    ];

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';

    // Preguntar si se hace esta parte de la relacion
    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }
}   

