<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterQuality extends Model
{
    use HasFactory;

    protected $table = 'water_quality';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['timestamp', 'location', 'ph_level', 'turbidity', 'contaminants', 'sensor_id', 'tank_id'];

    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
}
