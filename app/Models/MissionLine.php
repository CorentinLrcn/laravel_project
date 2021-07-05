<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MissionLine extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mission_id',
        'title',
        'quantity',
        'price',
        'unity'
    ];

    public function mission() {
        return $this->belongsTo(Mission::class);
    }
}
