@extends('layouts.app')

@section('title', 'Categories')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Categories List</h1>
				<div class="actions-item">
					<a class="actions-link" href="category.php">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
						Add Category</a>

				</div>
			</div>
		</div>
	</div>
@endsection
