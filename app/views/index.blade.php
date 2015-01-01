@extends('layout.master')

@section('content')
    @if($bannerImage = Setting::get('app_banner'))
    <div class='row'>
        <div class='col-md-12 text-center'>
            <?php $bannerType = Setting::get('app_banner_type') ?>
            <img src='data:{{ $bannerType }};base64, {{ $bannerImage}}' class='banner-image' />
        </div>
    </div>
    @endif

    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if($aboutApp = Setting::get('app_about'))
    <div class='about-app'>
        <h1>{{ Lang::get('cachet.about_this_site') }}</h1>
        <p>{{ $aboutApp }}</p>
    </div>
    @endif

    @include('partials.components')

    {{-- @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif --}}

    <h1>{{ Lang::get('cachet.past_incidents') }}</h1>

    <?php
        $today = Carbon::now();
        $startDate = Carbon::now();

        // Check if we have another starting point
        if (Input::has('start_date')) {
            try {
                // If date provided is valido
                $oldDate = Carbon::createFromFormat('Y-m-d', Input::get('start_date'));
                // If trying to get a future date fallback to today
                if ($today->gt($oldDate)) {
                      $startDate = $oldDate;
                }
            } catch (Exception $e) {
                // Fallback to today
            }
        }
    ?>

    @foreach(range(0, 7) as $i => $v)
        <?php
            // Get incidents from selected dayte
            $incidentDate = $startDate->copy()->subDays($i);
            $incidents = Incident::whereBetween('created_at', [
                $incidentDate->format('Y-m-d') . ' 00:00:00',
                $incidentDate->format('Y-m-d') . ' 23:59:59',
            ])->orderBy('created_at', 'desc')->get();
        ?>
        <h4>{{ $incidentDate->format('jS F Y') }}</h4>
    @include('partials.incident', array('incidents', $incidents))
    @endforeach
    <hr/>
    <nav>
        <ul class="pager">
            <li class="previous">
                <a href="{{ URL::route('status-page') }}?start_date={{ $startDate->copy()->subWeek()->subDay()->toDateString() }}">
                    <span aria-hidden="true">&larr;</span> {{ Lang::get('cachet.previous_week') }}
                </a>
            </li>
            <li class="next @if( ! $today->gt($startDate)) disabled @endif">
                <a @if($today->gt($startDate)) href="{{ URL::route('status-page') }}?start_date={{ $startDate->copy()->addWeek()->addDay()->toDateString() }}" @endif>
                    {{ Lang::get('cachet.next_week') }} <span aria-hidden="true">&rarr;</span>
                </a>
            </li>
        </ul>
    </nav>
@stop
