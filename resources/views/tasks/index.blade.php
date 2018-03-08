@extends('layouts.app')

@section('title', 'Tasks')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Task List</h1>
				<div class="actions-item">
					<a class="actions-link" href="{{ route('tasks.create') }}">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
						Add Task</a>
				</div>

				<div class="form-container">
					@if ($tasks->count() > 0)
						<ul class="items">
							@foreach($tasks as $task)
								<li><a href="{{ route('tasks.edit', $task->id) }}">{{ $task->title }}</a>
									<form method="POST" action="{{ route('tasks.delete', $task->id) }}">
										{{ csrf_field() }}
										<input type='submit' class='button--delete' value='DELETE'/>
									</form>
								</li>
							@endforeach
						</ul>
					@else
						<h5>There are no tasks.</h5>
					@endif
				</div>


			</div>
		</div>
	</div>
@endsection
