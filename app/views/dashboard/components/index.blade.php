@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ trans('cachet.dashboard.components') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.components.add') }}">
            {{ trans('cachet.dashboard.component-add') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <form name='componentList'>
                <div class="col-sm-12 striped-list" id='component-list'>
                    @forelse($components as $component)
                    <div class='row striped-list-item'>
                        <div class='col-md-8'>
                            <h4><span class='drag-handle'><i class='ion-drag'></i></span> {{ $component->name }} <small>{{ $component->humanStatus }}</small></h4>
                            @if($component->description)
                            <p><small>{{ $component->description }}</small></p>
                            @endif
                        </div>
                        <div class='col-md-4 text-right'>
                            <a href='/dashboard/components/{{ $component->id }}/edit' class='btn btn-default'>Edit</a>
                            <a href='/dashboard/components/{{ $component->id }}/delete' class='btn btn-danger'>Delete</a>
                        </div>
                        <input type='hidden' rel='order' name='component[{{ $component->id }}]' value='{{ $component->order }}' />
                    </div>
                    @empty
                    <div class='list-group-item text-danger'>You should add a component.</div>
                    @endforelse
                </div>
            </form>
        </div>
    </div>
@stop
