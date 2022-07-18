<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'image_src',
        'image_alt',
        'ort_order',
        'gallery_id',
        'gallery_type'
    ];

    public static function store($request, $dir_name = 'images' , $source = 'image'){
        $filename = time() . '-' . $request->file($source)->getClientOriginalName();

        return $request['image']->storeAs($dir_name, $filename, 'public');
    }

    public static function erase($file){
        return Storage::delete('public/'. $file);
    }

}
