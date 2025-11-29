<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Skills extends Model
{
    use HasUuids;
    protected $table = 'Skills';
    protected $fillable = [
        'name',
        'description'
    ];
}

