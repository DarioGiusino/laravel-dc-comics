<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{ asset('images/favicon.ico') }}">
  <title>{{ env('APP_NAME') }} | @yield('title')</title>
  {{-- font awesome --}}
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'
    integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=='
    crossorigin='anonymous' />
  {{-- google fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  {{-- others cdns --}}
  @yield('cdns')

  @vite('resources/js/app.js')

</head>

<body>
  {{-- header --}}
  <header>
    @include('includes.header')
  </header>

  {{-- main --}}
  @yield('content')

  {{-- footer --}}
  <footer>
    @include('includes.footer')
  </footer>

  {{-- others scripts --}}
  @yield('scripts')
</body>

</html>
