<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InsuranceOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    const ACTIVE = 1;
    const PAID = 2;
    const EXPIRED = 3;
    const TERMINATED = 4;
    const TERMINATION_REQUESTED = 5;

    public function setOrderIdAttribute($id)
    {
        $this->attributes['order_id'] = 'order_' . $id;
    }
}
