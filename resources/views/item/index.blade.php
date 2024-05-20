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
    </div>
@endsection

@section('script')
    @parent
    <script>
        let items_list,categories = <?php echo json_encode(config('matjer.category'))?>;
        // build html for items card
        function outputItems(items) {
            console.log(items);
            let item_card = '';
            for (let i = 0; i <items.length; i++) {
                let item = items[i];
                let item_end;
                if (item['count'] == 1)
                    item_end = "<span>|</span> only 1 left!";
                else if (item['count'] == 0)
                    item_end = '<span>|</span> <span class="red">out of stock</span>'
                item_card = item_card + `<div class="card"><img class="item-image" alt="${ item['name'] }" src="${ item['images'] }"><div class="card-info"><span class="card-title">${ item['name'] }</span><br><span class="green">${ item['value'] }</span>` + item_end + '</div></div>';
            }

            // TODO : add better out of stock message
            if (item_card == '')
                item_card = "Ops look like we out of stock";

            document.getElementById('items').innerHTML = item_card;
        }

        // function to filter by category
        function category(cat_list){
            let it;
            for (let i = 0; i < items_list.length; i++) {
                for (let j = 0; j < cat_list.length; j++) {
                    if(items_list[i]['category'] == cat_list[j])
                        it.add(items_list[i]);
                }
            }
            console.log(it);
            outputItems(it);
        }


        axios.get('{{ url('/api/item') }}')
            .catch((error)=>{
                console.log(error)
            })
            .then((response)=>{
                items_list = response.data;
                outputItems(items_list);
            });
    </script>
@endsection
