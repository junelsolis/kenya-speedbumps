<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Oswald:700" rel="stylesheet">
    <title>Kenya Speed Bumps</title>
  </head>
  <body>
    <div class='min-h-screen'>

      <main class='flex flex-col min-h-screen'>
        <nav class='flex justify-end p-4 text-red'>
          <i class="fas fa-bars"></i>
        </nav>
        <div class='top flex-grow flex items-center justify-center' style='min-height: 300px;'>
          <div>
            <div class='flex flex-col items-center'>
              <img class='h-10 mb-4' src='/images/kenya-flag.png' alt="kenya flag" />
              <h1 class='text-grey-darkest text-4xl mb-4'>DRIVING IN KENYA?</h1>
            </div>
            <div class='mb-8 text-center'>
              <h4 class='text-grey-darker mb-4' style="font-family: 'Nunito', sans-serif; font-weight:normal">know the location of the next speed bump ahead</h4>
              <h5 class='text-grey-darkest' style="font-family: 'Nunito', sans-serif; font-weight:normal">no special equipment needed &mdash; <span class='text-red'>just your phone</span></h5>
            </div>
            <div class='flex justify-center'>
              <a href='' class='btn'><i class="fas fa-location-arrow"></i>&nbsp;DRIVE</a>
            </div>
          </div>
        </div>


        <div class='bottom h-1/2 flex-grow bg-grey px-8 py-12 pb-0 flex-col'>
          <div class='flex justify-around flex-grow mb-10'>
            <div class='text-center'>
              <p class='text-grey-darkest text-4xl'>
                238
              </p>
              <p class='text-red'>
                speed bumps
              </p>
            </div>
            <div class='text-center'>
              <p class='text-grey-darkest text-4xl'>
                575 km
              </p>
              <p class='text-red'>
                roads covered
              </p>
            </div>
          </div>


          <div class='flex justify-center'>
            <ul class='list-reset text-center flex flex-col flex-grow leading-loose'>
              <li class='border-grey-darkest border-2 w-1/2 mx-auto'><a href=''>Coverage Map</a></li>
              <li><a href=''>How to Use</a></li>
              <li><a href=''>Contributing</a></li>
              <li><a href=''>About</a></li>
              <li><a href=''>Contact</a></li>
            </ul>
          </div>
        </div>
        @include('footer')
      </main>


    </div>
  </body>
</html>
