<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class=" w-auto">

    <div class="container flex flex-row p-5 rounded-b-lg justify-between  w-full  bg-white">
        <h1 class="pl-10 pr-10 font-bold text-2xl">
            Bookly
        </h1>
        <div class=" ">
            <input type="text" id="email-adress-icon"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2"
                placeholder="Search...">
        </div>
        <div class="flex flex-row w-2">
            <button data-collapse-toggle="mobile-menu-3" type="button"
                class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                aria-controls="mobile-menu-3" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-3">



                <a href="#" class="pl-3 pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                    </svg>
                </a>
                <a href="#" class="pl-3 pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                    </svg>
                </a>
                <a href="#" class="pl-3 pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                </a>
            </div>
        </div>
        <div>

        </div>

    </div>

    <div class="flex flex-row p-5  bg-green-500 w-full items-start justify-center columns-4 ">
        <a href="#" class="pl-10 pr-10 hover:bg-green-200 rounded-full text-white">Home</a>
        <a href="#" class="pl-10 pr-10 hover:bg-green-200 rounded-full text-white">Shop</a>
        <a href="#" class="pl-10 pr-10 hover:bg-green-200 rounded-full text-white">Contact</a>
        <a href="#" class="pl-10 pr-10 hover:bg-green-200 rounded-full text-white">About Us</a>
    </div>

    <div class=" bg-gray-100 flex flex-wrap items-center justify-start ">
        <div class="p-20 w-3/4">
            <h1 class="font-bold text-4xl">Upto 75% off</h1>
            <p class="py-10 w-2/3">this where you can fnd any book you want easly and fast !!

            </p>
            <button class="rounded bg-green-500 text-white py-2 px-6">Shop Now</button>
        </div>

        <div class="sm:items-center justify-center">
            <img class=""
                src="data:image/jpeg;base64,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"
                alt="">
        </div>
    </div>

    <div class=" py-5 ">
        <h1 class="font-bold text-3xl text-center">Featured Books</h1>
    </div>

    <div id="row-book" class="p-10  flex flex-row ">
        <div id="book-card" class="w-1/6 p-5 m-2 rounded-s">
            <div id="book-image">
                <img src="" alt="">
                <div id="book-info" class="bg-gray-200 rounded-md flex flex-row">
                    <div id="book-name" class="p-2">
                        <h3>Action</h3>
                        <p>13$</p>
                        <h2>Harry Poter</h2>
                    </div>
                    <div id="buy-icon" class="pt-10 pl-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>

</html>




<a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/docs/images/blog/image-4.jpg" alt="">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
    </div>
</a>







<div id="card" class=" md:w-1/2 md:flex flex-row border space-x-2 bg-white">

    <div id="image" class="p-1 rounded-full">
        <img class="rounded-full"
            src="{{ URL::asset('images/world-book-day-celebration-flyer-template_23-2149323904.avif') }}">
    </div>
    <div id="info" class=" md:flex flex-col justify-between text-balance">
        <h1 class="font-bold text-center md:text-start text-2xl text-black py-3 mt-10 ">Harry Poter</h1>
        <h5 class="text-green-400 md:text-start text-center text-2xl font-bold mb-4 ">$150</h5>
        <p class="text-slate-800 break-words mb-10 text-center md:text-start">asd asyou dhhhf with all
            favorites ssssssssssssssssssssssssssss i make some tesets here i hope you are ok action</p>

        <div id="button-favorite" class="flex flex-row space-x-1 justify-center md:justify-normal ">
            <div class="bg-green-400 " id="favorite-button">
                <button class="p-1">
                    <svg class="self-center  h-10 w-10 text-green-100" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                    </svg>
                </button>
            </div>

            <div class="bg-green-400  " id="buy-button">
                <button class="rounded-xl self-center p-3 mx-10 text-white uppercase">
                    add to cart
                </button>
            </div>

        </div>
    </div>
</div>





<div class="p-2">
    <a href="#"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-full md:rounded-s-lg"
            src="{{ URL::asset('images/world-book-day-celebration-flyer-template_23-2149323904.avif') }}">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                technology acquisitions 2021</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                technology acquisitions of 2021 so far, in reverse chronological order.</p>
        </div>
    </a>
</div>