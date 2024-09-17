<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // La tabla asociada al modelo.
    protected $table = 'clients';

    // La clave primaria de la tabla.
    protected $primaryKey = 'id';

    // Indica si la clave primaria es autoincrementable.
    public $incrementing = true;

    // El tipo de datos de la clave primaria.
    protected $keyType = 'int';

    // Los atributos que se pueden asignar masivamente.
    protected $fillable = ['name', 'contact_info'];

    public function tanks()
    {
        return $this->hasMany(Tank::class);
    }
}
