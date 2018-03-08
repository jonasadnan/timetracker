@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Task List</h1>
				<div class="actions-item">
					<a class="actions-link" href="">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
						Add Task</a>
				</div>
			</div>
		</div>
	</div>
@endsection
