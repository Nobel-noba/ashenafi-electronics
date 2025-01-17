<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SaleItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'description', 'total', 'quantity', 'sale_id',
    ];

    protected $casts = [

    ];

    public function sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }
}
