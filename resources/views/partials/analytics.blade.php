@if($enable_external_dependencies)
@if($app_analytics)
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', '{{ $app_analytics }}', '{{ $_SERVER['SERVER_NAME'] or '' }}');
    ga('send', 'pageview');
</script>
@endif
@if($app_analytics_go_squared)
<script>
    !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
    arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
    d.src='https://d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
    insertBefore(d,q)}(window,document,'script','_gs');
    _gs('{{ $app_analytics_go_squared }}');
</script>
@endif
@if($app_analytics_piwik_url)
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://{{ $app_analytics_piwik_url }}";
        _paq.push(['setTrackerUrl', u+'/piwik.php']);
        _paq.push(['setSiteId', {{ $app_analytics_piwik_site_id }}]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="https://{{ $app_analytics_piwik_url }}/piwik.php?idsite={{ $app_analytics_piwik_site_id }}" style="border:0;" alt="" /></p></noscript>
@endif
@endif
