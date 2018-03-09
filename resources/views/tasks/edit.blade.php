@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

	<div class="section page">
		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">
				<h1 class="actions-header">Edit task</h1>

				<form class="form-container form-add" method="post" action="{{ route ('tasks.update', $task->id) }}">
					{{ csrf_field() }}
					<table>
						<tr>
							<th>
								<label for="project_id">Project</label>
							</th>
							<td>
								<select name="project_id" id="project_id">
									<option value="">Select One</option>
									@foreach ($projects as $project)
										<option value="{{ $project->id }}" @if ($project->id == $task->project_id) selected @endif>{{ $project->title }}</option>
									@endforeach
								</select>
							</td>
						</tr>
						<tr>
							<th><label for="title">Title<span class="required">*</span></label></th>
							<td><input type="text" id="title" name="title" value="{{ $task->title }}" /></td>
						</tr>
						<tr>
							<th><label for="date">Date<span class="required">*</span></label></th>
							<td><input type="date" id="date" name="date" value="{{ $task->date }}" placeholder="dd/mm/yyyy" /></td>
						</tr>
						<tr>
							<th><label for="time">Time<span class="required">*</span></label></th>
							<td><input type="text" id="time" value="{{ $task->time }}" name="time" /> minutes</td>
						</tr>
					</table>
					<input class="button button--primary button--topic-php" type="submit" value="Submit" />
				</form>
			</div>
		</div>
	</div>
@endsection
