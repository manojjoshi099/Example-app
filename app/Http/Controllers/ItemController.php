<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ItemController extends Controller
{
    //
    public function index()
    {
        return "Hello World!";
    }
    public function view()
    {
        $name = "Manoj";
        $address = "Dhangadhi";
    //     return view('items.index',[
    //     'name'=> $name,
    //     'address'=> $address
    // ]);

    //compact method
        return view('items.index',compact('name','address')); 
    }


    public function show($item){
        return "Item=".$item;
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('welcome');
    }
    public function menu()
    {
        return view('nav/menu');
    }

    public function reservation()
    {
        return view('nav/reservation');
    }
    public function offers()
    {
        return view('nav/offers');
    }

    public function contact()
    {
        return view('nav/contact');
    }
}
