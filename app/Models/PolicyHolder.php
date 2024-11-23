<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolicyHolder extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'policy_id', 'status', 'claim_status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function policy()
    {
        return $this->belongsTo(InsurancePolicy::class);
    }
}
