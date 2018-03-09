@extends('layouts.app')

@section('title', 'Projects')

@section('content')

	<div class="section page">
		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">
				<h1 class="actions-header">Add a new project</h1>

				<form class="form-container form-add" method="post" action="{{ route ('projects.store') }}">
					{{ csrf_field() }}
					<table>
						<tr>
							<th><label for="title">Title<span class="required">*</span></label></th>
							<td><input type="text" id="title" name="title" /></td>
						</tr>
						<tr>
							<th>
								<label for="category_id">Category</label>
							</th>
							<td>
								<select name="category_id" id="category_id">
									<option value="">Select One</option>
									@foreach ($categories as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</td>
						</tr>
					</table>
					<input class="button button--primary button--topic-php" type="submit" value="Submit" />
				</form>
			</div>
		</div>
	</div>
@endsection
