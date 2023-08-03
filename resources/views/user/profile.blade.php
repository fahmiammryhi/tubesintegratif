<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
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
                                    <a href="/user/dashboard" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
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
                                        <button type="button" class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="/img/user.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <p class="text-white pl-3">{{ Auth()->user()->name }}</p>
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
        <br>
        <br>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="content-wrapper">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-6 d-flex align-items-center justify-content-center">
                                            <img class="col-8" src="/img/user.png" alt="Your Company">
                                        </div>
                                        <div class="col-sm-6">
                                            <h3 class="mb-4">UPDATE PROFILE</h3>
                                            <form id="updateForm" method="POST" action="{{ route('updateprofile', ['id' => Auth::id()]) }}">
                                                @method('PUT')
                                                @csrf
                                                <!-- You can include any additional user fields you want to update here -->
                                                <div class="col-sm-8 mb-3">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly required>
                                                </div>
                                                <div class="col-sm-8 mb-3">
                                                    <label for="nohp" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="nohp" name="nohp" value="{{ Auth::user()->nohp }}" readonly required>
                                                </div>
                                                <!-- Add more fields here -->

                                                <div class="mb-3">
                                                    <button id="editButton" type="button" class="btn btn-primary">Edit</button>
                                                    <button id="saveButton" type="submit" class="btn btn-success d-none">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            const editButton = document.getElementById('editButton');
            const saveButton = document.getElementById('saveButton');
            const nameInput = document.getElementById('name');
            const nohpInput = document.getElementById('nohp');

            editButton.addEventListener('click', () => {
                nameInput.removeAttribute('readonly');
                nohpInput.removeAttribute('readonly');
                saveButton.classList.remove('d-none');
                editButton.classList.add('d-none');
            });
        </script>




    </main>




</body>

</html>