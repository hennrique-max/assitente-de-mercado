<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\compra;
use Illuminate\Database\Eloquente\Relations\HasMany;
use App\Models\compralog;


#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory;

    protected $fillable = [ 
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        
    ];  



    
     
    protected function casts(): array
    {
        return [
            
            'password' => 'hashed',
        ];
    }

      public function compra(): HasMany
    {
        return $this->hasMany(compra::class);
    }

    public function compralog(): HasMany
    {
        return $this->hasMany(compralog::class);
    }
}
