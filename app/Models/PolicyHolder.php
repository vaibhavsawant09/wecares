<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicyHolder extends Model
{
    use HasFactory, SoftDeletes;

    const PENDING = 1;
    const APPROVED = 2;
    const REJECTED = 3;
    const NONE = 1;
    const CLAIMED = 2;
    const STOPPED = 3;
    protected $guarded = ['id'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function policy()
    {
        return $this->belongsTo(InsurancePolicy::class);
    }
}
