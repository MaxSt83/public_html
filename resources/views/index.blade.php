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
					
               <ul>
				@foreach ($articles as $article)
					<li>{{ $article->title }}
						<br>
						{!! $article->text !!}
						<br>
						<a class="btn btn-default" href="{{ route('articleShow',['id'=>$article->id]) }}">Подробнее</a>
					</li>
				@endforeach
				</ul>
				
            </div>
@endsection
