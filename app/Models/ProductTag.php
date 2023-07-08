<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductTag extends Pivot
{
    use HasFactory;

    protected $table = 'product_tag';

    protected $fillable = [
        'product_id',
        'tag_id',
    ];
}
