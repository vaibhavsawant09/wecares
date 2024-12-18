<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SystemSetting extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['setting_key', 'setting_value', 'updated_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
