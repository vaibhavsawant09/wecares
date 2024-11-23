<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['generated_by', 'report_name', 'report_type', 'data'];

    public function user()
    {
        return $this->belongsTo(User::class, 'generated_by');
    }
}
