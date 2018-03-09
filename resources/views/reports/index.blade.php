@extends('layouts.app')

@section('title')
    Reports
@endsection

@section('content')
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <div class="col-container">
                <h1 class='actions-header'>All reports</h1>

                <div class="row">
                    <div class="col-md-4">
                        <form class="form-container form-report" action="{{ route('reports.index') }}" method="GET">
                            <label for="">Filter by project</label>
                            <select id="project" name="project" onchange="this.form.submit();">
                                <option value="">Select project</option>
                                    @foreach($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                                    @endforeach
                            </select>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <form class="form-container form-report" action="{{ route('reports.index') }}" method="GET">
                            <label for="">Filter by category</label>
                            <select id="category" name="category" onchange="this.form.submit();">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>

                    <div class="col-md-4">
                        <form class="form-container form-report" action="{{ route('reports.index') }}" method="GET">
                            <label for="">Filter by date</label>
                            <select id="category" name="category" onchange="this.form.submit();">
                                <option value="">Select date</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="section page">
                <div class="wrapper">
                    <table>
                        @foreach ($tasks as $task)
                            <thead>
                                <tr>
                                    <th>{{ $task->projectTitle }}</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>

                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->categoryName }}</td>
                                <td>{{ $task->date }}</td>
                                <td>{{ $task->time }}</td>
                            </tr>

                            <tr>
                                <th class="project-total-label" colspan="3">Project Total</th>
                                <th class="project-total-number">Project total hours?</th>
                            </tr>
                        @endforeach

                        <tr>
                            <th class='grand-total-label' colspan='3'>Grand Total</th>
                            <th class='grand-total-number'> Grand Total Value </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection