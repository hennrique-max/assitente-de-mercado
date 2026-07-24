<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class compralog extends Model
{
    use HasFactory;
    protected $fillable = [
        'habit_id',
        'user_id',
        'completed_at',
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function compra(): BelongsTo
    {
        return $this->belongsTo(compra::class);
    }

}
