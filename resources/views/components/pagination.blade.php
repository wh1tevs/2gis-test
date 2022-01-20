<div class="mt-16 flex justify-center flex-wrap gap-2">
    @if ($start > 1)
        <a
            class="px-2 rounded-md border-2 border-gray-200 bg-gray-100"
            href="{{ $to.'1' }}"
        >
            1
        </a>
        ...
    @endif
    @for ($i = $start; $i <= $end; $i++)
        <a
            class="px-2 rounded-md border-2 border-gray-200 {{ ($i == $page) ? 'bg-gray-300' : 'bg-gray-100' }}"
            href="{{ $to.$i }}"
        >
            {{ $i }}
        </a>
    @endfor
    @if ($end < $pages)
        ...
        <a
            class="px-2 rounded-md border-2 border-gray-200 bg-gray-100"
            href="{{ $to.$pages }}"
        >
            {{ $pages }}
        </a>
    @endif
</div>


