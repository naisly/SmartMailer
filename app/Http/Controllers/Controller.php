<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // php artisan make:controller PhotoController
    // Route::resource('photo', 'PhotoController');

    /*
     * GET          /photo                   index           photo.index
     * GET          /photo/create            create          photo.create
     * POST         /photo                   store           photo.store
     * GET          /photo/{photo}           show            photo.show
     * GET          /photo/{photo}/edit      edit            photo.edit
     * PUT/PATCH    /photo/{photo}           update          photo.update
     * DELETE       /photo/{photo}           destroy         photo.destroy
     */
}
