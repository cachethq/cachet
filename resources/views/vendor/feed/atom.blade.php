<?=
    /* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
    '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<feed xmlns="http://www.w3.org/2005/Atom">
    @foreach($meta as $key => $metaItem)
        @if($key === 'link')
            <{{ $key }} href="{{ url($metaItem) }}"></{{ $key }}>
        @elseif($key === 'title')
            <{{ $key }}><![CDATA[{{ $metaItem }}]]></{{ $key }}>
        @else
            <{{ $key }}>{{ $metaItem }}</{{ $key }}>
        @endif
    @endforeach
    @foreach($items as $item)
        <entry>
            <title><![CDATA[{{ $item->title }}]]></title>
            <link rel="alternate" href="{{ url($item->link) }}" />
            <id>{{ url($item->id) }}</id>
            <author>
                <name> <![CDATA[{{ $item->author }}]]></name>
            </author>
            <summary type="html">
                <![CDATA[{!! $item->summary !!}]]>
            </summary>
            @if($item->__isset('enclosure'))
              <enclosure url="{{ url($item->enclosure) }}" length="{{ $item->enclosureLength }}" type="{{ $item->enclosureType }}" />
            @endif
            @foreach($item->category as $category)
            <category type="html">
                <![CDATA[{!! $category !!}]]>
            </category>
            @endforeach
            <updated>{{ $item->updated->toRssString() }}</updated>
        </entry>
    @endforeach
</feed>
