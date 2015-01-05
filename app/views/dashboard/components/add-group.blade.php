@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ trans('cachet.dashboard.components') }}
        </span>
        > <small>Create a component group</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if($group = Session::get('group'))
                <div class='alert alert-{{ $group->isValid() ? "success" : "danger" }}'>
                    @if($group->isValid())
                    <strong>Awesome.</strong> Component group created.
                    @else
                    <strong>Whoops.</strong> Something went wrong with the group. {{ $group->getErrors() }}
                    @endif
                </div>
                @endif

                <form name='CreateComponentGroupForm' class='form-vertical' role='form' action='/dashboard/components/groups/add' method='POST'>
                    <fieldset>
                        <div class='form-group'>
                            <label for='incident-name'>Name</label>
                            <input type='text' class='form-control' name='group[name]' id='group-name' required />
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-default" href="{{ route('dashboard.components.groups') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
