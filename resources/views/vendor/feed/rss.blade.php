{!! '<'.'?'.'xml version="1.0" encoding="UTF-8" ?>' !!}
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:webfeeds="http://webfeeds.org/rss/1.0" xmlns:media="http://search.yahoo.com/mrss/"<?php foreach($namespaces as $n) echo " ".$n; ?>>
    <channel>
        <title>{!! $channel['title'] !!}</title>
        <link>{{ Request::url() }}</link>
        <description><![CDATA[{!! $channel['description'] !!}]]></description>
        <atom:link href="{{ $channel['link'] }}" rel="self"></atom:link>
        @if (!empty($channel['copyright']))
        <copyright>{{ $channel['copyright'] }}</copyright>
        @endif
        @if (!empty($channel['color']))
        <webfeeds:accentColor>{{ $channel['color'] }}</webfeeds:accentColor>
        @endif
        @if (!empty($channel['cover']))
        <webfeeds:cover image="{{ $channel['cover'] }}">
        @endif
        @if (!empty($channel['icon']))
        <webfeeds:icon>{{ $channel['icon'] }}</webfeeds:icon>
        @endif
        @if (!empty($channel['logo']))
        <webfeeds:logo>{{ $channel['logo'] }}</webfeeds:logo>
        <image>
            <url>{{ $channel['logo'] }}</url>
            <title>{{ $channel['title'] }}</title>
            <link>{{ Request::url() }}</link>
        </image>
        @endif
        @if (!empty($channel['related']))
        <webfeeds:related layout="card" target="browser">
        @endif
        @if (!empty($channel['ga']))
        <webfeeds:analytics id="{{ $channel['ga'] }}" engine="GoogleAnalytics">
        @endif
        <language>{{ $channel['lang'] }}</language>
        <lastBuildDate>{{ $channel['pubdate'] }}</lastBuildDate>
        @foreach($items as $item)
        <item>
            <title><![CDATA[{!! $item['title'] !!}]]></title>
            @if (!empty($item['category']))
            <category>{{ $item['category'] }}</category>
            @endif
            <link>{{ $item['link'] }}</link>
            <guid isPermaLink="true">{{ $item['link'] }}</guid>
            <description><![CDATA[{!! $item['description'] !!}]]></description>
            @if (!empty($item['content']))
            <content:encoded><![CDATA[{!! $item['content'] !!}]]></content:encoded>
            @endif
            <dc:creator xmlns:dc="http://purl.org/dc/elements/1.1/">{{ $item['author'] }}</dc:creator>
            <pubDate>{{ $item['pubdate'] }}</pubDate>
            @if (!empty($item['enclosure']))
            <enclosure
            @foreach ($item['enclosure'] as $k => $v)
            {!! $k.'="'.$v.'" ' !!}
            @endforeach
            />
            @endif
            @if (!empty($item['media:content']))
            <media:content
            @foreach ($item['media:content'] as $k => $v)
            {!! $k.'="'.$v.'" ' !!}
            @endforeach
            />
            @endif
            @if (!empty($item['media:thumbnail']))
            <media:thumbnail
            @foreach ($item['media:thumbnail'] as $k => $v)
            {!! $k.'="'.$v.'" ' !!}
            @endforeach
            />
            @endif
            @if (!empty($item['media:title']))
            <media:title type="plain">{{ $item['media:title'] }}</media:title>
            @endif
            @if (!empty($item['media:description']))
            <media:description type="plain">{{ $item['media:description'] }}</media:description>
            @endif
            @if (!empty($item['media:keywords']))
            <media:keywords>{{ $item['media:title'] }}</media:keywords>
            @endif
            @if (!empty($item['media:rating']))
            <media:rating>{{ $item['media:rating'] }}</media:rating>
            @endif
            @if (!empty($item['creativeCommons:license']))
            <creativeCommons:license>{{ $item['creativeCommons:license'] }}</creativeCommons:license>
            @endif
        </item>
        @endforeach
    </channel>
</rss>
