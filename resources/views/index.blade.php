<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>First Connection</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>

        <section>

            <div class="container py-5">

                <div class="row row-cols-lg-5 g-3">

                    @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card border">
                            <div class="card-body">
                                <h5 class="card-title mb-2 ">{{$movie->title}}</h5>
                                <hr>
                                <h6 class="card-subtitle mb-2 text-muted">Origin: {{$movie->nationality}}</h6>
                                <h6 class="card-subtitle mb-2">Date: {{$movie->date}}</h6>
                                <h6 class="card-subtitle mb-2">Vote: {{$movie->vote}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>

            </div>

        </section>

    </main>


</body>

</html>