@extends('layout.dashboard')

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.8.0/codemirror.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.8.0/codemirror.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.8.0/mode/twig/twig.min.js"></script>

<script>
(function() {
    console.log(document.getElementById('cm-editor'));
    var editor = CodeMirror.fromTextArea(document.getElementById('cm-editor'), {
        lineNumbers: true,
        mode: 'twig',
        lineWrapping: true
    });
}());
</script>
@stop

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-document"></i> {{ trans('dashboard.incidents.templates.title') }}
        </span>
        &gt; <small>{{ trans('dashboard.incidents.templates.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @if($updated_template = Session::get('updated_template'))
                <div class="alert alert-{{ ($template_errors = Session::get('template_errors')) ? 'danger' : 'success' }}">
                    @if($template_errors)
                    {{ sprintf("%s - %s", trans('dashboard.notifications.whoops'), trans('dashboard.incidents.templates.edit.failure').' '.$template_errors) }}
                    @else
                    {{ sprintf("%s - %s", trans('dashboard.notifications.awesome'), trans('dashboard.incidents.templates.edit.success')) }}
                    @endif
                </div>
                @endif

                <form class='form-vertical' name='IncidentTemplateForm' role='form' method='POST'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label for="template-name">{{ trans('forms.incidents.templates.name') }}</label>
                            <input type="text" class="form-control" name="template[name]" id="template-name" required value="{{ $template->name }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.templates.template') }}</label>
                            <textarea name="template[template]" id="cm-editor" class="form-control" rows="8">{{ $template->template }}</textarea>
                            <span class="help-block">{!! trans('forms.incidents.templates.twig') !!}</span>
                        </div>
                    </fieldset>

                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.templates.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
