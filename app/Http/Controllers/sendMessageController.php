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
        $data = $request->only(['name', 'email', 'message']);
        $result = Message::create($data);
        if ($result) {
            return redirect()->route('messages')->with('success', 'Message send successful');
        }
    }
}
