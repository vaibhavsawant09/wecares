<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ApiLog extends Model
{
    use HasFactory, SoftDeletes;
    const GET = 1;
    const POST = 2;
    const PUT = 3;
    const DELETE = 4;
    const PATCH = 5;

    protected $guarded = ['id'];
}
