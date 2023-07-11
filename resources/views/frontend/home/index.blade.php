<x-user-layout>


  @include('partials._hero')
  @include('partials._search')

  <x-recommander :categories="$categories"/>

  @foreach($categories as $category)

    @if(count($category->products) > 0)
      <x-category-product-card :products="$category->products"/>
    @else
      @continue
    @endif
    
  @endforeach






</x-user-layout>
