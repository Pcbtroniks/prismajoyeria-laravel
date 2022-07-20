<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;

class ImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Save an Image.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public static function save(){

        $img = request()->validate([
            'image'=> 'required|image'
        ]);

        $img_params = [
            'image_src'=> Image::store(request()), 
            'image_alt' => 'Prisma Joyeria',
            'gallery_id'=> 'prismajo',
            'gallery_type'=>'hero',
        ];

        Image::create($img_params);

        return redirect()->back()->with('success', '¡Imagen Agregada!');
    }

    public static function delete($image_id) {
        $image = Image::find($image_id);

        if($image){
            Image::erase($image->image_src);
            $image->delete();

            return redirect()->back()->with('success','Imagen eliminada');
        }
        return redirect()->back()->withErrors(['message' => 'No se pudo eliminar la Imagen']);
    }

    public function sortImages(){

        $data = request('data');
        // return $data;
        $images = Image::orderBy('sort_order', 'ASC')->get();
        $i = 0;
        foreach($images as $image)
        {   
            Image::where('id', '=', $data[$i]['id'])->update(array('sort_order' => $data[$i]['index']));
            $i++;
        }
        $i=null;
        $newOrder = Image::orderBy('sort_order', 'ASC')->get();

        return response(json_encode($newOrder),201);
    }
}
