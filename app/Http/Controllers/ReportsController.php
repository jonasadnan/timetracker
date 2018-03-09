<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use App\Task;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::query()
            ->join('projects', 'tasks.project_id', '=', 'projects.id')
            ->join('categories', 'projects.category_id', '=', 'categories.id')
            ->select('tasks.*', 'categories.name as categoryName', 'projects.title as projectTitle')
            ->orderBy('projects.title');

        $projects = Project::all();
        $categories = Category::all();

        if ($request->has('project')) {
            $tasks->where('tasks.project_id', $request->project)->get();
        }

        if ($request->has('category')) {
            $tasks->where('projects.category_id', $request->category)->get();
        }

        $tasks = $tasks->get();



		return view('reports.index', compact('tasks', 'projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
