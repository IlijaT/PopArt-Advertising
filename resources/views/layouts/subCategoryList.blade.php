@foreach($subcategories as $subcategory)

  <ol style="list-style: none;">

    <li><a href="/?category_id={{ $subcategory->id }}">{{ $subcategory->name }}</a></li> 

    @if(count($subcategory->subcategory))
      @include('layouts.subCategoryList', ['subcategories' => $subcategory->subcategory] )
    @endif
    
  </ol>

@endforeach