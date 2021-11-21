<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $dates = ['expires_at'];

    public static function findByUserAndProduct(User $user, Product $product): Subscription
    {
        return self::query()->where('user_id', $user->id)->where('product_id', $product->id)->first();
    }

    public function isActive(): bool
    {
        return $this->attributes['is_active'] > 0;
    }
}
