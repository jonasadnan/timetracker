@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="section catalog random">
        <div class="col-container actions-container">

            <h1>Welcome</h1>
            <p class="actions-copy">What would you like to do today?</p>
            <div class="actions-wrapper">
                <ul class="actions">
                    <li class="actions-item">
                        <a class="actions-link" href="task.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
                            Add Task
                        </a>
                    </li>
                    <li class="actions-item">
                        <a class="actions-link" href="category.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
              </span>
                            Add Category
                        </a>
                    </li>
                    <li class="actions-item">
                        <a class="actions-link" href="project.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
              </span>
                            Add Project
                        </a>
                    </li>
                    <li class="actions-item">
                        <a class="actions-link" href="reports.php">
              <span class="actions-icon">
                <svg viewbox="0 0 64 64"><use xlink:href="#report_icon"></use></svg>
              </span>
                            View Reports
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
@endsection
