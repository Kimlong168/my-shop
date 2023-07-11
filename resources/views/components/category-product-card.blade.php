@props(['products'])

<div class="p-4 mb-5">
    <div class="flex items-center justify-between pb-3 mb-5 border-b-2  border-green-700 rounded-md" id="{{$products[0]->category->id}}">
        <h2 class="text-green-800 font-bold text-xl">{{$products[0]->category->categoryName}}</h2>
        <a href="/shop?filter={{$products[0]->category_id}}"><span class="text-green-800">See more</span></a>
    </div>

    <div class="flex gap-3 overflow-x-auto scorll-bar">
        @foreach($products as $product)
            <x-product-card :product="$product" class="w-[200px]"/>
            @if($loop->iteration == 10)
                @break
            @endif
        @endforeach
    </div>
</div>
