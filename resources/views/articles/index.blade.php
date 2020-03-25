@extends('layout')




@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Articles</h2>
				 </div>
<ul>

	@foreach($article as $articles)

	<li>
		<h2><a href="{{ route('articles.show', $articles) }}">{{ $articles->title }}</a> | <small><a href="{{ route('articles.edit', $articles) }}">[ Edit ]</a></small></h2>
		<p>{{ $articles->body }}</p>
	</li>
	@endforeach
</ul>
		</div>
		
	</div>
</div>

@endsection