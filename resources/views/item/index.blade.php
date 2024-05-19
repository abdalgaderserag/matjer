@extends('app')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ url('dist/css/item/index.css') }}">
@endsection

@section('main')
    <div id="categories">
        @foreach(config('matjer.category') as $category)
            <div class="active">{{ $category }}</div>
        @endforeach
    </div>
    <div id="items">
        @forelse($items as $item)
            <x-item :$item/>
        @empty
            no item added
        @endforelse
    </div>
@endsection
