<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('header-tags')
    <title>Coverage Map | Kenya Speed Bumps</title>
  </head>
  <body>
    <div id='app' class='h-screen'>
        <coverage-map :data='@json($tracks)'></coverage-map>
    </div>

    <script src='/js/app.js'></script>
  </body>
</html>
