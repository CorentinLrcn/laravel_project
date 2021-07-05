<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sourceable_type',
        'sourceable_id',
        'price',
        'paid_at'
    ];

    public function sourceable() {
        return $this->morphTo();
    }
}
