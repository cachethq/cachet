@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ trans_choice('dashboard.components.groups.groups', 2) }}
        </span>
        > <small>{{ trans('dashboard.components.groups.add.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if($group = Session::get('group'))
                <div class="alert alert-{{ $group->isValid() ? 'success' : 'danger' }}">
                    @if($group->isValid())
                        {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.awesome'), trans('dashboard.components.groups.add.success')) }}
                    @else
                        {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.whoops'), trans('dashboard.components.groups.add.failure').' '.$group->getErrors()) }}
                    @endif
                </div>
                @endif

                <form name="CreateComponentGroupForm" class="form-vertical" role="form" action="/dashboard/components/groups/add" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label for="incident-name">{{ trans('forms.components.groups.name') }}</label>
                            <input type="text" class="form-control" name="group[name]" id="group-name" required />
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                    <a class="btn btn-default" href="{{ route('dashboard.components.groups') }}">{{ trans('forms.cancel') }}</a>
                </form>
            </div>
        </div>
    </div>
@stop
