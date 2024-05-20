@if ($prices['final']['price'] < $prices['regular']['price'])
    <p
        class="font-medium text-zinc-500 line-through"
        aria-label="{{ $prices['regular']['formatted_price'] }}"
    >
        {{ $prices['regular']['formatted_price'] }}
    </p>

    <p class="font-semibold text-[#da0a0a]">
        {{ $prices['final']['formatted_price'] }}
    </p>
@else
    <p class="font-semibold text-[#da0a0a]">
        {{ $prices['regular']['formatted_price'] }}
    </p>
@endif
