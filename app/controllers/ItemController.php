<?php


class ItemController extends HomeController
{
    public function showItem() {
        return View::make('item');
    }
}