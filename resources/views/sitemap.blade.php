<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($blogs as $item)
        <url>
            <loc>{{ url('/') }}/blog/{{ $item->slug }}</loc>
            <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
    @foreach ($projects as $item)
    <url>
        <loc>{{ url('/') }}/project/{{ $item->slug }}</loc>
        <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@endforeach
@foreach ($services as $item)
    <url>
        <loc>{{ url('/') }}/services/{{ $item->slug }}</loc>
        <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@endforeach
@foreach ($what_we_do as $item)
    <url>
        <loc>{{ url('/') }}/what-we-do/{{ $item->slug }}</loc>
        <lastmod>{{ $item->created_at->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
@endforeach
</urlset>
