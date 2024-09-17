<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterPrediction extends Model
{
    use HasFactory;

    protected $table = 'water_prediction';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['timestamp', 'tank_id', 'predicted_consumption', 'predicted_quality', 'predicted_empty_time'];

    public function tank()
    {
        return $this->belongsTo(Tank::class);
    }
}
