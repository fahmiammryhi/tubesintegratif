<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/b02fc4ca1e.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="flex flex-wrap w-full">
        <div class="flex flex-col w-full md:w-1/2">
            <div class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">
                <p class="text-3xl text-center">
                    Selamat datang, silakan register
                </p>
                <form class="flex flex-col pt-3 md:pt-8" method="post" action="{{ url('register') }}">
                    <div class="flex flex-col pt-4">
                        @csrf
                        <div class="flex relative ">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <i class="fa-solid fa-envelope fa-lg" style="color: #808080;"></i>
                            </span>
                            <input name="email" type="text" id="design-login-email"
                                class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                id="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="flex flex-col pt-4">
                        <div class="flex relative ">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <i class="fa-solid fa-user fa-xl" style="color: #808080;"></i>
                            </span>
                            <input name="name" type="text" id="design-login-email"
                                class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                id="name" placeholder="Name" />
                        </div>
                    </div>
                    <div class="flex flex-col pt-4">
                        <div class="flex relative ">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <i class="fa-solid fa-phone fa-lg" style="color: #808080;"></i>
                            </span>
                            <input name="nohp" type="text" id="design-login-email"
                                class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                id="nohp" placeholder="Nomor Hp" />
                        </div>
                    </div>
                    <div class="flex flex-col pt-4 mb-12">
                        <div class="flex relative ">
                            <span
                                class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <i class="fa-solid fa-lock fa-xl" style="color: #808080;"></i>
                            </span>
                            <input name="password" type="password" id="design-login-password"
                                class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                id="password" placeholder="Password" />
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-700 shadow-md hover:text-white hover:bg-indigo-500 focus:outline-none focus:ring-2">
                        <span class="w-full">
                            Submit
                        </span>
                    </button>
                </form>
                <div class="pt-12 pb-12 text-center">
                    <p>
                        Punya akun?
                        <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">
                            Login disini
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="w-1/2 shadow-2xl">
            <img class="hidden object-cover w-full h-screen md:block" src="img/cod.jpg" />
        </div>
    </div>

</body>

</html>
