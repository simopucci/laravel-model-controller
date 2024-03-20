<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Movies</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <h1 class="container pt-5 text-center">Movies</h1>

    <div class="container">
      <div class="row g-3 p-5 d-flex justify-content-center">
        
        @forelse ($movies as $movie)
        <div class="col-5">
          <div class="card h-100">
            <div class="card-body ">
              <div class="d-flex align-items-center">
                <h6 class="m-0">Titolo:</h6>
                <span class="ms-2">{{ $movie->title }}</span>
              </div>
              <div class="d-flex align-items-center">
                <h6 class="m-0">Titolo originale:</h6>
                <span class="ms-2">{{ $movie->original_title }}</span>
              </div>
              <div class="d-flex align-items-center">
                <h6 class="m-0">Nazionalità:</h6>
                <span class="ms-2">{{ $movie->nationality }}</span>
              </div>
              <div class="d-flex align-items-center">
                <h6 class="m-0">Voto:</h6>
                <span class="ms-2">{{ $movie->vote }}</span>
              </div>
            </div>
          </div>
        </div>
        
        @empty
        <div class="col-12">
          No Movies
        </div>
        
        @endforelse
      </div>
    </div>

  </body>

</html>
