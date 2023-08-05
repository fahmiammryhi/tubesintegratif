<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <header>
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-8 w-8" src="/img/Jastopupw.png" alt="Your Company">
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="#" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                                    <a href="/user/about" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About
                                        Us</a>
                                    <a href="/user/news" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">News</a>

                                </div>
                            </div>
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">

                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <a href="/user/profile">
                                            <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                                <span class="sr-only">Open user menu</span>
                                                <img class="h-8 w-8 rounded-full" src="/img/user.png" alt="">
                                            </button>
                                        </a>

                                    </div>
                                </div>
                                <p class="text-white pl-3 pt-2">{{ Auth()->user()->name }}</p>
                                <a href="{{ route('logout') }}">
                                    <button type="button" class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-black focus:outline-none">
                                        <span class="sr-only">Log out</span>
                                        <i class="fas fa-sign-out-alt ml-3 fa-lg" aria-hidden="true"></i>
                                    </button>
                                </a>



                            </div>

                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>

                        </div>

                    </div>

                    <!-- Mobile menu, show/hide based on menu state. -->
                    <div class="md:hidden" id="mobile-menu">
                        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Home</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Mobile
                                Game</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">PC
                                Game</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About
                                Us</a>
                            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact
                                Us</a>
                        </div>
                    </div>
            </nav>

        </div>
        <!-- 1600x533 -->
    </header>
    <main>
        <section>
            <div class="bg-white">
                <div class="mx-auto max-w-2xl px-4 sm:px-6 sm:py-12 lg:max-w-7xl lg:px-8">

                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/moleg.jpg" class="d-block w-100 rounded"  alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/valorant.png" class="d-block w-100 rounded" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/genshin.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <!-- Add autoplay script -->
                        <script>
                            // Set interval for autoplay
                            setInterval(function() {
                                document.querySelector('#carouselExampleAutoplaying').carousel('next');
                            }, 3000); // Change slide every 3 seconds
                        </script>

                        <br>
                        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Daftar Game</h2>

                        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 mb-80">
                            @foreach ($game as $game)
                            <div class="group relative">
                                <div class="h-full w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 ">
                                    <img src="{{ $game->gambar }}" class="items-center justify-center h-full w-full sm:object-cover sm:object-center">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="{{ route('detailgame', $game->id) }}" class="text-sm text-gray-700">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $game->name_game }}
                                            </a>
                                        </h3>
                                    </div>
                                    <p class="text-sm font-medium text-gray-900">{{ $game->platform }}</p>
                                </div>
                            </div>
                            @endforeach
                            <!-- More products... -->
                        </div>
                    </div>
                </div>

        </section>
    </main>
</body>

</html>