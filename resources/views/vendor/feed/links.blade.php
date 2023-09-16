@foreach($feeds as $name => $feed)
    <link rel="alternate" type="{{ $feed['type'] ?? 'application/atom+xml' }}" href="{{ route("feeds.{$name}") }}" title="{{ $feed['title'] }}">
@endforeach
