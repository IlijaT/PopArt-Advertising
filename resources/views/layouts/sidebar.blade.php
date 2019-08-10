<aside class="col-md-4 popart-sidebar">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic">Categories</h4>
    <ol class="list-unstyled mb-0">

      @foreach($categories as $category)

      <li>
        @if($category->parent_id === null)
          <a href="/?category_id={{ $category->id }}">{{ $category->name }}</a>
          @if(count($category->subcategory))
            @include('layouts.subCategoryList',['subcategories' => $category->subcategory])
          @endif 
        @endif
      </li>

      @endforeach

    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Elsewhere</h4>
    <ol class="list-unstyled">
      <li><a href="https://github.com/">GitHub</a></li>
      <li><a href="https://twitter.com/">Twitter</a></li>
      <li><a href="https://www.facebook.com/">Facebook</a></li>
    </ol>
  </div>
</aside>