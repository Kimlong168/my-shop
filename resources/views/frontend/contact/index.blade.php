<x-user-layout>

    <div class="bg-white text-black px-3 md:px-4 py-12 flex flex-col justify-center items-center">
        <h1 class="mt-8 md:mt-12 text-3xl lg:text-4xl font-semibold leading-10  text-gray-800 text-center md:w-9/12 lg:w-7/12">Welcome to Our Store</h1>
        <p class="mt-10 text-base leading-normal text-center text-gray-600 md:w-9/12 lg:w-7/12">Any questions, please contact us now!</p>
        <div class="text-center mt-4">
            <p>Example@gmail.com</p>
            <p>085 754 564 / 095 354 344</p>
            <address>Phnom Penh, Cambodia</address>
        </div>
        <h2 class="mt-10 mb-2">Our Social media</h2>
        <div class="flex mx-2">
                <a href="#" class="mx-2  p-0.5 bg-white rounded-full hover:border-green-700" aria-label="Reddit">
                  <img class="w-8 h-8 " src="images/facebook.png" alt="">
                </a>

                <a href="#" class="mx-2  p-0.5 bg-white rounded-full hover:border-green-700" aria-label="Facebook">
                    <img class="w-8 h-8 " src="images/telegram.png" alt="">
                </a>

                <a href="#" class="mx-2  p-0.5 bg-white rounded-full hover:border-green-700" aria-label="Github">
                    <img class="w-8 h-8 " src="images/tiktok.png" alt="">
                </a>
        </div>
        <div class="mt-12 md:mt-14 w-full flex justify-center">
            <a href="/shop">
                <button onclick="closeModal()" class="w-full sm:w-auto border hover:border-0 border-gray-800 text-base font-medium text-gray-800 px-5 py-3 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 hover:bg-green-700 hover:text-white">Back to store</button>
            </a>
        </div>
    </div>

</x-user-layout>