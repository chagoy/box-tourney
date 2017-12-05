@extends ('layout.app')

@section ('content')

	<div class="container">
		<h3>Pick Your 8</h3>
		
		<div class="column col-md-12">
			<form action="/test" method="POST">
						{{ csrf_field() }}
						<div class="flex-container">
							@foreach ($boxers as $boxer)
							{{-- <label 
								for="test{{ $loop->iteration }}" 
								id="boxerInput" class="square" 
								style="background-image: url( {{ $boxer->image }} );">
								<input id="boxerInput" name="test{{ $loop->iteration }}" value="{{ $boxer->id }}" type="checkbox">
								<div class="name-bar">
									<div class="title text-center">
										<p class="">{{ $boxer->name }}</p>
									</div>
								</div>
							</label> --}}
							<input 
								type="checkbox" 
								name="test{{ $loop->iteration }}"
								value="{{ $boxer->id }}"
								id="boxerInput{{ $loop->iteration }}">
							<label 
								for="boxerInput{{ $loop->iteration }}"
								id="boxerInput{{ $loop->iteration }}"
								class="square"
								style="background-image: url( {{ asset($boxer->image_path) }}">		
								<div class="name-bar">
									<div class="title text-center">
										<p>{{ $boxer->name }}</p>
									</div>
								</div>
							</label>
							@endforeach
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-alabama mt-2">submit</button>
						</div>
					</form>
					@if (count($errors))
						<h4 class="text-error">* {{ $errors->first('amount') }}</h4>
					@endif
		</div>
	</div>

@endsection