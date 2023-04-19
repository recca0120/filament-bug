<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'detail_id',
        'detail_type',
    ];

    public function detail()
    {
        return $this->morphTo();
    }
}
