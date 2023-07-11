<x-layout>
  <x-flase-message />
  <x-card class="max-w-lg mx-auto mt-5">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Edit a Category</h2>
      <p class="mb-4">Post a gig to find a developer</p>
    </header>

    <form method="POST" action="/categories/{{$category->id}}">
      @csrf
      @method('PUT')
      <div class="mb-6">
        <label for="name" class="inline-block text-lg mb-2">Category Name</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full text-black" name="name"
          value="{{$category->categoryName}}" />

        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
            Description
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full text-black" name="description" rows="5"
          placeholder="Describe your product in detail">{{$category->description}}</textarea>

        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-laravel rounded py-2 px-4 bg-black border border-white">
          Update Category
        </button>
        <a href="/categories" class=" ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>
