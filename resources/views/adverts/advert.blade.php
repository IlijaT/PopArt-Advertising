<div class="popart-post">

    <h5 class="popart-post-title">
      <a href="/adverts/{{ $advert->id }}">
          {{ $advert->title }}
      </a>
    </h5>
  
      {{-- <p class="blog-post-meta">{{ $advert->user->name }} on {{ $advert->created_at->toFormattedDateString()}} </p> --}}
    {{ $advert->created_at->diffForHumans() }}
    <p> {{ $advert->descritpion }}</p>
    <p> {{ $advert->state }}</p>
    <p> {{ $advert->price }}</p>
    <p> {{ $advert->location }}</p>

    <hr>
      
  </div> 