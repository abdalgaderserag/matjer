<div class="card">
    <img class="item-image" alt="{{ $item['name'] }}" src="{{ $item['images'] }}">
    <div class="card-info">
        <span class="card-title">{{ $item['name'] }}</span><br>
        <span class="green">{{ $item['value'] }}</span>

        @if($item['count'] == 1)
            <span>|</span> only {{ $item['count'] }} left!
        @elseif($item['count'] == 0)
            <span>|</span> <span class="red">out of stock</span>
        @endif
    </div>
</div>
