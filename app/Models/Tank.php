<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tank extends Model
{
    use HasFactory;

    protected $table = 'tanks';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = ['location', 'capacity', 'unit', 'client_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sensors()
    {
        return $this->hasMany(Sensor::class);
    }

    public function waterLevel()
    {
        return $this->hasOne(WaterLevel::class);
    }

    public function waterQuality()
    {
        return $this->hasOne(WaterQuality::class);
    }

    public function waterConsumptions()
    {
        return $this->hasMany(WaterConsumption::class);
    }

    public function waterPrediction()
    {
        return $this->hasOne(WaterPrediction::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
