<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotesController extends Controller
{
    public function index(): View
    {
        $notes = Note::paginate(5);
        return view('notes.index', compact('notes'));
    }

    public function store(StoreNoteRequest $request): RedirectResponse
    {
        Note::create($request->all());
        return back()->with('success', 'Note has been added successfully');
    }

    public function update(Request $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return back()->with('success', 'Note has been updated successfully');
    }

    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return back()->with('success', 'Note has been deleted successfully');
    }
}
