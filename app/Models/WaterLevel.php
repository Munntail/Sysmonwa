<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterLevel extends Model
{
    use HasFactory;

    protected $table = 'water_level';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['timestamp', 'location', 'level', 'unit', 'sensor_id', 'tank_id'];
    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
}
