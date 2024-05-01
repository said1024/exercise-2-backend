<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request)
    {
        $task = Task::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function showById(string $id)
    {
        return Task::findOrFail($id);

    }

    /**
     *    paginated list of tasks
     */
    public function paginatedDisplay()
    {
        return Task::paginate(5);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskFormRequest $request, string $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
