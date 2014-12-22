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
							@if($component->description)
							<p><small>{{ $component->description }}</small></p>
							@endif
						</div>
						<div class='col-md-6'>
							<ul class='nav nav-pills pull-right'>
								<li role='presentation'><a href='/dashboard/components/{{ $component->id }}/edit' class='btn btn-info'>Edit</a></li>
								<li role='presentation'><a href='/dashboard/components/{{ $component->id }}/delete' class='btn btn-danger'>Delete</a></li>
							</ul>
						</div>
					</div>
				</li>
				@empty
				<li class='list-group-item text-danger'>You should add a component.</li>
				@endforelse
			</ul>
		</div>
	</div>
@stop
