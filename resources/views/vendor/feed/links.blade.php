@foreach($feeds as $name => $title)
    <link rel="alternate" type="application/rss+xml" href="{{ route("feeds.{$name}") }}" title="{{ $title }}">
@endforeach
