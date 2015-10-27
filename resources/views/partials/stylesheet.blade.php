<style type="text/css">
body.status-page {
    background-color: {{ $theme_background_color }};
    color: {{ $theme_text_color }};
    @if(Setting::get('app_banner'))
    padding-top: 0;
    @endif
}
.reds { color: {{ $theme_reds }} !important; }
.blues { color: {{ $theme_blues }} !important; }
.greens { color: {{ $theme_greens }} !important; }
.yellows { color: {{ $theme_yellows }} !important; }
.oranges { color: {{ $theme_oranges }} !important; }
.metrics { color: {{ $theme_metrics }} !important; }
.links { color: {{ $theme_links }} !important; }

/**
 * Banner background
 */
.app-banner {
    background-color: {{ $theme_banner_background_color }} !important;
}

.app-banner-padding {
    padding: {{ $theme_banner_padding }} !important;
}

/**
 * Alert overrides.
 */
.alert {
    background-color: {{ $theme_yellows }};
    border-color: {{ color_darken($theme_yellows, -0.1) }};
    color: {{ color_contrast($theme_yellows) }};
}
.alert.alert-success {
    background-color: {{ $theme_greens }};
    border-color: {{ color_darken($theme_greens, -0.1) }};
    color: {{ color_contrast($theme_greens) }};
}
.alert.alert-info {
    background-color: {{ $theme_blues }};
    border-color: {{ color_darken($theme_blues, -0.1) }};
    color: {{ color_contrast($theme_blues) }};
}
.alert.alert-danger {
    background-color: {{ $theme_reds }};
    border-color: {{ color_darken($theme_reds, -0.1) }};
    color: {{ color_contrast($theme_reds) }};
}

/**
 * Button Overrides
 */
.btn.links {
    color: {{ color_darken($theme_yellows, -0.3) }};
}
.btn.btn-success {
    background-color: {{ $theme_greens }};
    border-color: {{ color_darken($theme_greens, -0.1) }};
    color: {{ color_contrast($theme_greens) }};
}
.btn.btn-success.links {
    color: {{ color_darken($theme_greens, -0.3) }};
}
.btn.btn-success.btn-outline {
    background-color: transparent;
    border-color: {{ $theme_greens }};
    color: {{ $theme_greens }};
}
.btn.btn-success.btn-outline:hover {
    background-color: {{ $theme_greens }};
    border-color: {{ color_darken($theme_greens, -0.1) }};
    color: {{ color_contrast($theme_greens) }};
}
.btn.btn-info {
    background-color: {{ $theme_blues }};
    border-color: {{ color_darken($theme_blues, -0.1) }};
    color: {{ color_contrast($theme_blues) }};
}
.btn.btn-info.links {
    color: {{ color_darken($theme_blues, -0.3) }};
}
.btn.btn-danger {
    background-color: {{ $theme_reds }};
    border-color: {{ color_darken($theme_reds, -0.1) }};
    color: {{ color_contrast($theme_reds) }};
}
.btn.btn-danger.links {
    color: {{ color_darken($theme_reds, -0.3) }};
}

/**
 * Background fills Overrides
 */
.component {
    background-color: {{ $theme_background_fills }};
    border-color: {{ color_darken($theme_background_fills, -0.1) }};
}
.sub-component {
    background-color: {{ $theme_background_fills }};
    border-color: {{ color_darken($theme_background_fills, -0.1) }};
}
.incident {
    background-color: {{ $theme_background_fills }};
    border-color: {{ color_darken($theme_background_fills, -0.1) }};
}
.status-icon {
    background-color: {{ $theme_background_fills }};
    border-color: {{ color_darken($theme_background_fills, -0.1) }};
}
.panel.panel-message:after {
    border-left-color: {{ $theme_background_fills }};
    border-right-color: {{ $theme_background_fills }};
}
.footer a {
    color: {{ $theme_text_color }};
}
</style>
