<style type="text/css">
body.status-page {
    background-color: {{ $themeBackgroundColor }};
    color: {{ $themeTextColor }};
    @if($appBanner)
    padding-top: 0;
    @endif
}
p, strong { color: {{ $themeTextColor }} !important; }
.reds { color: {{ $themeReds }} !important; }
.blues { color: {{ $themeBlues }} !important; }
.greens { color: {{ $themeGreens }} !important; }
.yellows { color: {{ $themeYellows }} !important; }
.oranges { color: {{ $themeOranges }} !important; }
.greys { color: {{ $themeGreys }} !important; }
.metrics { color: {{ $themeMetrics }} !important; }
.links { color: {{ $themeLinks }} !important; }

/**
 * Banner background
 */
.app-banner {
    background-color: {{ $themeBannerBackgroundColor }} !important;
}

.app-banner-padding {
    padding: {{ $themeBannerPadding }} !important;
}

/**
 * Alert overrides.
 */
.alert {
    background-color: {{ $themeYellows }};
    border-color: {{ color_darken($themeYellows, -0.1) }};
    color: {{ color_contrast($themeYellows) }};
}
.alert.alert-success {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.alert.alert-info {
    background-color: {{ $themeBlues }};
    border-color: {{ color_darken($themeBlues, -0.1) }};
    color: {{ color_contrast($themeBlues) }};
}
.alert.alert-danger {
    background-color: {{ $themeReds }};
    border-color: {{ color_darken($themeReds, -0.1) }};
    color: {{ color_contrast($themeReds) }};
}

/**
 * Button Overrides
 */
.btn.links {
    color: {{ color_darken($themeYellows, -0.3) }};
}
.btn.btn-success {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.btn.btn-success.links {
    color: {{ color_darken($themeGreens, -0.3) }};
}
.btn.btn-success.btn-outline {
    background-color: transparent;
    border-color: {{ $themeGreens }};
    color: {{ $themeGreens }};
}
.btn.btn-success.btn-outline:hover {
    background-color: {{ $themeGreens }};
    border-color: {{ color_darken($themeGreens, -0.1) }};
    color: {{ color_contrast($themeGreens) }};
}
.btn.btn-info {
    background-color: {{ $themeBlues }};
    border-color: {{ color_darken($themeBlues, -0.1) }};
    color: {{ color_contrast($themeBlues) }};
}
.btn.btn-info.links {
    color: {{ color_darken($themeBlues, -0.3) }};
}
.btn.btn-danger {
    background-color: {{ $themeReds }};
    border-color: {{ color_darken($themeReds, -0.1) }};
    color: {{ color_contrast($themeReds) }};
}
.btn.btn-danger.links {
    color: {{ color_darken($themeReds, -0.3) }};
}

/**
 * Background fills Overrides
 */
.component {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.sub-component {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.incident {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.status-icon {
    background-color: {{ $themeBackgroundFills }};
    border-color: {{ color_darken($themeBackgroundFills, -0.1) }};
}
.panel.panel-message:before {
    border-left-color: {{ $themeBackgroundFills }} !important;
    border-right-color: {{ $themeBackgroundFills }} !important;
}
.panel.panel-message:after {
    border-left-color: {{ $themeBackgroundFills }} !important;
    border-right-color: {{ $themeBackgroundFills }} !important;
}
.footer a {
    color: {{ $themeTextColor }};
}
</style>
