@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<h1>New Article</h1>
		<form method="POST" action="/articles">
			@csrf
			
			<div class="field">
				<label class="label" for="title">Title</label>

				<div class="control">
					<input type="text" name="title" id="title" class="input">
				</div>
			</div>

			<div class="field">
				<label class="label" for="excerpt">Excerpt</label>

				<div class="control">
					<input type="textarea" name="excerpt" id="excerpt" class="input">
				</div>
			</div>

			<div class="field">
				<label class="label" for="body">Body</label>

				<div class="control">
					<input type="textarea" name="body" id="body" class="input">
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button class="button is-link" type="submit">Submit</button>
				</div>
			</div>


		</form>
	</div>
</div>
@endsection