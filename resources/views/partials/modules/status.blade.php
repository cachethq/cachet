<div class="section-status">
    <div class="alert alert-{{ $system_status }}">{{ $system_message }}
    @if ($show_system_updated)
        <span class="pull-right"><small>{{ trans('cachet.service.updated') }} {{ $system_updated }}</small></span>
    @endif
    </div>
</div>
