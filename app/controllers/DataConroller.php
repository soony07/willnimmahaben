<?php
use Illuminate\Http\Request;
use newPost;

class DataConroller extends Contoller
{
    public function insert_anzeigen(Request $request){

        $newPost = new newPost;
        $newPost-> titel = $request->titel;

        $newPost-> titel = $request->titel;
        $newPost-> price = $request->price;
        $newPost-> titel = $request->titel;
        $newPost-> titel = $request->titel;
        $newPost-> titel = $request->titel;
        $newPost-> titel = $request->titel;
        $newPost-> titel = $request->titel;



        $newPost-> save();
    }


}