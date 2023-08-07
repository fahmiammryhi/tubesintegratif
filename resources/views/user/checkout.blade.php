<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Checkout</title>
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_id') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
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
                                    <a href="/user/dashboard"
                                        class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                        aria-current="page">Home</a>
                                    <a href="/user/about"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About
                                        Us</a>
                                    <a href="/user/news"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Daftar Game</a>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:block">
                            <div class="ml-4 flex items-center md:ml-6">

                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button type="button"
                                            class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="/img/user.png" alt="">
                                        </button>
                                    </div>
                                </div>
                                <p class="text-white pl-3">{{ Auth()->user()->name }}</p>

                                <a href="{{ route('logout') }}">
                                    <button type="button"
                                        class="rounded-full bg-gray-800 p-1 text-gray-400 hover:text-black focus:outline-none">
                                        <span class="sr-only">Log out</span>
                                        <i class="fas fa-sign-out-alt ml-3 fa-lg" aria-hidden="true"></i>
                                    </button>
                                </a>





                            </div>

                            <div class="-mr-2 flex md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button"
                                    class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
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
                            <a href="#"
                                class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                                aria-current="page">Home</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Mobile
                                Game</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">PC
                                Game</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About
                                Us</a>
                            <a href="#"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact
                                Us</a>
                        </div>
                    </div>
            </nav>

        </div>
    </header>
    <main class="mt-10 mb-5 flex justify-center items-center">
        @if ($transaksi)
            <div
                class="flex flex-col max-w-lg p-6 space-y-6 overflow-hidden rounded-lg shadow-md bg-gray-50 text-gray-800">
                <div class="flex space-x-4">
                    <div class="flex flex-col space-y-1">
                        <a rel="noopener noreferrer" href="#" class="text-sm font-semibold">Detail Pesanan</a>
                        <span class="text-xs text-gray-600">{{ $transaksi->email }}</span>
                    </div>
                </div>
                <div>
                    <h2 class="mb-1 text-xl font-semibold">{{ $transaksi->game }}</h2>
                    <p class="text-sm text-gray-600">Nominal yang Harus Dibayarkan - {{ $transaksi->qty }}</p>
                </div>
                <div class="flex flex-wrap justify-between">
                    <div class="space-x-2">
                        <button aria-label="Share this post" type="button" class="text-center">
                            <p class=" h-4 fill-current text-orange-600">{{ $transaksi->time }}</p>

                        </button>
                    </div>
                </div>
                <div>
                    <h2 class="mb-1 text-xl font-semibold">Total = {{ $transaksi->qty }}</h2>
                </div>
                <div class="justify-center items-center flex">
                    <button
                    id="pay-button"
                        class="bg-blue-800 p-2 w-3/4 text-white hover:bg-blue-950 rounded-lg transform duration-100">Bayar</button>
                </div>
            </div>
        @endif
    </main>





























    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    window.location.href = '/user/invoice/{{ $transaksi->id }}'
                    console.log(result);
                },
                onPending: function(result) {
                    /* You may add your own implementation here */
                    alert("wating your payment!");
                    console.log(result);
                },
                onError: function(result) {
                    /* You may add your own implementation here */
                    alert("payment failed!");
                    console.log(result);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
</body>

</html>
