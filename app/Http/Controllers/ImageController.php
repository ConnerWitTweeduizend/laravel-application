<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function showJobImage($filename)
    {
        // dd($exists);
        if (Storage::disk('public')->exists('job/' . $filename)) {
            // Get the content of the image
            $content = Storage::disk('public')->get('/job/' . $filename);
            //dd($content);
            // Get the mime type of the image
            $mime = Storage::mimeType('job/' . $filename);

            // Prepare the response with the image content and response code
            $response = response($content, 200);

            // Set the header
            $response->header("Content-Type", $mime);

            // Return the response
            return $response;
        } else {
            abort(404);
        }
    }
}
