@extends('app')

@section('style')
    @parent
    <link rel="stylesheet" href="{{ url('dist/css/item/index.css') }}">
@endsection

@section('main')
    <div id="categories">
        @foreach(config('matjer.category') as $category)
            <div onclick="addFilter(this,'{{ $category }}')">{{ $category }}</div>
        @endforeach
    </div>
    <div id="items">
    </div>
    <div id="show-item" style="display: none">
    </div>
@endsection

@section('script')
    @parent
    <script>
        window.axios.defaults.headers.common['authorization'] = 'bearer {{ $token }}';
        let tt = document.getElementById('show-item');
        function showItem(id){
            let item = items_list[id-1];
            document.getElementById('show-item').style.display = "flex";
            let de = `<div id="det-item" class="card"><img class="item-image" alt="${item['name']}" src="${item['images']}"><div id="det-card" class="card-info"><div class="card-text"><div><span class="card-title">${item['name']}</span><img onclick="hideItem()" style="width: 20px;height: 20px;cursor: pointer" src="/static/cross.svg" alt="X""></div><p>${item['details']}</p></div><div id="order"><div><span>${item['category']} | </span><span class="green">${item['value']}</span></div><div onclick="orderItem(${item['id']})" class="button-send">Add Item</div></div></div></div>`
            document.getElementById('show-item').innerHTML = de;
        }

        function hideItem() {
            document.getElementById('show-item').style.display = 'none';
        }


        function orderItem(id){
            axios.get('api/orderr/'+id).catch((error)=>{

            }).then((response)=>{
                console.log(response);
                --items_list[id]['count'];
                hideItem();
                outputItems(items_list);
            })
        }















        let items_list,items_length;
        let categories=[];
        // build html for items card
        function outputItems(items) {
            let item_card = '';
            for (let i = 0; i <items.length; i++) {
                let item = items[i];
                let item_end = "";
                if (item['count'] == 1)
                    item_end = `<span> |</span> only 1 left!`;
                else if (item['count'] == 0)
                    item_end = `<span>|</span> <span class="red">out of stock</span>`
                item_card = item_card + `<div class="card"><img onclick="showItem(${item['id']})" class="item-image" alt="${ item['name'] }" src="${ item['images'] }"><div class="card-info"><span class="card-title" onclick="showItem(${item['id']})">${ item['name'] }</span><br><span class="green">${ item['value'] }</span>` + item_end + '</div></div>';
            }

            // TODO : add better out of stock message
            if (item_card == '')
                item_card = "Ops look like we out of stock";

            document.getElementById('items').innerHTML = item_card;
        }

        // function to select item by category
        function category(cat_list){
            let len = cat_list.length;
            let fillt=[];
            console.log(items_length)
            for (let i = 0; i < items_length; i++)
                for (let j = 0; j < len; j++) {
                    if(items_list[i]['category'] === cat_list[j])
                        fillt.push(items_list[i]);
                }

            if (fillt.length !== 0)
                outputItems(fillt);
            else
                outputItems(items_list);
        }

        // add the filter to the page
        function addFilter(div,cat) {
            let isActive = false;
            if(div.classList.length != 0)
                isActive =true
            if(isActive){
                categories.pop(cat);
                div.classList.remove('active');
            }else if(!isActive){
                categories.push(cat);
                div.classList.add('active');
            }
            category(categories);
        }


        axios.get('{{ url('/api/item') }}')
            .catch((error)=>{
                console.log(error)
            })
            .then((response)=>{
                items_list = response.data;
                items_length = response.data.length;
                outputItems(items_list);
            });


        document.getElementById("show-item").style.height = window.innerHeight + 'px';
    </script>
@endsection
