@extends('layouts.site')

@section('content')
	<div>
		some menu here
	</div>
	<div class="content">
               	<div class="title m-b-md">
				{{ $header }}
				<br>
				{{ $message }}
                </div>
					@if($article)
						<h2>{{ $article->title }}</h2>
						<p>	{!! $article->text !!}</p>
					@endif
				
            </div>
@endsection
