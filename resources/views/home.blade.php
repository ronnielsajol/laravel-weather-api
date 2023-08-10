<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    @vite('resources/css/app.css')

    <script src="https://kit.fontawesome.com/ba1dc511b3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="flex h-screen items-center justify-center bg-peach">
        <div class="container h-[32rem] w-80 rounded-xl bg-pastel-50 px-8 py-8 font-mono shadow-2xl">
            <h2 class="text-darkPeach text-center text-5xl font-bold">WeaThere?</h2>
            <form action="/search" method="GET" class="relative">
                <input type="text" name="search" class="my-5 h-14 w-full rounded-md px-3 text-center"
                    placeholder="Search a city.." />
                <button type="submit" class="absolute right-[1.010rem] top-[2.35rem]">
                    <svg class="font- h-5 fill-pastel-50" xmlns="http://www.w3.org/2000/svg" height="1em"
                        viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                    </svg>
                </button>

                @if (isset($searchData['location']))
                    <h2 class="text-darkPeach text-center text-2xl font-bold">{{ $searchData['location']['name'] }},
                        {{ $searchData['location']['country'] }}</h2>

                    <div class="flex items-center justify-around align-middle">
                        <img src={{ $searchData['current']['condition']['icon'] }}
                            alt={{ $searchData['current']['condition']['text'] }} class="h-20" />
                        <p class="text-darkPeach font-bold">{{ $searchData['current']['condition']['text'] }}</p>
                    </div>
                    <h2 class="text-darkPeach text-center text-2xl font-bold">Temperature:
                        {{ $searchData['current']['temp_c'] }}&degC </h2>
                @endif
            </form>
        </div>
    </div>
</body>

</html>
