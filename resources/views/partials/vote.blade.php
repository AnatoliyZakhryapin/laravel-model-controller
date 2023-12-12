@for($i = 0; $i < 10; $i++)
    @if ($i < round($movie->vote))
        <i class="fa-solid fa-star"></i>
    @else
        <i class="fa-regular fa-star"></i>
    @endif
@endfor