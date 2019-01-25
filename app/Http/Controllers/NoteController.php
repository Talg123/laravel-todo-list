<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Note;

use App\Http\Requests;

class NoteController extends Controller
{

    public function __construct()
    {
    
    }

    public function index()
    {        
        $notes = Note::get()->all();

        return response()->json([
            'data' => $notes
        ]);

    }

    public function create()
    {
        $payload['content'] = request()->get("content");
        $payload['is_completed'] = 0;
        $note = Note::create($payload);
        
        return response()->json([
            'data'=> $note
        ]);
    }

    public function update()
    {
        $payload['id'] = request()->get('id');
        $payload['content'] = request()->get("content");
        $payload['is_completed'] = request()->get("is_completed");

        $note = Note::whereId($payload['id'])->update($payload);

        return response()->json([
            'data' => $note
        ]);
    }

    public function delete()
    {
        $payload['id'] = request()->get('id');
        Note::find($payload['id'])->delete();

        return response()->json([
            'data' => true
        ]);
    }

    
}
