<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>DC Comics</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <!-- includo il file header e lavorerò su quello per l'header -->
    @include('partials.header')

    <h2>
    videos
    </h2> 

    <!-- includo il file footer e lavorerò su quello per il footer -->
    @include('partials.footer')
  </body>

</html>
