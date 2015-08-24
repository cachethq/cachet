<style type="text/css">
body.status-page {
    background-color: {{ $theme_background_color }};
    color: {{ $theme_text_color }};
}
.reds { color: {{ $theme_reds }} !important; }
.blues { color: {{ $theme_blues }} !important; }
.greens { color: {{ $theme_greens }} !important; }
.yellows { color: {{ $theme_yellows }} !important; }
.oranges { color: {{ $theme_oranges }} !important; }
.metrics { color: {{ $theme_metrics }} !important; }
.links { color: {{ $theme_links }} !important; }

/**
 * Alert overrides.
 */
.alert {
    background-color: {{ $theme_yellows }} !important;
    border-color: {{ color_darken($theme_yellows, -0.1) }} !important;
}
.alert.alert-success {
    background-color: {{ $theme_greens }} !important;
    border-color: {{ color_darken($theme_greens, -0.1) }} !important;
}
.alert.alert-info {
    background-color: {{ $theme_blues }} !important;
    border-color: {{ color_darken($theme_blues, -0.1) }} !important;
}
.alert.alert-danger {
    background-color: {{ $theme_reds }} !important;
    border-color: {{ color_darken($theme_reds, -0.1) }} !important;
}

/**
 * Button Overrides
 */
.btn.links {
    color: {{ color_darken($theme_yellows, -0.3) }} !important
}
.btn.btn-success {
    background-color: {{ $theme_greens }} !important;
    border-color: {{ color_darken($theme_greens, -0.1) }} !important;
}
.btn.btn-success.links {
    color: {{ color_darken($theme_greens, -0.3) }} !important
}
.btn.btn-info {
    background-color: {{ $theme_blues }} !important;
    border-color: {{ color_darken($theme_blues, -0.1) }} !important;
}
.btn.btn-info.links {
    color: {{ color_darken($theme_blues, -0.3) }} !important
}
.btn.btn-danger {
    background-color: {{ $theme_reds }} !important;
    border-color: {{ color_darken($theme_reds, -0.1) }} !important;
}
.btn.btn-danger.links {
    color: {{ color_darken($theme_reds, -0.3) }} !important
}
</style>
