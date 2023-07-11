<div class="sm:flex items-center bg-white overflow-hidden px-2 py-1 justify-between">
 <form action="/shop" class="flex items-center gap-2 w-full">
    <select class=" p-2 text-green-800 w-full max-w-[160px]" name="sort">
        <option value="">Default</option>
        <option value="nameA-Z">Prouct Name (A-Z)</option>
        <option value="nameZ-A">Prouct Name (Z-A)</option>
        <option value="price0-9">Price (0-9)</option>
        <option value="price9-0">Price (9-0)</option>
    </select>
    <button type="submit" class=" border-green-800  p-2 text-green-800">Sort</button>
 </form>
</div>