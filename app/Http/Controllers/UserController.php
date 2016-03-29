<?php
/**
 * Created by PhpStorm.
 * User: oleksandrserdiuk
 * Date: 29.03.16
 * Time: 10:00 PM
 */

namespace App\Http\Controllers;

use App\UserData;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Показать профиль данного пользователя.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function showProfile($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function store(\Request $request) {

        $name = $request->input('name');

        // insert $name to the DB
    }*/

    public function getEmailById() {

        $emails = UserData::all();

        return view('', ['emails' => $emails]);
    }

    // $name = Request::input('name', 'Sally'); - Sally default


}