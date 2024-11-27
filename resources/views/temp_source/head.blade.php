        <title>MyInven | {{ $title }}</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="MyInven" />
        <meta property="og:site_name" content="MyInven" />
        <link rel="canonical" href="http://192.168.43.51:8000/" />
        <link rel="shortcut icon" href="{{ asset('assets') }}/media/images/ko.png" />
        <link rel="icon" href="{{ asset('assets') }}/media/images/ko.png" type="image/png" />
        @include('temp_source.partials.script.css')
