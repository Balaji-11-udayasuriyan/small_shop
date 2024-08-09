<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';
    
    protected $fillable =[
        
        'category_id',
        'brand_id',
        'name',
        'description',
        'price',
        'image_path',
        'qty',
        'alert_stock',

    ];

    public function category():BelongsTo
    {

        return $this->belongsTo(category::class);
    }

    public function brand():BelongsTo
    {

        return $this->belongsTo(brand::class);
    }

    public function getImagePath()
    {
        return env('DOMAIN_URL').Storage::url($this->image_path);
    }

}
