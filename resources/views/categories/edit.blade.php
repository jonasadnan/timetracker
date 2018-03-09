@extends('layouts.app')

@section('title', 'Categories')

@section('content')

	<div class="section page">
		<div class="col-container page-container">
			<div class="col col-70-md col-60-lg col-center">
				<h1 class="actions-header">Edit Categories</h1>

				<form class="form-container form-add" method="post" action="{{ route ('categories.update', $category->id) }}">
					{{ csrf_field() }}
					<table>
						<tr>
							<th><label for="name">Name<span class="required">*</span></label></th>
							<td><input type="text" id="name" name="name" value="{{ $category->name }}" /></td>
						</tr>
					</table>
					<input class="button button--primary button--topic-php" type="submit" value="Submit" />
				</form>
			</div>
		</div>
	</div>
@endsection
