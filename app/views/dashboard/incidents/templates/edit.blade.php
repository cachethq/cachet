@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-document"></i> {{ trans('dashboard.incidents.templates.title') }}
        </span>
        > <small>{{ trans('dashboard.incidents.templates.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @if($updatedTemplate = Session::get('updatedTemplate'))
                <div class="alert alert-{{ $updatedTemplate->isValid() ? 'success' : 'danger' }}">
                    @if($updatedTemplate->isValid())
                    {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.awesome'), trans('dashboard.incidents.templates.edit.success')) }}
                    @else
                    {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.edit.failure').' '.$updatedTemplate->getErrors()) }}
                    @endif
                </div>
                @endif

                {{ Form::open(['name' => 'IncidentTemplateForm', 'class' => 'form-horizontal', 'role' => 'form']) }}
                    <fieldset>
                        <div class="form-group">
                            <label for="template-name">{{ trans('forms.incidents.templates.name') }}</label>
                            <input type="text" class="form-control" name="template[name]" id="template-name" required value="{{ $template->name }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.templates.template') }}</label>
                            <div class='markdown-control'>
                                <textarea name="template[template]" class="form-control" rows="5" required>{{ $template->template }}</textarea>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
