<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('client.pages.contact');
    }

    public function store(Request $request)
    {
        $data = [];
        // $name = trim($_POST['name']);
        $data =
            [
                'name' => trim($request->name),
                'email' => trim($request->email),
                'message' => trim($request->message)
            ];

        // dd($data);
        return view('client.pages.view', ['data' => $data]);
    }
}
