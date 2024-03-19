<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        // return $request->all();
        // dd($request->file('image'));
        // $request->image->store('/');
        // $request->image->storeAs('/images', 'new_image.jpg');
        // $request->image->store('/images');//storing image and rename the image

        //VALIDATING UPLOADED FILES
        $request->validate([
            'image' => ['required', 'min:100', 'max:500', 'mimes:png, jpg, gif']
        ]);
        $request->image->storeAs('/images', 'new_image.jpg');
    }
}
