@props(['categories'])

<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
 <form action="/products">
    <select  class="border border-indigo-500 rounded p-2 text-indigo-600" name="filter">
        <option value="" >All</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->categoryName}}</option>
        @endforeach
        <option value="available">Available</option>
        <option value="unavailable">Unavailable</option>
    </select>
    <button class="border border-indigo-500 rounded p-2 text-indigo-600">Filter</button>
 </form>
</div>