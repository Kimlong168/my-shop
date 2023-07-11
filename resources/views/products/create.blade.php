<x-layout>
  <x-flase-message />
  <x-card class="max-w-lg mx-auto mt-5">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create a Product</h2>
      <p class="mb-4">Post a gig to find a developer</p>
    </header>

    <form method="POST" action="/products" enctype="multipart/form-data">
      @csrf
      <div class="mb-6 w-full">
          <label for="name" class="inline-block text-lg mb-2">Poduct Name</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full text-black" name="name"
            value="{{old('name')}}" />

          @error('name')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
      </div>

      <div class="flex gap-4">
        <div class="mb-6 w-full">
            <label for="category" class="inline-block text-lg mb-2">Category</label>
            <select name="category" class="border border-gray-200 rounded p-2 w-full text-black">
                @foreach ($categories as $category)
                    @if(old('category') == $category->id)
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

        <div class="mb-6 w-full">
          <label for="title" class="inline-block text-lg mb-2">Price</label>
          <input type="number" class="border border-gray-200 rounded p-2 w-full text-black" name="price"
            placeholder="Example: Senior Laravel Developer" value="{{old('title')}}" />

          @error('price')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
      </div>
    
      <div class="flex gap-4 items-center">
        <div class="mb-6 w-full">
          <label for="image" class="inline-block text-lg mb-2">
            Product Image
          </label>
          <input type="file" class="border border-gray-200 rounded p-1 w-full bg-white text-black" name="image" />

          @error('image')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mb-6 w-full">
          <label for="isAvailable" class="inline-block text-lg mb-2">Availibility</label>
          <select name="isAvailable" class="border border-gray-200 rounded p-2 w-full text-black">
              <option value="1" selected>Available</option>
              <option value="0">Unavailable</option>
          </select>
          @error('isAvailable')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
      </div>

      <div class="mb-6 w-full">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full text-black" name="description" rows="5"
          placeholder="Describe your product in detail">{{old('description')}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6 w-full">
        <button class="bg-laravel rounded py-2 px-4 bg-black border border-white">
          Create Product
        </button>
        <a href="/products" class=" ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
