@extends('layout.master')

@section('content')
<div class='text-header'>
    <h1>Dashboard. <small>Manage Cachet.</small></h1>
</div>

<hr />

<div role='tabpanel'>
    <ul class='nav nav-tabs' role='tablist'>
        <li role='presentation' class='active'><a href='#dash' role='tab' data-toggle='tab'>Home</a></li>
        <li role='presentation'><a href='#components' role='tab' data-toggle='tab'>Components</a></li>
        <li role='presentation'><a href='#incidents' role='tab' data-toggle='tab'>Incidents</a></li>
        <li role='presentation'><a href='#metrics' role='tab' data-toggle='tab'>Metrics</a></li>
        <li role='presentation'><a href='#subscribers' role='tab' data-toggle='tab'>Subscribers</a></li>
    </ul>

    <div class='tab-content'>
        <div role='tabpanel' class='tab-pane active' id='dash'>
            <p>Coming soon... <a href="/">Back to Status Page.</a></p>
            <p>Once we're ready this tab will be showing you a mini status page.</p>
        </div>
        <div role='tabpanel' class='tab-pane' id='components'>
            <p>Add, edit and delete components here.</p>
        </div>
        <div role='tabpanel' class='tab-pane' id='incidents'>
            <p>Add, edit and delete incidents here.</p>
        </div>
        <div role='tabpanel' class='tab-pane' id='metrics'>
            <p>Add, edit and delete metrics (and metric points) here.</p>
        </div>
        <div role='tabpanel' class='tab-pane' id='users'>
            <p>Add, edit and delete users here.</p>
        </div>
        <div role='tabpanel' class='tab-pane' id='subscribers'>
            <p>Show all subscribers here.</p>
        </div>
    </div>
</div>
@stop
