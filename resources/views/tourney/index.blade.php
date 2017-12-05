@extends('layout.app')

@section('content')
	
	<div class="container">
		<div class="columns">
			<div class="column">
				<h3>Choose A Division</h3>
				@foreach ($weights as $weight)
					@if (count($weight->boxers))
						<a href="/tournament/create/{{ $weight->id }}">
							<button class="btn btn-alabama">
								{{ $weight->division }}
							</button>
						</a>
					@endif
				@endforeach
			</div>
		</div>
	</div>

@endsection