@extends('layout.app')

@section('content')
    <h4>Fighters Awaiting Approval</h4>
    <p>You can vote for whether the stats are accurate.</p>
    @if (count($boxers))
        @foreach ($boxers as $boxer)
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
							<!--	THIS IS NOT PLAYING NICE AT THE MOMENT
									The idea is to have users vote for a fighter to be approved 
								<div class="mt-2">
                                <h5>Good enough?</h5>
                                <voting-buttons></voting-buttons>
                            </div> -->
						</div>
					</div>
				</div>	
			</div>
        @endforeach
    @else
        <p>There are no fighters currently waiting for approval. Try <a href="/add">adding</a> one yourself.</p>
    @endif

@endsection