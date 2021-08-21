<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\sendmailRequest;
use Illuminate\Http\Request;

class sendMessageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function check()
    {
        return view('messages');
    }

    public function store(sendmailRequest $request)
    {
        try {
            $data = $request->only(['name', 'email', 'message']);
            //$pname = $data['name'];
            Message::create($data);
            return redirect()->route('messages')->with('success', 'Message send successful');
        } catch (\Exception $e) {
            throw $e->getMessage();
            //return redirect()->route('messages')->with('error', 'error sending message');
        }
    }
}
