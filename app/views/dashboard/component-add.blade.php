@extends('layout.dashboard')

@section('content')
<div class="header">
	<i class="fa fa-list-ul"></i> {{ Lang::get('cachet.dashboard.components') }}
</div>
<div class="row">
	<div class="col-sm-12">
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

		<form name='CreateComponentForm' class='form-vertical' role='form' action='/dashboard/components/add' method='POST'>
			<fieldset>
				<div class='form-group'>
					<label for='incident-name'>Name</label>
					<input type='text' class='form-control' name='component[name]' id='component-name' required />
				</div>
				<div class='form-group'>
					<label for='component-status'>Status</label>
					<select name='component[status]' class='form-control'>
						@foreach(Lang::get('cachet.component.status') as $statusID => $status)
						<option value='{{ $statusID }}'>{{ $status }}</option>
						@endforeach
					</select>
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
@stop
