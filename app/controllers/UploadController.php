<?php

/**
 * Created by PhpStorm.
 * User: Ermin
 * Date: 10.01.2017
 * Time: 13:00
 */
class UploadController extends HomeController
{


    public function showUpload()
    {
        return View::make('create');

    }

    public function insert_anzeigen(){
            $titel =  Input::get('titel');
            $description = Input::get('description');
            $preis =  Input::get('preis');
            $state =  Input::get('state');
            $zip =  Input::get('zip');
            $address =  Input::get('address');
            $nummer =  Input::get('nummer');
            $email= Input::get('email');
            $name = Input::get('name');
            $category = Input::get('category');

            echo $category;


        $user = newPost::create(array(
            'titel' => $titel,
            'description' => $description,
            'preis'=> $preis,
            'state'=>$state,
            'zip' => $zip,
            'address' => $address,
            'nummer'=> $nummer,
            'email' => $email,
            'name'=> $name,
            'category' => $category

        ));


    }
}