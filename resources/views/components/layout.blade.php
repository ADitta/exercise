@props(['backLink' => null, 'title' => 'exercise'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('images/lsi-logo.svg') }}" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-col">
    <div>
        <header>
            <div class="inner pt-md">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('images/lsi-logo.svg') }}" alt="LSi">
                </a>
            </div>
            <div class="divider"></div>
            @if ($backLink)
                <div class="inner pb-lg">
                    <span class="relative">
                        <a class="back-link link" href="{{ $backLink }}"> <span class="arrow">&larr;</span> go
                            back</a>
                    </span>
                </div>
            @endif
        </header>

        <main>
            <div class="inner">
                {{ $slot }}
            </div>
        </main>
    </div>

    <footer class="py-md bg-primary">
        <div class="inner">
         <span class="text-black">
             &copy; <a class="font-semibold hover:underline" href="https://www.lsi.co.uk" target="_blank">LSi Ltd</a> 2023
            </span>
        </div>
    </footer>
</body>

</html>
