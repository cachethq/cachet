<style type='text/css'>
body.status-page {
	@if($styleBackgroundColor = Setting::get('style_background_color'))
	background-color: #{{ $styleBackgroundColor }};
	@endif
	@if($styleTextColor = Setting::get('style_text_color'))
	color: #{{ $styleTextColor }};
	@endif
}
</style>
