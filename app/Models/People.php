<?php

namespace App\Models;

use App\Models\Scopes\AdultPeople;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    /**
     * モデルのbootedメソッドをオーバライドし、グローバルスコープ呼び出し
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new AdultPeople);
    }
}
