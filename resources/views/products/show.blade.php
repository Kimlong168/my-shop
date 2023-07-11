<x-layout>
    <section class="text-gray-700 body-font overflow-hidden bg-white">
  <div class="px-5">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <div class="mt-1.5 w-[200px] h-[200px]">
          <img class="object-fit" src="{{$product->image ? asset('storage/' . $product->image) : asset('/images/no-image.jpg')}}" alt="" />
      </div>
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        @if($product->category)
          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$product->category->categoryName}}</h2>
        @else 
          <h2 class="text-sm title-font text-gray-500 tracking-widest">No Category</h2>
        @endif
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$product->productName}}</h1>
        <p class="leading-relaxed">{{$product->description}}</p>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">{{$product->price}}</span>
        </div>
      </div>
    </div>
  </div>
</section>
</x-layout>