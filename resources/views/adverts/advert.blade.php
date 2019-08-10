<div class="bg-white rounded-lg shadow-sm p-4 mb-2">

    <p class="popart-post-title mb-0">
      <a href="/adverts/{{ $advert->id }}">
          {{ ucfirst($advert->title)  }}
      </a>
    </p>
    <p class="font-italic text-muted">published {{ $advert->created_at->diffForHumans() }}</p>
    
    <p class="my-0">Description: {{ $advert->description }}</p>
    <p class="my-0">State: {{ $advert->state }}</p>
    <p class="my-0">Price: {{ $advert->price }} $</p>
    <p class="my-0">Location: {{ $advert->city }}</p>
      
  </div> 