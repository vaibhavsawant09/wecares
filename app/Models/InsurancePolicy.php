<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsurancePolicy extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'policy_name',
        'sub_category_id',
        'details',
        'premium',
        'coverage_amount',
        'created_by'
    ];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function policyHolders()
    {
        return $this->hasMany(PolicyHolder::class, 'policy_id');
    }
}
