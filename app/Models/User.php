<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function member(){
        return $this->hasOne(Member::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class, 'created_by');
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'created_by');
    }

    public function policies()
    {
        return $this->hasMany(InsurancePolicy::class, 'created_by');
    }

    public function tickets()
    {
        return $this->hasMany(SupportTicket::class, 'user_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'generated_by');
    }

    public function settings()
    {
        return $this->hasMany(SystemSetting::class, 'updated_by');
    }
}
