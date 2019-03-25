<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito|Oswald:700" rel="stylesheet">
    <title>Kenya Speed Bumps</title>
    <style>
      .main {
        background: url('/images/bg-wave.svg');
        background-size: contain;
        background-position: bottom;
        background-repeat: no-repeat;
      }
    </style>
  </head>
  <body>
    <div class='main min-h-screen'>

      <main class='flex flex-col min-h-screen'>
        <nav class='flex justify-end p-4 text-red'>
          <i class="fas fa-bars"></i>
        </nav>
        <div class='top flex-grow flex items-center justify-center' style='min-height: 300px;'>
          <div>
            <div class='flex flex-col lg:flex-row items-center justify-center'>
              <img class='h-10 mb-4 lg:mt-1 lg:h-16' src='/images/kenya-flag.svg' alt="kenya flag" />
              <h1 class='text-grey-darkest text-4xl mb-4 lg:ml-4 lg:text-6xl'>DRIVING IN KENYA?</h1>
            </div>
            <div class='mb-8 text-center'>
              <h4 class='text-grey-darker mb-4 lg:text-3xl' style="font-family: 'Nunito', sans-serif; font-weight:normal">know the location of the next speed bump ahead</h4>
              <h5 class='text-grey-darkest lg:text-xl' style="font-family: 'Nunito', sans-serif; font-weight:normal">no special equipment needed &mdash; <span class='text-red'>just your phone</span></h5>
            </div>
            <div class='flex justify-center lg:mt-12'>
              <a href='' class='btn lg:text-2xl lg:w-1/5'><i class="fas fa-location-arrow"></i>&nbsp;drive</a>
            </div>
          </div>
        </div>


        <div class='bottom h-1/2 flex-grow bg-grey lg:bg-transparent px-8 py-12 pb-0 flex-col'>
          <div class='flex justify-around flex-grow mb-10 lg:w-1/4 mx-auto'>
            <div class='text-center'>
              <p class='text-grey-darkest text-5xl'>
                238
              </p>
              <p class='text-red'>
                speed bumps
              </p>
            </div>
            <div class='text-center'>
              <p class='text-grey-darkest text-5xl'>
                575 km
              </p>
              <p class='text-red'>
                roads covered
              </p>
            </div>
          </div>


          <div class='flex justify-center mt-16'>
            <ul class='list-reset text-center flex flex-col leading-loose lg:flex-row lg:items-center'>
              <li class='border-grey-darkest border-2 w-1/2 mx-auto lg:mx-0 lg:w-auto lg:px-3 lg:py-1'><a href=''>Coverage Map</a></li>
              <li class='lg:ml-16'><a href=''>How to Use</a></li>
              <li class='lg:ml-16'><a href=''>Contributing</a></li>
              <li class='lg:ml-16'><a href=''>About</a></li>
              <li class='lg:ml-16'><a href=''>Contact</a></li>
            </ul>
          </div>
        </div>
        @include('footer')
      </main>


    </div>
  </body>
</html>
