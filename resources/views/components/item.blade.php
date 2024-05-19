<div class="card">
    <img class="item-image" alt="{{ $item['name'] }}" src="{{ $item['images'] }}">
    <div>{{ $item['name'] }}</div>
    <div>
        <span class="green">{{ $item['value'] }}</span>

        @if($item['count'] == 1)
            | only {{ $item['count'] }} left!
        @elseif($item['count'] == 0)
            | <span class="red">out of stock</span>
        @endif
    </div>
</div>
