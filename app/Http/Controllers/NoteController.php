<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(10);
        return view('index',['notes' => $notes]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        Note::create($validatedData);

        return redirect('/');
    }

    public function show(Note $note)
    {
        
    }

    public function edit(Note $note)
    {
        return view('/edit',['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);


        Note::where('id',$note->id)
        ->update($validatedData);
        return redirect('/');
    }

    public function destroy(Note $note)
    {
        Note::destroy($note->id);
        return redirect('/');
    }
}
