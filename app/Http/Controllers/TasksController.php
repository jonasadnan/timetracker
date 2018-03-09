<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$tasks = Task::all();


        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$projects = Project::all();
        return view('tasks.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request,[
			'title' => 'required|min:3|max:32',
			'date'  => 'required|date',
			'time'  => 'required|integer',
			'project_id' => 'required|integer'
		]);

    	$task = new Task;
    	$task->fill([
    		'title' => $request->title,
			'date'  => Carbon::parse($request->date)->toDateString(),
			'time'  => $request->time,
			'project_id' => $request->project_id
		]);

    	$task->save();

        return redirect(route('tasks.index'))->with('success', 'Task been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
	{
        $projects = Project::all();

        return view('tasks.edit', compact('task', 'projects'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
		$this->validate($request,[
			'title' => 'required|min:3|max:32',
			'date'  => 'required|date',
			'time'  => 'required|integer',
			'project_id' => 'required|integer'
		]);

		$task->fill([
			'title' => $request->title,
			'date'  => Carbon::parse($request->date)->toDateString(),
			'time'  => $request->time,
			'project_id' => $request->project_id
		])->save();

		return redirect(route('tasks.index'))->with('success', 'Task been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
		return redirect(route('tasks.index'))->with('success', 'Task been deleted');
    }
}
