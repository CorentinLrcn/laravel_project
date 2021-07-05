<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference',
        'organisation_id',
        'title',
        'comment',
        'deposit',
        'ended_at'
    ];

    public function organisation() {
        return $this->belongsTo(Organisation::class);
    }

    public function lines() {
        return $this->hasMany(MissionLine::class);
    }

    public function source() {
        return $this->morphOne(Transaction::class, 'sourceable');
    }
}
