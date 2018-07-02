@if($enableExternalDependencies)
@if($appAnalytics)
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', '{{ $appAnalytics }}', 'auto');
    ga('send', 'pageview');
</script>
@endif
@if($appAnalyticsGoSquared)
<script>
    !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
    arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
    d.src='https://d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
    insertBefore(d,q)}(window,document,'script','_gs');
    _gs('{{ $appAnalyticsGoSquared }}');
</script>
@endif
@if($appAnalyticsPiwikUrl)
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="{{ $appAnalyticsPiwikUrl }}";
        _paq.push(['setTrackerUrl', u+'/piwik.php']);
        _paq.push(['setSiteId', {{ $appAnalyticsPiwikSiteId }}]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<noscript><p><img src="{{ $appAnalyticsPiwikUrl }}/piwik.php?idsite={{ $appAnalyticsPiwikSiteId }}" style="border:0;" alt="" /></p></noscript>
@endif
@endif
