<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class FormContactController extends Controller
{
    public function index()
        {
            return response()->json(Message::paginate(10)->toArray());
        }

    public function details($id) {
        return response()->json(Message::where('id', $id)->first()->toArray());
    }

    public function update(Request $request, $id) {
        $message = Message::where('id', $id)->first();
        $message->email = $request->email;
        $message->title = $request->title;
        $message->contents = $request->contents;
        $message->save();

        return response()->json([
            'message' => 'Message edited'
        ]);
    }

        public function store(Request $request)
    {
        $message = new Message;
        $message->email = $request->email;
        $message->title = $request->title;
        $message->contents = $request->contents;
        $message->save();

        return response()->json([
            'message' => 'Wiadomość została wysłana'
        ]);
    }

    public function destroy($id) {
        $message = Message::where('id', $id)->first();
        $message->delete();

        return response()->json([
            'message' => 'Message deleted'
        ]);
    }
}
