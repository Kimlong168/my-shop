<x-layout>
    <div class="flex justify-between items-center border-b-2  rounded-lg border-indigo-500 mb-2">
        <x-title title="Dashboard" />
    </div>
    <div class="min-w-screen min-h-screenflex items-center justify-center">
        <div class="max-w-7lg w-full mx-auto py-6 ">
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">
                <div class="w-full lg:w-1/3 cursor-pointer">
                    <a href="/products">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border border-yellow-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-yellow-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg text-gray-400">Products ({{$product}})</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full lg:w-1/3 cursor-pointer">
                    <a href="/categories">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border border-red-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-red-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                               
                                    <div class="text-lg text-gray-400">Categories ({{$category}})</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="w-full lg:w-1/3">
                    <a href="/users">
                        <div class="widget w-full p-4 rounded-lg bg-white border-l-4 border border-blue-400">
                            <div class="flex items-center">
                                <div class="icon w-14 p-3.5 bg-blue-400 text-white rounded-full mr-3">
                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <div class="text-lg text-gray-400">Users ({{$user}})</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-layout>