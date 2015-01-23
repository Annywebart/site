{{'<?xml version="1.0" encoding="UTF-8" ?>'}}
{{'<?xml-stylesheet type="text/xsl" href="/sitemap.xsl"?>'}}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $item)
        <url>
            <loc>{{ URL::to($item->alias) }}</loc>
            <lastmod>{{ $item->updated_at }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>1.0</priority>
        </url>
        @foreach($item->children as $child)
            <url>
                <loc>{{ URL::to($item->alias . '/' . $child->alias) }}</loc>
                <lastmod>{{ $item->updated_at }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>1.0</priority>
            </url>
        @endforeach
    @endforeach
</urlset>