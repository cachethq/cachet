@if($app_footer)
{!! $app_footer !!}
@elseif($show_support)
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <p>
                    {!! trans('cachet.powered_by') !!}
                    @if($show_timezone)
                    {{ trans('cachet.timezone', ['timezone' => $timezone]) }}
                    @endif
                </p>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
