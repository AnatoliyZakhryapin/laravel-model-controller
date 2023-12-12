<div class="card" style="width: 18rem;">
    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h3 class="card-title">{{ $movie->title}}</h5>
        <h5 class="card-title">{{ $movie->original_title}}</h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nazione : <span class="fw-bold">{{ $movie->nationality }}</span></li>
        <li class="list-group-item">Data :  <span class="fw-bold">{{ $movie->date }}</span></li>
        <li class="list-group-item">Vote :  <span class="fw-bold">{{ $movie->vote }}</span></li>
      </ul>
</div>