@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icons ion-outlet"></i> {{ trans_choice('dashboard.components.components', 2) }}
        </span>
        > <small>{{ trans('dashboard.components.add.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.dashboard.errors')
                <form name="CreateComponentForm" class="form-horizontal" role="form" action="/dashboard/components/add" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label for="component-name">{{ trans('forms.components.name') }}</label>
                            <input type="text" class="form-control" name="component[name]" id="component-name" required>
                        </div>
                        <div class="form-group">
                            <label for="component-status">{{ trans('forms.components.status') }}</label>
                            <select name="component[status]" class="form-control">
                                @foreach(trans('cachet.components.status') as $statusID => $status)
                                <option value="{{ $statusID }}">{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.components.description') }}</label>
                            <textarea name="component[description]" class="form-control" rows="5"></textarea>
                        </div>
                        <input type="hidden" name="component[group_id]" value="0">
                        @if($groups->count() > 0)
                        <div class="form-group">
                            <label>{{ trans('forms.components.group') }}</label>
                            <select name="component[group_id]" class="form-control">
                                <option selected></option>
                                @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <hr>
                        <div class="form-group">
                            <label>{{ trans('forms.components.link') }}</label>
                            <input type="text" name="component[link]" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.components.tags') }}</label>
                            <input name="component[tags]" class="form-control">
                            <span class="help-block">{{ trans('forms.components.tags-help') }}</span>
                        </div>
                    </fieldset>

                    <input type="hidden" name="component[user_id]" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="component[order]" value="0">

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.create') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.components') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
