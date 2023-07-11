@props(['categories'])

<div class="flex items-center gap-3 py-3 overflow-x-auto scorll-bar px-5">
    @foreach($categories as $category)
        @if($category->products->count() == 0)
            @continue
        @endif
        <div><a class="px-3 py-2 border bg-green-600 text-white font-semibold whitespace-nowrap rounded-md cursor-pointer break-keep" href="#{{$category->id}}">{{$category->categoryName}}</a></div>
    @endforeach
</div>