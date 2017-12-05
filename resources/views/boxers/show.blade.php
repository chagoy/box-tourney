@extends ('layout.app')

@section ('content')
	<div class="container">
		<div class="columns">
			<div class="column col-sm-12 col-8">
				<div class="card">
					<div class="card-header">
						<div class="card-title h5">
							<figure class="avatar avatar-xl">
								<img src="{{ asset("$boxer->image_path") }}" alt="image of {{ $boxer->name }}">
							</figure>
							{{ $boxer->name }}
						</div>
						<div class="card-subtitle text-gray ml-2">{{ $boxer->weights->lbs }} lbs, {{ $boxer->weights->division }} division</div>
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th>Age</th>
										<th>Country</th>
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
									<tr class="active">
										<td>{{ $boxer->age }}</td>
										<td>{{ $boxer->country }}</td>
										<td>{{ $boxer->power }}</td>
										<td>{{ $boxer->speed }}</td>
										<td>{{ $boxer->offense }}</td>
										<td>{{ $boxer->defense }}</td>
										<td>{{ $boxer->chin }}</td>
										<td>{{ $boxer->stamina }}</td>
										<td>{{ $boxer->overall }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
			<div class="column col-sm-12">
				<h3>Similar Boxers</h3>
				<ul>
					@foreach ($similar as $boxer)
						<li class="similar-style">
							<a href="/boxers/{{ $boxer->slug }}">
							<img class="avatar avatar-xl" src="{{ asset("$boxer->image_path")}}">
					
							{{ $boxer->name }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection