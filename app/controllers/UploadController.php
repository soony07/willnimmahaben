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
}