@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-people-outline"></i> {{ trans('dashboard.team.team') }}
    </span>
</div>
<div class="content-wrapper">
    <invite-team inline-template>
        <div class="row">
            <div class="col-sm-12">
                @include('partials.errors')
                <form name="UserForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.team.invite', [], 'post') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.user.team.description') }}</label>
                        </div>
                        <div class="form-group" v-for="(email, index) in emails">
                            <div :class="{ 'input-group': canRemove }">
                                <input type="email" class="form-control" name="emails[]" placeholder="{{ trans('forms.user.team.email') }}" v-model="email.email">
                                <span class="input-group-btn" v-if="canRemove">
                                    <button type="button" @click="remove(index)" class="btn btn-danger">Remove</button>
                                </span>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">{{ trans('forms.invite') }}</button>
                            <a class="btn btn-default" href="{{ cachet_route('dashboard.team') }}">{{ trans('forms.cancel') }}</a>
                            <button type="button" @click="add" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </invite-team>
</div>
@stop
