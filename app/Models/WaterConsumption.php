<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumption extends Model
{
    use HasFactory;

    protected $table = 'water_consumption';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['timestamp', 'location', 'consumption_volume', 'unit', 'sensor_id', 'tank_id'];

    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
}
