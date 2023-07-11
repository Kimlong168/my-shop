<x-layout>
  <x-flase-message />
  <x-card class="max-w-lg mx-auto mt-5">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit a Product</h2>
      <p class="mb-4">{{$product->productName}}</p>
    </header>

    <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Poduct Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full text-black" name="name"
          value="{{$product->productName}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="flex gap-4">
        <div class="mb-6">
          <label for="category" class="inline-block text-lg mb-2">Category</label>
          <select name="category" class="border border-gray-200 rounded p-2 w-full text-black">
              @foreach ($categories as $category)
                  @if($product->category_id == $category->id)
                      <option value="{{$category->id}}" selected>{{$category->categoryName}}</option>
                  @else
                      <option value="{{$category->id}}">{{$category->categoryName}}</option>
                  @endif
              @endforeach
          </select>
          @error('category')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Price</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full text-black" name="price"
            placeholder="Price" value="{{$product->price}}" />

          @error('price')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

      </div>

      <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
          Product Image
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="image" />
        <div class="mt-1.5">
            <img src="{{$product->image ? asset('storage/' . $product->image) : asset('/images/no-image.jpg')}}" alt="" />
        </div>
        @error('image')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      
      <div class="mb-6">
          <label for="isAvailable" class="inline-block text-lg mb-2">Availibility</label>
            <select name="isAvailable" class="border border-gray-200 rounded p-2 w-full text-black">
                @if($product->isAvailable == 1)
                    <option value="1" selected>Available</option>
                    <option value="0">Unavailable</option>
                @else
                    <option value="1">Available</option>
                    <option value="0" selected>Unavailable</option>
                @endif
            </select>
            @error('isAvailable')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full text-black" name="description" rows="5"
          placeholder="Describe your product in detail">{{$product->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>




      <div class="mb-6">
        <button class="bg-laravel rounded py-2 px-4 bg-black border border-white">
          Update Product
        </button>
        <a href="/products" class=" ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
