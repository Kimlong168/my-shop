

<div class="sm:flex items-center bg-white rounded-lg overflow-hidden px-2 py-1 justify-between">
 <form action="/products">
    <select  class="border border-indigo-500 rounded p-2 text-indigo-600" name="sort">
        <option value="">Default</option>
        <option value="nameA-Z">Prouct Name (A-Z)</option>
        <option value="nameZ-A">Prouct Name (Z-A)</option>
        <option value="price0-9">Price (0-9)</option>
        <option value="price9-0">Price (9-0)</option>
    </select>
    <button type="submit" class="border border-indigo-500 rounded p-2 text-indigo-600">Sort</button>
 </form>
</div>