<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
    ];

    public function test()
    {
        return $this->morphOne(Test::class, 'detail');
    }
}
