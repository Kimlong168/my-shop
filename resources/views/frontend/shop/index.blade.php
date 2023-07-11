<x-user-layout>

    @include('partials._shop-hero')
    @include('partials._search')
    <div class="flex gap-4 p-6">
        <aside class="flex flex-col gap-4 w-1/4 h-100 rounded overflow-hidden px-3">
            <h2 class="text-xl font-bold text-green-800">Sort By</h2>
            <x-product-sorting/>
            <hr>
            <h2 class="text-xl font-bold text-green-800">Filter By</h2>
            <x-product-filter :categories="$categories"/>
            <hr>
            <div class="w-full h-full">
                <img class="object-fill w-full h-full rounded" src="images/shop-aside-banner.png" alt="">
            </div>
        </aside>
       <div class="w-full">
            <div class="grid grid-cols-3 lg:grid-cols-4 auto-rows-auto gap-4 ">
                @unless(count($products) == 0)
                    @foreach($products as $product)
                        <x-product-card :product="$product" class="w-full"/>
                    @endforeach
                @else
                    <div class="col-span-3 lg:col-span-4">
                        <div class="flex justify-center items-center h-96">
                            <h2 class="text-2xl text-red-600 font-bold">No products found</h2>
                        </div>
                    </div>
                @endunless
            </div>
            <div class="py-4">
                {{ $products->links() }}
            </div>
       </div>
    </div>

   
   
</x-user-layout>