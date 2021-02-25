<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Bulletin;

class BoardController extends Controller
{
    public function index(){

        $bulletins = Bulletin::all();
        return view('index', ["bulletins" => $bulletins]);
    }
    public function create(Request $request){
        $request->validate([
            "name" => "required|max:10",
            "text" => "required|max:50",
        ]);

        $name = $request->input('name');
        $text = $request->input('text');

        // dd($name);

        Bulletin::insert(['name' => $name, 'text' => $text]);

        $bulletins = Bulletin::all();

        // dd($bulletins);

        return view('index', ['bulletins' => $bulletins]);
    }
}
