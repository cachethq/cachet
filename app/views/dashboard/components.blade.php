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
				<li class='list-group-item text-danger'>You should add a component.</li>
				@endforelse
			</ul>
		</div>
	</div>
@stop
