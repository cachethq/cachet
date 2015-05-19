@if($themeSetup)
<style type="text/css">
body.status-page {
    @if($themeBackgroundColor)
    background-color: {{ $themeBackgroundColor }};
    @endif
    @if($themeTextColor)
    color: {{ $themeTextColor }};
    @endif
}
</style>
@endif
