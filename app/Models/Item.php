<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; // テーブルを紐付け

    // gardedがあれば不要。ホワイトリスト
    // 登録したものだけしか更新できない
    protected $fillable = [
        "user_id",
        "color_id",
        "contents",
        "purchased",
    ];

    // // fillableがあれば不要。ブラックリスト
    // // 更新できないものを書く
    // // コントローラーでfill()を使うときに使う・・・?
    // protected $guarded = [
    //     "user_id",
    //     "color_id",
    //     "contents",
    //     "purchased",
    // ];

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
