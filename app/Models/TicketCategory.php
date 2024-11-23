<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ticket_categories';
    protected $fillable = [
        'name',
        'description',
        'created_by',
    ];
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    public function tickets()
    {
        return $this->hasMany(SupportTicket::class, 'ticket_category_id');
    }
}
