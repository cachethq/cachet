@if(Setting::get('show_support'))
<hr />
<div class='footer'>
    <p>{{ Lang::get('cachet.powered_by', array('app' => Setting::get('app_name'))) }}</p>
</div>
@endif
