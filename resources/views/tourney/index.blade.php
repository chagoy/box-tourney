@extends('layout.app')

@section('content')
	
	<div class="container">
		<div class="columns">
			<div class="column col-sm-12">
				<h3>Choose A Division</h3>
				@foreach ($weights as $weight)
					@if (count($weight->boxers) > 8)
						<a href="/tournament/create/{{ $weight->id }}">
							<button class="btn btn-alabama">
								{{ $weight->division }}
							</button>
						</a>
					@endif
				@endforeach
			</div>
			<div class="column col-sm-12 col-6">
			<div class="panel mt-2">
					<div class="panel-header text-center">
						<div class="panel-title h5 mt-10">
							Remember!
						</div>
					</div>
					<div class="panel-body">
						<ul>
							<li>Seeds are determined by the order you select a fighter. </li>
							<li>In the event of a draw, the higher seed will advance to the next round. There is currently no way to compensate for draws. </li>
							<li>You may get some decisions you disagree with. It may be down to the random factor that accounts for human error/performance (we do get upsets and surprise wins from time to time).</li>
							<li>If you really disagree with a result, please submit a robbery report and we'll tweak something.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection