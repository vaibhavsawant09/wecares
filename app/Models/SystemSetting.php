<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;
    protected $fillable = ['setting_key', 'setting_value', 'updated_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
