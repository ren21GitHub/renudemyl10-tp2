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
            'image' => ['required', 'max:500', 'mimes:png, jpg, gif']
        ]);
        $request->image->storeAs('/images', 'new_image.jpg');

        //REDIRECT RESPONSE
            // return redirect()->back();
            // return redirect()->route('success');
            return redirect('/success');
    }

    // RETURNING FILE TO DOWNLOAD
    public function download()
    {
        return response()->download(public_path('/storage/images/logo2.jpg'));
    }
}
