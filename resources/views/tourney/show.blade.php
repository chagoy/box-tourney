@extends ('layout.app')

@section ('content')
	@if (count($tournament->boxers))
		<div class="container">
			<div class="divider text-center" data-content="ROUND 1"></div>
			<div class="columns">
				<div class="column col-3 col-sm-12">
					<h5 class="text-center">Seed 1 vs 8</h5>
					<div class="panel mb-2">
						<div class="panel-header text-center">
							<figure class="">
								<img class="img-responsive" src="{{ asset($tournament->boxers[0]->image_path) }}" alt="">
							</figure>
							<div class="panel-title h5 mt-10">
								{{ $tournament->boxers[0]->name }}
							</div>
						</div>
					</div>
					<h5 class="text-center">vs</h5>
					<div class="panel mb-2">
						<div class="panel-header text-center">
							<figure class="">
								<img class="img-responsive" src="{{ asset($tournament->boxers[7]->image_path) }}" alt="">
							</figure>
							<div class="panel-title h5 mt-10">
								{{ $tournament->boxers[7]->name }}
							</div>
						</div>
					</div>
					<div class="form-group">
						<button class="btn btn-alabama" id="round1fight1">Sim 1 vs 8</button>
					</div>
				</div>
				<div class="column col-3 col-sm-12">
					<h5 class="text-center">Seed 2 vs 7</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[1]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[1]->name }}
								</div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[6]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[6]->name }}
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-alabama" id="round1fight2">
								Sim 2 vs 7
							</button>
						</div>
				</div>

				<div class="column col-3 col-sm-12">
					<h5 class="text-center">Seed 3 vs 6</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[2]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[2]->name }}
								</div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[5]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[5]->name }}
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-alabama" id="round1fight3">
								Sim 3 vs 6
							</button>
						</div>

				</div>
				<div class="column col-3 col-sm-12">
					<h5 class="text-center">Seed 4 vs 5</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[3]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[3]->name }}
								</div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure class="">
									<img class="img-responsive" src="{{ asset($tournament->boxers[4]->image_path) }}" alt="">
								</figure>
								<div class="panel-title h5 mt-10">
									{{ $tournament->boxers[4]->name }}
								</div>
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-alabama" id="round1fight4">
								Sim 4 vs 5
							</button>
						</div>
				</div>
			</div>
			<div class="divider text-center" data-content="ROUND 2"></div>
			<div class="columns">
				<div class="column col-3 col-sm-12 col-mx-auto">
					<h5 class="text-center">1/8 vs 4/5</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img src="" id="round2seed1image" alt="" class="img-responsive">
								</figure>
								<div class="panel-title h5 mt-10" id="round2seed1name"></div>
								<div class="panel-subtitle" id="round2seed1method"></div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img src="" id="round2seed4image" alt="" class="img-responsive">
								</figure>
								<div class="panel-title h5 mt-10" id="round2seed4name"></div>
								<div class="panel-subtitle" id="round2seed4method"></div>
							</div>
						</div>
						
						<button id="round2fight1" class="btn btn-alabama hiddenElement">
							Sim 1 vs 4
						</button>
						
				</div>
				<div class="column col-3 col-sm-12 col-mx-auto">
					<h5 class="text-center">2/7 vs 3/6</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img src="" id="round2seed2image" alt="" class="img-responsive">
								</figure>
								<div class="panel-title h5 mt-10" id="round2seed2name"></div>
								<div class="panel-subtitle" id="round2seed2method"></div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img src="" id="round2seed3image" alt="" class="img-responsive">
								</figure>
								<div class="panel-title h5 mt-10" id="round2seed3name"></div>
								<div class="panel-subtitle" id="round2seed3method"></div>
							</div>
						</div>
						<button id="round2fight2" class="btn btn-alabama hiddenElement">
							Sim 2 vs 3
						</button>
				</div>
			</div>
			<div class="divider text-center" data-content="FINAL ROUND"></div>
			<div class="columns">
				<div class="column col-3 col-sm-12 col-mx-auto">
					<h5 class="text-center"></h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img class="img-responsive" src="" alt="" id="round3seed1image">
								</figure>
								<div class="panel-title h5 mt-10" id="round3seed1name"></div>
								<div class="panel-subtitle" id="round3seed1method"></div>
							</div>
						</div>
						<h5 class="text-center">vs</h5>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img class="img-responsive" src="" alt="" id="round3seed2image">
								</figure>
								<div class="panel-title h5 mt-10" id="round3seed2name"></div>
								<div class="panel-subtitle" id="round3seed2method"></div>
							</div>
						</div>
						<div class="form-group">
							<button id="finalmatch" class="btn btn-alabama hiddenElement">
								Sim Final
							</button>
						</div>
				</div>
			</div>
			<div class="divider text-center" data-content="WINNER"></div>
			<div class="columns">
				<div class="column col-4 col-sm-12 col-mx-auto">
					<h3 class="text-center">winner</h3>
						<div class="panel mb-2">
							<div class="panel-header text-center">
								<figure>
									<img class="img-responsive" src="" alt="" id="winnerimage">
								</figure>
								<div class="panel-title h5 mt-10" id="winnername"></div>
								<div class="panel-subtitle" id="winnermethod"></div>
							</div>
						</div>
					<share-button></share-button>
					<robbery tournament="{{ $tournament->slug }}"></robbery>
				</div>
			</div>
		</div>
	@endif
@endsection