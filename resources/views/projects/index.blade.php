@extends('layouts.app')

@section('title', 'Projects')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Project List</h1>
				<div class="actions-item">
					<a class="actions-link" href="project.php">
                <span class="actions-icon">
                  <svg viewbox="0 0 64 64"><use xlink:href="#project_icon"></use></svg>
                </span>
						Add Project</a>

				</div>
			</div>
		</div>
	</div>
@endsection
