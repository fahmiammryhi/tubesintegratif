<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                                    <a href="/user/dashboard" class="hover:bg-gray-700 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
                                    <a href="/user/about" class="text-gray-300 bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About
                                        Us</a>
                                    <a href="/user/news" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Daftar Game</a>

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

    </header>
    <main>
        <div class=" dark:bg-gray-900">

            <div class="container">
                <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                        <img src="/img/prahgos.jpeg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col">
                            <h4 class="text-lg font-semibold text-center md:text-left mr-3">Nathanael Ferdian Syahutra</h4>
                            <p class="dark:text-gray-400">Ketika kamu merasa ragu, ingatlah bahwa bahkan matahari pun terbit setelah malam yang gelap. Kesuksesan sejati bukan hanya tentang pencapaian, tetapi juga tentang proses dan pertumbuhan yang kamu alami dalam perjalanan itu.</p>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 space-x-4 align-center ml-10">
                        <a rel="noopener noreferrer" href="#" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-github w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Instagram" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-instagram w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="WhatsApp" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Gmail" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fas fa-envelope w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                        <img src="/img/edwin.jpeg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col">
                            <h4 class="text-lg font-semibold text-center md:text-left mr-7">Edwin Wahyu Ramadhan</h4>
                            <p class="dark:text-gray-400">Setiap langkah kecil menuju tujuanmu adalah sebuah prestasi yang patut dibanggakan. Ketika kamu bersyukur atas apa yang ada, kamu akan menemukan banyak alasan untuk bahagia.</p>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 space-x-4 align-center ml-12">
                        <a rel="noopener noreferrer" href="#" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-github w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Instagram" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-instagram w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="WhatsApp" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Gmail" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fas fa-envelope w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                        <img src="/img/ilyas.jpeg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col">
                            <h4 class="text-lg font-semibold text-center md:text-left mr-12">Ilyas Kurniawan Yusri </h4>
                            <p class="dark:text-gray-400">Belajar menghargai dan janganlah menyia-nyiakan, sebab kesempatan yang kedua tak akan pernah sebaik dari kesempatan pertama yang kau dapatkan.</p>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 space-x-4 align-center ml-12">
                        <a rel="noopener noreferrer" href="https://github.com/ilyasky19" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-github w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Instagram" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-instagram w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="WhatsApp" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Gmail" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fas fa-envelope w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                        <img src="/img/fahmi.jpeg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col">
                            <h4 class="text-lg font-semibold text-center md:text-left mr-10">Fahmi Ammry Helmi I.</h4>
                            <p class="dark:text-gray-400">Kegagalan bukanlah akhir dari perjalanan, melainkan awal dari pembelajaran yang lebih baik. Ketika kamu memberi dengan tulus, kamu juga sedang menciptakan kebahagiaan untuk dirimu sendiri.</p>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 space-x-4 align-center ml-12">
                        <a rel="noopener noreferrer" href="https://github.com/fahmiammryhi" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-github w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="https://instagram.com/fahmiammryhi" aria-label="Instagram" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-instagram w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="https:wa.me/082132601411" aria-label="WhatsApp" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Gmail" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fas fa-envelope w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="p-6 sm:p-12 dark:bg-gray-900 dark:text-gray-100">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:space-x-6 md:flex-row">
                        <img src="/img/arkan.jpeg" alt="" class="self-center flex-shrink-0 w-24 h-24 border rounded-full md:justify-self-start dark:bg-gray-500 dark:border-gray-700">
                        <div class="flex flex-col justify-center align-items-center">
                            <h4 class="text-lg font-semibold text-center md:text-left">Muhammad Arkan Fauzan W.</h4>
                            <p class="dark:text-gray-400">Jadilah seperti lilin yang memberikan cahaya, meski ia sendiri harus terbakar. Ketika kamu merasa kecil di dunia yang luas, ingatlah bahwa bintang-bintang pun terlihat kecil, namun mampu menerangi langit.</p>
                        </div>
                    </div>
                    <div class="flex justify-center pt-4 space-x-4 align-center ml-10">
                        <a rel="noopener noreferrer" href="https://github.com/muharkan123" aria-label="GitHub" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-github w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Instagram" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-instagram w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="WhatsApp" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fab fa-whatsapp w-4 h-4"></i>
                        </a>
                        <a rel="noopener noreferrer" href="#" aria-label="Gmail" class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400">
                            <i class="fas fa-envelope w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>