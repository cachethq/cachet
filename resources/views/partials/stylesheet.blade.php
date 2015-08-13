@if($theme_setup)
<style type="text/css">
body.status-page {
    @if($theme_background_color)
    background-color: {{ $theme_background_color }};
    @endif
    @if($theme_text_color)
    color: {{ $theme_text_color }};
    @endif
}
</style>
@endif
