{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<feed xmlns="http://www.w3.org/2005/Atom"<?php foreach($namespaces as $n) echo " ".$n; ?>>
    <title type="text">{!! $channel['title'] !!}</title>
    <subtitle type="html"><![CDATA[{!! $channel['description'] !!}]]></subtitle>
    <link href="{{ Request::url() }}"></link>
    <id>{{ $channel['link'] }}</id>
    <link rel="alternate" type="text/html" href="{{ Request::url() }}" ></link>
    <link rel="self" type="application/atom+xml" href="{{ $channel['link'] }}" ></link>
@if (!empty($channel['logo']))
    <logo>{{ $channel['logo'] }}</logo>
@endif
@if (!empty($channel['icon']))
    <icon>{{ $channel['icon'] }}</icon>
@endif
        <updated>{{ $channel['pubdate'] }}</updated>
@foreach($items as $item)
        <entry>
            <author>
                <name>{{ $item['author'] }}</name>
            </author>
            <title type="text"><![CDATA[{!! $item['title'] !!}]]></title>
            <link rel="alternate" type="text/html" href="{{ $item['link'] }}"></link>
            <id>{{ $item['link'] }}</id>
            <summary type="html"><![CDATA[{!! $item['description'] !!}]]></summary>
            <content type="html"><![CDATA[{!! $item['content'] !!}]]></content>
            <updated>{{ $item['pubdate'] }}</updated>
        </entry>
@endforeach
</feed>
