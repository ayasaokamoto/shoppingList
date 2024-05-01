<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colors';

    protected $fillable = [
        "user_id",
        "code"
    ];

    // user_idとのリレーションシップ
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
