<div class="popart-post">

    <h4 class="popart-post-title">
  
      <a href="/adverts/{{ $advert->id }}">
  
          {{ $advert->title }}
  
      </a>
  
    </h4>
  
      {{-- <p class="blog-post-meta">{{ $advert->user->name }} on {{ $advert->created_at->toFormattedDateString()}} </p> --}}
    <p> {{ $advert->descritpion }}</p>
    <p> {{ $advert->state }}</p>
    <p> {{ $advert->price }}</p>
    <p> {{ $advert->location }}</p>

    <hr>
      
  </div> 