<?php

namespace TecnoComputadoras\Http\Controllers;

use Illuminate\Http\Request;

use TecnoComputadoras\Http\Requests;
use TecnoComputadoras\Http\Controllers\Controller;

use Storage;
use Response;

class ImagesController extends Controller
{
    public function index ($folder, $filename)
    {
    	$path = $folder . '/' . $filename;

        $file = Storage::get($path);
        $type = Storage::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }
}
