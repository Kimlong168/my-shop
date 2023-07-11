@props(['categories'])

<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
 <form action="/shop" class="flex gap-2 items-center w-full">
    <select  class=" p-2 text-green-800 w-full max-w-[160px]" name="filter">
        <option value="" >All</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->categoryName}}</option>
        @endforeach
        <option value="available">Available</option>
        <option value="unavailable">Unavailable</option>
    </select>
    <button class=" rounded p-2 text-green-800">Filter</button>
 </form>
</div>