<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "color_name",
        "code"
    ];

    // user_idとのリレーションシップ
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
