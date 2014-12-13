@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-list-ul"></i> {{ Lang::get('cachet.dashboard.components') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Components</h3>
			<ul class='list-group'>
				@forelse($components as $component)
				<li class='list-group-item'>
					<div class='row'>
						<div class='col-md-6'>
							<strong>{{ $component->name }}</strong>
						</div>
						<div class='col-md-6'>
							<ul class='nav nav-pills'>
								<li role='presentation'><a href='javascript: void(0);'>Edit</a></li>
								<li role='presentation'><a href='/dashboard/components/{{ $component->id }}/delete'>Delete</a></li>
							</ul>
						</div>
					</div>
				</li>
				@empty
				<li class='list-group-item text-danger'>You should a component.</li>
				@endforelse
			</ul>

			<h3>Create a component</h3>
			@if($component = Session::get('component'))
				<div class='alert alert-{{ $component->isValid() ? "success" : "danger" }}'>
					@if($component->isValid())
					<strong>Awesome.</strong> Component added.
					@else
					<strong>Whoops.</strong> Something went wrong with the component. {{ $component->getErrors() }}
					@endif
				</div>
				@endif

				<form name='CreateComponentForm' class='form-vertical' role='form' action='/dashboard/components/create' method='POST'>
					<fieldset>
						<div class='form-group'>
							<label for='incident-name'>Component Name</label>
							<input type='text' class='form-control' name='component[name]' id='component-name' required />
						</div>
						<div class='form-group'>
							<label>Description</label>
							<textarea name='component[description]' class='form-control' rows='5'></textarea>
						</div>
					</fieldset>

					<button type="submit" class="btn btn-primary">Submit</button>
					<input type='hidden' name='component[user_id]' value='{{ Auth::user()->id }}' />
				</form>
			</div>
		</div>
	</div>
@stop
