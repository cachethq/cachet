@extends('layout.dashboard')

@section('content')
    <div class="header">
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ Lang::get('cachet.dashboard.components') }}
        </span>
        > <small>Create a component</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if($component = Session::get('component'))
                <div class='alert alert-{{ $component->isValid() ? "success" : "danger" }}'>
                    @if($component->isValid())
                    <strong>Awesome.</strong> Component added.
                    @else
                    <strong>Whoops.</strong> Something went wrong with the component. {{ $component->getErrors() }}
                    @endif
                </div>
                @endif

                <form name='CreateComponentForm' class='form-vertical' role='form' action='/dashboard/components/add' method='POST'>
                    <fieldset>
                        <div class='form-group'>
                            <label for='incident-name'>Name</label>
                            <input type='text' class='form-control' name='component[name]' id='component-name' required />
                        </div>
                        <div class='form-group'>
                            <label for='component-status'>Status</label>
                            <select name='component[status]' class='form-control'>
                                @foreach(Lang::get('cachet.component.status') as $statusID => $status)
                                <option value='{{ $statusID }}'>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class='form-group'>
                            <label>Description</label>
                            <textarea name='component[description]' class='form-control' rows='5'></textarea>
                        </div>
                        <hr />
                        <div class='form-group'>
                            <label>Link</label>
                            <input type='text' name='component[link]' class='form-control' />
                        </div>
                        <div class='form-group'>
                            <label>Tags</label>
                            <textarea name='component[tags]' class='form-control' rows='2'></textarea>
                            <span class='help-block'>Comma separated.</span>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-default" href="{{ URL::route('dashboard.components') }}">Cancel</a>
                    <input type='hidden' name='component[user_id]' value='{{ Auth::user()->id }}' />
                </form>
            </div>
        </div>
    </div>
@stop
