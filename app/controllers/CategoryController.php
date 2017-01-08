<?php


class CategoryController extends HomeController
{
    public function showCategory() {
        return View::make('category');
    }
}