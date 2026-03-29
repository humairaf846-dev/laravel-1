<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Menampilkan data
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    // Menginsert data
    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);

        Task::create([
            'name' => $request->name
        ]);

        return back()->with('success', 'Data berhasil disimpan!');
    }
}