@if(Setting::get('show_support'))
<footer class='footer'>
    <p>{{ Lang::get('cachet.powered_by', array('app' => Setting::get('app_name'))) }}</p>
</footer>
@endif
