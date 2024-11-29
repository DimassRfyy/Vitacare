<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            if ($product->photo) {
                Storage::delete($product->photo);
            }
        });

        static::updating(function ($product) {
            if ($product->isDirty('photo')) {
                $oldPhoto = $product->getOriginal('photo');
                if ($oldPhoto) {
                    Storage::delete($oldPhoto);
                }
            }
        });
    }
}
