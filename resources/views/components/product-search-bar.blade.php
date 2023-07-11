<!-- <form action="/products" class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
    <button class="outline-none focus:outline-none" type="submit">
        <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
    </button>
    <input type="search" name="search" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
</form> -->


<form action="/products">
    <div class="sm:flex items-center bg-white rounded overflow-hidden px-2 py-1 justify-between border border-indigo-500">
        <input class="text-base text-gray-400 flex-grow outline-none px-2 " type="text" placeholder="Search" name="search"/>
        <div class="ms:flex items-center px-2 rounded space-x-4 mx-auto ">
            <button class="bg-indigo-500 text-white text-base rounded px-4 py-1 font-thin">Search</button>
        </div>
    </div>
</form>

