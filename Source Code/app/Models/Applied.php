<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applied extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function applyjob()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
}
