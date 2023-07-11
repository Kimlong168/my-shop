@props(['category'])

<tr class="bg-gray-50 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <a href="/categories/{{$category->id}}">{{$category->categoryName}}</a>
    </td>
    <td class="px-4 py-3">
      <a href="#">
        <span>{{$category->products->count()}} </span>
      </a>
    </td>
    <td class="px-4 py-3 text-sm"><a href="/categories/{{$category->id}}/edit" class="px-2 py-1.5 rounded bg-green-600 text-white">Edit</a></td>
    <td class="px-4 py-3 text-xs" >
        <form action="/categories/{{$category->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"  class="px-2 py-1.5 rounded bg-red-600 text-white">Delete</button>
        </form>
    </td>
</tr>