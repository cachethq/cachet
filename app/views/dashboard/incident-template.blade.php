@extends('layout.dashboard')

@section('content')
	<div class="header">
        <span class="uppercase">
		    <i class="fa fa-dashboard"></i> {{ Lang::get('cachet.dashboard.incident-add') }}
        </span>
        > <small>Create an Incident Template</small>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @if($template = Session::get('template'))
                <div class='alert alert-{{ $template->isValid() ? "success" : "danger" }}'>
                    @if($template->isValid())
                    <strong>Awesome.</strong> Template added.
                    @else
                    <strong>Whoops.</strong> Something went wrong with the template.
                    @endif
                </div>
                @endif

                {{ Form::open(['name' => 'IncidentTemplateForm', 'class' => 'form-vertical', 'role' => 'form']) }}
                    <fieldset>
                        <div class='form-group'>
                            <label for='template-name'>Template Name</label>
                            <input type='text' class='form-control' name='template[name]' id='template-name' required />
                        </div>
                        <div class='form-group'>
                            <label>Template</label>
                            <textarea name='template[template]' class='form-control' rows='5' required></textarea>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Create</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
