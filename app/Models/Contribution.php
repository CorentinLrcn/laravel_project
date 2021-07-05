<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'price',
        'title',
        'comment',
        'organisation_id'
    ];

    public function organisation() {
        return $this->belongsToMany(Organisation::class);
    }

    public function source() {
        return $this->morphOne(Transaction::class, 'sourceable');
    }
}
