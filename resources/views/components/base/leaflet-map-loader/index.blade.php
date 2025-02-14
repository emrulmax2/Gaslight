@props(['lat' => null, 'long' => null, 'sources' => null, 'apiKey' => null])

<div
    data-lat="{{ $lat }}"
    data-long="{{ $long }}"
    data-sources="{{ $sources }}"
    data-api-key="{{ $apiKey }}"
    {{ $attributes->class([
            'leaflet',
            '[&_.leaflet-tile-pane]:saturate-[.3]',
            // '[&_.leaflet-tile-pane]:saturate-[.3]' => !$darkMode,
            // '[&_.leaflet-tile-pane]:grayscale [&_.leaflet-tile-pane]:invert [&_.leaflet-tile-pane]:brightness-90 [&_.leaflet-tile-pane]:hue-rotate-15' => $darkMode,
        ])->merge($attributes->whereDoesntStartWith('class')->getAttributes()) }}
>
</div>

@pushOnce('styles')
    @vite('resources/css/vendors/leaflet.css')
@endPushOnce

@pushOnce('vendors')
    @vite('resources/js/vendors/leaflet-map.js')
    @vite('resources/js/vendors/axios.js')
    @vite('resources/js/utils/colors.js')
@endPushOnce

@pushOnce('scripts')
    @vite('resources/js/components/base/leaflet-map-loader.js')
@endPushOnce
