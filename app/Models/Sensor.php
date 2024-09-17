<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;

    protected $table = 'sensors';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['type', 'model', 'location', 'client_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
}
