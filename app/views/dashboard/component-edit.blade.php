@extends('layout.dashboard')

@section('content')
    <div class="header">
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ Lang::get('cachet.dashboard.components') }}
        </span>
        > <small>Edit component</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if($savedComponent = Session::get('savedComponent'))
                <div class="alert alert-{{ $savedComponent->isValid() ? "success" : "danger" }}">
                    @if($savedComponent->isValid())
                    <strong>Awesome.</strong> Component updated.
                    @else
                    <strong>Whoops.</strong> Something went wrong with the component. {{ $savedComponent->getErrors() }}
                    @endif
                </div>
                @endif

                <form name='EditComponentForm' class='form-vertical' role='form' action='/dashboard/components/{{ $component->id }}/edit' method='POST'>
                    <fieldset>
                        <div class='form-group'>
                            <label for='incident-name'>Name</label>
                            <input type='text' class='form-control' name='component[name]' id='component-name' required value='{{ $component->name }}' />
                        </div>
                        <div class='form-group'>
                            <label for='component-status'>Status</label>
                            <select name='component[status]' class='form-control'>
                                @foreach(Lang::get('cachet.component.status') as $statusID => $status)
                                <option value='{{ $statusID }}' {{ $statusID === $component->status ? "selected" : "" }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>Description</label>
                            <textarea name='component[description]' class='form-control' rows='5'>{{ $component->description }}</textarea>
                        </div>
                        <hr />
                        <div class='form-group'>
                            <label>Link</label>
                            <input type='text' name='component[link]' class='form-control' value='{{ $component->link }}' />
                        </div>
                        <div class='form-group'>
                            <label>Tags</label>
                            <textarea name='component[tags]' class='form-control' rows='2'>{{ $component->tags }}</textarea>
                            <span class='help-block'>Comma separated.</span>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Save Component</button>
                    <a class="btn btn-default" href="{{ URL::route('dashboard.components') }}">Cancel</a>
                    <input type='hidden' name='component[user_id]' value='{{ $component->agent_id || Auth::user()->id }}' />
                </form>
            </div>
        </div>
    </div>
    @stop
