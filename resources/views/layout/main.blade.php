<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <style type="text/tailwindcss">
    @layer utilities {
      .container {
        @apply max-w-[90%] mx-auto;
      }

      .btn {
        @apply bg-[#212121] text-white px-5 py-3 text-center;
      }  

      .btn.rounded {
        @apply rounded-full;
      }

      .home::before {
      }

      .active {
        @apply block;
      }
    }
  </style>
  <title>Online Course</title>
  <link rel="icon" type="image/x-icon" href="assets/gambar/favicon.ico">
</head>

<body>
  @include('layout.navbar')

  @yield('container')

  @include('layout.footer')
  <script src="assets/js/app.js"></script>
</body>

</html>