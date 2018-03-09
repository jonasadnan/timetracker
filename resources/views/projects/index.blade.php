@extends('layouts.app')

@section('title', 'Projects')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Project List</h1>
				<div class="actions-item">
					<a class="actions-link" href="{{ route('projects.create') }}">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
						Add Project</a>
				</div>
				<div class="form-container">
					@if ($projects->count() > 0)
						<ul class="items">
							@foreach($projects as $project)
								<li><a href="{{ route('projects.edit', $project) }}">{{ $project->title }}</a>
									<form method="POST" action="{{ route('projects.delete', $project) }}">
										{{ csrf_field() }}
										<input type='submit' class='button--delete' value='DELETE'/>
									</form>
								</li>
							@endforeach
						</ul>
					@else
						<h5>There are no projects.</h5>
					@endif
				</div>


			</div>
		</div>
	</div>
@endsection
