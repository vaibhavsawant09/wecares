<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole
{
    use HasFactory;
    const ADMIN = 1;
    const STAFF = 2;
    const MEMBER = 3;
    protected $guarder = ['id'];
    
}
