@extends ('layout.app')

@section ('content')

	<div class="container">
		<div class="columns">
			<div class="column col-10">
				<h3>What is this?</h3>
				<p>This is an 8 man tournament simulator featuring some of the greatest fighters of all time. And Conor McGregor. Pick a division and any 8 guys and see what the algorithm comes up with.</p>
				<h4>How are the winners determined?</h4>
				<p>3 AI judges score rounds, their totals are calculated, and you receive the result.</p>
				<h4>What happens in a draw?</h4>
				<p>Soon overtime rounds will be implemented. At the moment if you have a draw the higher seed will get the win and advance.</p>
			</div>
		</div>
	</div>

@endsection