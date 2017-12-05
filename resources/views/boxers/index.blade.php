@extends ('layout.app')

@section ('content')

	<div class="container">
		<table class="table table-stripe table-hover" id="boxersTable">
			<thead>
				<tr>
					<th>Name</th>
					<th>Division</th>
					<th>Country</th>
					<th>Age</th>
					<th>Power</th>
					<th>Speed</th>
					<th>Offense</th>
					<th>Defense</th>
					<th>Chin</th>
					<th>Stamina</th>
					<th>Overall</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($boxers as $boxer)
					<tr>
						<td><a href="/boxers/{{ $boxer->slug }}">{{ $boxer->name }}</a></td>
						<td>{{ $boxer->weights->division }}</td>
						<td>{{ $boxer->country }}</td>
						<td>{{ $boxer->age }}</td>
						<td>{{ $boxer->power }}</td>
						<td>{{ $boxer->speed }}</td>
						<td>{{ $boxer->offense }}</td>
						<td>{{ $boxer->defense }}</td>
						<td>{{ $boxer->chin }}</td>
						<td>{{ $boxer->stamina }}</td>
						<td>{{ $boxer->overall }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection