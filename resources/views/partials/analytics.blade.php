@if($googleTracking = Setting::get('app_analytics'))
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '{{ $googleTracking }}', '{{ $_SERVER['SERVER_NAME'] or '' }}');
  ga('send', 'pageview');
</script>
@endif
@if($gosquaredTracking = Setting::get('app_analytics_gs'))
<script>
  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
  insertBefore(d,q)}(window,document,'script','_gs');

  _gs('{{ $gosquaredTracking }}');
</script>
@endif
@if($piwikTracking = Setting::get('app_analytics_pi_url'))
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//{{ $piwikTracking }}";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', {{ Setting::get('app_analytics_pi_siteid', 1) }}]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//{{ $piwikTracking }}/piwik.php?idsite={{ Setting::get('app_analytics_pi_siteid', 1) }}" style="border:0;" alt="" /></p></noscript>
@endif
