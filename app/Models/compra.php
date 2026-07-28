<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\compralog;
class compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'user_id',
        
    ];

 public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function compralog(): HasMany
    {
        return $this->hasMany(compralog::class);
    }

     public function wasCompletedToday(): bool
    {
                return $this->compralog
                        ->where('completed_at', \Carbon\Carbon::today()->toDateString())
                        ->isNotEmpty();
    }

    }
