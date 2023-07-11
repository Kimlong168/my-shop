<x-user-layout>

    <div class="w-full max-w-6xl my-5 rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left border border-green-700">
        <div class="px-3 py-2 rounded border border-green-600 inline-block text-green-700 mb-3"><a href="{{$previous}}">Back</a></div>
    
        <div class="md:flex items-center -mx-10">
            <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                <div class="relative border">
                    @if($product->image)
                        <img src="{{asset('storage/' . $product->image)}}" alt="" />
                    @else
                        <img src="{{asset('images/no_image.jpg')}}" alt="" />
                    @endif 
                    <!-- <div class="border-4 border-green-600 absolute top-10 bottom-10 left-10 right-10 z-0"></div> -->
                </div>
            </div>
            <div class="w-full md:w-1/2 px-10">
                <div class="mb-10">
                    <h1 class="font-bold uppercase text-2xl mb-5">{{$product->productName}}</h1>
                    <p class="text-sm">
                        {{ $product->description}}
                    </p>
                </div>
                <div>
                    <div class="inline-block align-bottom mr-5">
                        <span class="text-2xl leading-none align-baseline">$</span>
                        <span class="font-bold text-5xl leading-none align-baseline">{{$product->price}}</span>
                    </div>
                    <div class="inline-block align-bottom">
                        <button class="bg-green-700 hover:bg-green-600 text-white rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i>Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-user-layout>