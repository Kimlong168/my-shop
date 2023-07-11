<x-layout>
    <!-- Client Table -->
    <div class="mt-4 mx-4">
        <x-flase-message />
        <div class="text-black">
            <h1 class="font-bold text-3xl">{{$category->categoryName}}</h1>
            <p>{{$category->description}}</p>
        </div>
        <div class="flex justify-between items-center border-b-2  rounded-md border-indigo-500 mb-2">
            <div class="flex items-center">
                <x-title title="Products of {{$category->categoryName}} ({{$category->products->count()}} products)" /> 
            </div>
            <a href="/products/create"><div class="w-6 h-6 rounded-full bg-indigo-600 text-white flex justify-center items-center font-bold">+</div></a>
        </div>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                <thead>
                    <x-product-header />
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                    @if(count($products) == 0)
                        <tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm text-center" colspan="7">No products</td>
                        </tr>
                    @else
                        @foreach($products as $product)
                            <x-product-row :product="$product" />
                        @endforeach
                    @endif
            
                </tbody>
                </table>
            </div>
            <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"></div>
        </div>
        <div class="mt-3">{{$products->links()}}</div>
    </div>

</x-layout>