<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    use HasFactory;

    public static function getPosts(){
        $KEY = config('app.instagram_api_key');
        $url = 'https://graph.instagram.com/me/media?fields=media_url,caption,permalink&limit=10&access_token='.$KEY;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $posts = curl_exec($ch); 
        curl_close($ch);
        

        return $posts;
    }
}
