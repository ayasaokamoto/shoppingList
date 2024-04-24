<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        "user_id",
        "color_id",
        "contents",
    ];

    // user_idとのリレーションシップ
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    // color_idとのリレーションシップ
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
