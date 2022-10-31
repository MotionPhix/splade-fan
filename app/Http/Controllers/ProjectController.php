<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Project;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::with('customer')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'customers' => Customer::with('company')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|filled',
            'has_deadline' => 'sometimes|date|filled',
            'customer_id' => 'required|integer|filled',
        ]);

        Project::create($data);

        Toast::title('Yes!')
        ->success('Project created')
        ->autoDismiss(5);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_task($project)
    {
        return view('projects.tasks.create', [
            'project' => $project,
            'statuses' => [
                'Done',
                'Pending',
                'In progress',
                'Revoked',
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_task(Request $request, $project)
    {
        $data = $request->validate([
            'name' => 'required|string|filled',
            'status' => 'required|string|filled',
        ]);

        $new_project = Project::findOrFail($project);

        $new_project->tasks()->save(\App\Models\Task::make([
            'name' => $request->name,
            'status' => $request->status
        ]));

        Toast::title('Superb!')
        ->success('You just added a task')
        ->autoDismiss(5);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy_task(Project $project, Task $task)
    {
        $project->tasks()->where('id', $task->id)->delete();

        Toast::title('Ouch!')
        ->success('A task just got deleted')
        ->autoDismiss(5);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit_task($project)
    {
        return view('projects.tasks.edit', [
            'project' => $project,
            'statuses' => [
                'Done',
                'Pending',
                'In progress',
                'Revoked',
            ]
        ]);
    }
}
