@extends ('layout.app')

@section ('content')

	<div class="container">
		<div class="columns">
			<div class="col-4 ml-2">
				@if (Auth::guest())
					<h3>You are not logged in</h3>
					<h5>Please <a href="{{ route('register') }}">register</a>/<a href="{{ route('login') }}">login</a> to add a boxer to our database</h3>
				@else
				<h3>Add a new boxer to the database</h3>
				<form action="/add" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group{{ $errors->has('name') ? ' has-error': ''}}">
						<label for="name" class="form-label">Name</label>
						<input type="text" class="form-input" name="name" value="{{ old('name') }}" required>
						@if ($errors->has('name'))
							<p class="form-input-hint">{{ $errors->first('name') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('weight') ? ' has-error': ''}}">
						<label for="weight" class="form-label">Division</label>
						<select name="weight" id="" class="form-select" value="{{ old('weight') }}">
							@foreach ($weights as $weight)
								<option value="{{ $weight->id }}">{{ $weight->division }}</option>
							@endforeach
						</select>
						@if ($errors->has('weight'))
							<p class="form-input-hint">{{ $errors->first('weight') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('dob') ? ' has-error': ''}}">
						<label for="dob" class="form-label">Date of Birth</label>
						<input type="date" name="dob" class="form-input" value="{{ old('dob') }}">
						@if ($errors->has('dob'))
							<p class="form-input-hint">{{ $errors->first('dob') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('country') ? ' has-error': ''}}">
						<label for="country" class="form-label">Country</label>
						<input type="text" name="country" class="form-input" value="{{ old('country') }}">
						@if ($errors->has('country'))
							<p class="form-input-hint">{{ $errors->first('country') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('power') ? ' has-error': ''}}">
						<label for="power" class="form-label">Power</label>
						<input type="number" name="power" class="form-input" value="{{ old('power') }}">
						@if ($errors->has('power'))
							<p class="form-input-hint">{{ $errors->first('power') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('speed') ? ' has-error': ''}}">
						<label for="chin" class="form-label">Speed</label>
						<input type="number" name="speed" class="form-input" value="{{ old('speed') }}">
						@if ($errors->has('speed'))
							<p class="form-input-hint">{{ $errors->first('speed') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('defense') ? ' has-error': ''}}">
						<label for="defense" class="form-label">Defense</label>
						<input type="number" name="defense" class="form-input" value="{{ old('defense') }}">
						@if ($errors->has('defense'))
							<p class="form-input-hint">{{ $errors->first('defense') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('offense') ? ' has-error': ''}}">
						<label for="offense" class="form-label">Offense</label>
						<input type="number" name="offense" class="form-input" value="{{ old('offense') }}">
						@if ($errors->has('offense'))
							<p class="form-input-hint">{{ $errors->first('offense') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('chin') ? ' has-error': ''}}">
						<label for="chin" class="form-label">Chin</label>
						<input type="number" name="chin" class="form-input" value="{{ old('chin') }}">
						@if ($errors->has('chin'))
							<p class="form-input-hint">{{ $errors->first('chin') }}</p>
						@endif
					</div>
					<div class="form-group{{ $errors->has('stamina') ? ' has-error': ''}}">
						<label for="stamina" class="form-label">Stamina</label>
						<input type="number" name="stamina" class="form-input" value="{{ old('stamina') }}">
						@if ($errors->has('stamina'))
							<p class="form-input-hint">{{ $errors->first('stamina') }}</p>
						@endif
					</div>
					<div class="form-group">
						<input type="file" name="image">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-alabama">Submit</button>
					</div>
				</form>
				@endif
			</div>
		</div>
	</div>

@endsection