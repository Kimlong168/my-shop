@props(['product'])

<tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <a href="/products/{{$product->id}}">{{$product->productName}}</a>
    </td>
    @if($product->category)
        <td class="px-4 py-3 text-sm">{{$product->category->categoryName}}</td>
    @else
        <td class="px-4 py-3 text-sm">No category</td>
    @endif
    <td class="px-4 py-3 text-sm">
        <div class="w-[50px] h-[50px]">
            @if($product->image)
                <a href="storage/{{$product->image}}">
                    <img src="{{asset('storage/' . $product->image)}}" alt="" />
                </a>
            @else
                <img src="{{asset('images/no_image.jpg')}}" alt="" />
            @endif
           
        </div>
    </td>
    <td class="px-4 py-3 text-sm">{{$product->price}} ៛</td>
    <td class="px-4 py-3 text-md">
        {{$product->isAvailable == 1 ? '✅' : '❌'}}
    </td>
    <td class="px-4 py-3 text-sm"><a href="/products/{{$product->id}}/edit" class="px-2 py-1.5 rounded bg-green-600 text-white">Edit</a></td>
    <td class="px-4 py-3 text-xs" >
        <form action="/products/{{$product->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"  class="px-2 py-1.5 rounded bg-red-600 text-white">Delete</button>
        </form>
    </td>
</tr>