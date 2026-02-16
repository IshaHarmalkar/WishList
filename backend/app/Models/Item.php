<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'wishlist_id',
        'name',
        'description',
        'price',
        'url',
    ];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function tags()
    {
        return $this->belongsTo(Tag::class);
    }
}
