@extends('layouts.app')

@section('title', 'Categories')

@section('content')
	<div class="section catalog random">

		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">

				<h1 class="actions-header">Category List</h1>
				<div class="actions-item">
					<a class="actions-link" href="{{ route('categories.create') }}">
                    <span class="actions-icon">
                        <svg viewbox="0 0 64 64"><use xlink:href="#task_icon"></use></svg>
                    </span>
						Add category</a>
				</div>
				<div class="form-container">
					@if ($categories->count() > 0)
						<ul class="items">
							@foreach($categories as $category)
								<li><a href="{{ route('categories.edit', $category) }}">{{ $category->name }}</a>
									<form method="POST" action="{{ route('categories.delete', $category) }}">
										{{ csrf_field() }}
										<input type='submit' class='button--delete' value='DELETE'/>
									</form>
								</li>
							@endforeach
						</ul>
					@else
						<h5>There are no categories.</h5>
					@endif
				</div>


			</div>
		</div>
	</div>
@endsection
