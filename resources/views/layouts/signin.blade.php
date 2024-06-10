<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>@if(isset($data['page'])){{$data['page']['title']}}@endif</title>
  <!-- CSS files -->
  <link href="{{ asset('assets/tablerui/css/tabler.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/tablerui/css/tabler-flags.min') }}" rel="stylesheet" />
  <link href="{{ asset('assets/tablerui/css/tabler-payments.min') }}" rel="stylesheet" />
  <link href="{{ asset('assets/tablerui/css/tabler-vendors.min') }}" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>

<body class="d-flex flex-column">
  <div class="page page-center">
    
    @yield('content')

  </div>
  <!-- Tabler Core -->
  <script src="{{ asset('assets/tablerui/js/tabler.min.js') }}" defer></script>
</body>
</html>