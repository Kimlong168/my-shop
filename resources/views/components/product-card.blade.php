@props(['product'])

<a href="/shop/{{$product->id}}">
  <div {{$attributes->merge(['class' => 'mb-6 rounded cursor-pointer relative shadow-xl border  hover:border-green-600'])}}>
      <div class="w-100 h-[250px] mb-2 overflow-hidden rounded  border">
          <img class="object-cover w-full h-full" src="{{$product->image ? asset('storage/' . $product->image) : asset('/images/no_image.jpg')}}" alt="" />
      </div>
      <div class="w-[200px] flex justify-between items-center gap-2 p-3 ">
          <h3 class="font-bold line-clamp-1 text-green-800">{{$product->productName}}</h3>
          <p class="whitespace-nowrap  break-keep text-red-600">{{$product->price}} ៛</p>
      </div>

      @if($product->isAvailable == 0)
        <x-show-unavailable/>
      @endif
  </div>
</a>