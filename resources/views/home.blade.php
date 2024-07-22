<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <!--nav bar section-->
    <nav class="container p-6 mx-auto bg-green-400 rounded-lg">
        <div class="flex items-center justify-between">
            <div class="flex flex-row space-x-1">
                <svg class="h-8 w-8 text-slate-100 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
                <h1 class="font-bold text-xl text-white">Bookly</h1>
            </div>

            <div class="hidden md:flex space-x-6 px-4">
                <a href="#" class=" md: hover:bg-slate-300 rounded-bl text-white font-serif ">Home</a>
                <a href="#" class=" md: hover:bg-slate-300 rounded-bl text-white font-serif">Shop</a>
                <a href="#" class=" md: hover:bg-slate-300 rounded-bl text-white font-serif">Contact</a>
                <a href="#" class=" md: hover:bg-slate-300 rounded-bl text-white font-serif">About Us</a>
            </div>
        </div>
    </nav>
    <!-- end nav bar section-->


    <!-- Hero section-->

    <section>
        <div class="container mx-auto flex flex-col-reverse space-x-6  px-6 py-6 md:flex-row">
            <div class="md:w-1/2 flex flex-col space-y-5 justify-center text-center md:text-left py-5 ">
                <h1 class="font-bold text-3xl md:text-5xl">Bookly is modern website offer books and buy it</h1>
                <p class="pt-5 ">here where you can found any book you want easly and fast!</p>
                <button
                    class="p-2 rounded text-white bg-green-400 hover:bg-green-300 self-center md:self-start">ShopNow</button>
            </div>

            <div class="md:w-1/2">
                <img src="{{ URL::asset('images/undraw_books_re_8gea.svg') }}">
            </div>
            <div>
    </section>

    <!--end Hero section-->

    <!--services secion -->

    <div id="container" class="container pl-32 md:p-0 md:flex flex-row md:justify-center md:mt-20 ">

        <div id="service-container" class="mx-auto flex flex-row p-5 rounded-2xl  bg-white">

            <div id="icon-service" class="pr-2">
                <svg class="h-10 w-10 text-green-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                </svg>
            </div>
            <div id="info-service">
                <h2 class="font-bold">Easy Returns</h2>
                <p class="font-light font-sans">10 Days Returns</p>
            </div>
        </div>
        <div id="service-container" class="mx-auto flex flex-row p-5 rounded-2xl   bg-white">

            <div id="icon-service" class="pr-2">
                <svg class="h-10 w-10 text-green-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="7" cy="17" r="2" />
                    <circle cx="17" cy="17" r="2" />
                    <path d="M5 17h-2v-4m-1 -8h11v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                    <line x1="3" y1="9" x2="7" y2="9" />
                </svg>
            </div>
            <div id="info-service">
                <h2 class="font-bold">Free Shipping</h2>
                <p class="font-light font-sans">Order over 100$</p>
            </div>
        </div>
        <div id="service-container" class="mx-auto flex flex-row p-5 rounded-2xl   bg-white">

            <div id="icon-service" class="pr-2">
                <svg class="h-10 w-10 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
                    <path d="M7 11V7a5 5 0 0 1 9.9-1" />
                </svg>
            </div>
            <div id="info-service">
                <h2 class="font-bold">Secure Payment</h2>
                <p class="font-light font-sans">100% Secure Payment</p>
            </div>
        </div>
        <div id="service-container" class="mx-auto flex flex-row p-5 rounded-2xl bg-white">

            <div id="icon-service" class="pr-2">
                <svg class="h-10 w-10 text-green-500" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <rect x="4" y="13" rx="2" width="5" height="7" />
                    <rect x="15" y="13" rx="2" width="5" height="7" />
                    <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
                </svg>
            </div>
            <div id="info-service">
                <h2 class="font-bold">24H Support</h2>
                <p class="font-light font-sans">Call Us Any Time</p>
            </div>
        </div>
    </div>
    <!-- end service section -->


    <hr class="h-px my-8 bg-gray-200 border-2 dark:bg-gray-700">
    <h1 class="font-bold text-center text-4xl">Featured Books</h1>

    <!-- cards or featured books section-->

    <section class="">
        <div id="card-container" class=" mx-auto p-6 md:space-x-8 md:flex flex-wrap md:justify-center md:w-full">

            @foreach ($books as $book)
                
                <div id="card"
                    class="w-full my-8 md:my-4 relative rounded-2xl p-2 bg-white shadow-2xl hover:bg-slate-100  md:w-1/4">
                    <div
                        class="absolute py-1 px-3 -left-8 -top-2  rounded-xl -rotate-[30deg] border border-black black_border bg-red-700 text-white font-bold">
                        Action!
                        {{$book->author}}
                    </div>

                    <a href="#">
                        <div id="image" class="rounded-lg items-center">
                            <img
                                src="{{ URL::asset('images/flat-design-world-book-day-template_23-2150151736.avif') }}">
                        </div>

                        <div class="p-0.5 shadow-sm bg-green-50">

                        </div>
                    </a>
                    <div id="card-info" class="py-2 flex flex-row">
                        <div>
                            <h1 class="font-bold">Harry Poter</h1>
                            <p class="">asd asd asd best book for mahmoud darwish </p>
                        </div>
                        <div class="md:pt-6 pr-2 pl-12 pt-6">
                            <a href="#">
                                <svg class="h-6 w-6 text-red-500" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                                </svg>

                            </a>
                        </div>
                    </div>
                    <div id="category&price" class="flex flex-row justify-between p-1">
                        <h1 class="text-xl text-black font-bold pt-1">Mahmoud Darwish</h1>
                        <p class="text-2xl font-serif text-green-500">$12,00</p>
                    </div>

                    <div
                        id="button"class="text-center p-2 mt-4 rounded-full text-white bg-green-400 hover:bg-green-300 self-center md:self-start">
                        <button class="">Add To Cart</button>
                    </div>
                </div>
                @endforeach


        </div>
    </section>
    <!--end of cards or featured books section-->



    <!-- section paginate -->
    <nav aria-label="Page navigation" class=" flex justify-center">
        <ul class="inline-flex -space-x-px text-base h-10">
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="flex items-center justify-center px-4 h-10 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-4 h-10 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
        </ul>
    </nav>
    <!-- end of paginate -->
    <div class="p-20">

    </div>
    <!--section about us -->

    <div class=" md:flex flex-row md:p-4 space-y-5 md:space-y-0 m-10">

        <div id="info" class="md:w-2/3 p-4 ">
            <h1 class="font-bold text-4xl m-2">About Us</h1>
            <p class="text-lg text-left"> Donec porttitor, enim ut dapibus lobortis, lectus sem tincidunt dui, eget
                ornare lectus ex non
                libero. Nam rhoncus diam ultrices porttitor laoreet. Ut mollis fermentum ex, vel viverra lorem
                volutpat sodales. In ornare porttitor odio sit amet laoreet. Sed laoreet, nulla a posuere
                ultrices, purus nulla tristique turpis, hendrerit rutrum augue quam ut est. Fusce malesuada
                posuere libero, vitae dapibus eros facilisis euismod. Sed sed lobortis justo, ut tincidunt
                velit. Mauris in maximus eros.</p>
        </div>

        <div id="image" class="md:w-1/2">
            <img class="mb-10 object-cover object-top sm:h-72 md:mb-0 md:h-96 lg:w-full lg:h-full"
                src="{{ URL::asset('images/undraw_book_lover_re_rwjy.svg') }}" alt="">
        </div>
    </div>

    <!-- end of about us -->

    <!--section membership-->
    <div id="container" class=" w-auto md:flex flex-row ml-4">
        <div id="card-membership"
            class="md:w-1/3 bg-green-50 border border-green-400 rounded-xl m-3 hover:bg-inherit shadow-xl">
            <div id="header-card" class="p-2 my-5">
                <h1 class="font-bold text-center text-5xl">Monthly Membership</h1>
            </div>
            <div id="price" class="flex flex-row space-x-2 justify-center mb-10">
                <p class="mt-5">only</p>
                <h2 class="font-bold text-5xl">$9</h2>
                <p class="mt-5">/mo</p>
            </div>
            <hr class="h-0 bg-gray-50  px-2 mx-20 ">

            <div id="body-card" class="flex flex-row">

                <div id="icons" class="p-4 space-y-4 mt-8">
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>

                </div>
                <div id="card-info" class="p-4 space-y-4 mt-8 font-serif ">
                    <h5 class=" text-xl">Instant access to all books</h5>
                    <h5 class=" text-xl">Early access to new books</h5>
                    <h5 class=" text-xl">Access to premium books</h5>
                    <h5 class=" text-xl">Cancel it in any time</h5>
                </div>
            </div>

            <div class=" justify-center text-center py-10">
                <button
                    class="px-20 py-3  rounded text-white bg-green-400 hover:bg-green-300 self-center md:self-start text-xl">Join
                    Now</button>
            </div>
        </div>

        <div id="card-membership"
            class="md:w-1/3 bg-green-50 border border-green-400 rounded-xl m-3 hover:bg-inherit shadow-xl md:mt-20">
            <div id="header-card" class="p-2 my-5">
                <h1 class="font-bold text-center text-5xl">Yearly Membership</h1>
            </div>
            <div id="price" class="flex flex-row space-x-2 justify-center mb-10">
                <p class="mt-5">only</p>
                <h2 class="font-bold text-5xl">$79</h2>
                <p class="mt-5">/y</p>
            </div>
            <hr class="h-0 bg-gray-50  px-2 mx-20 ">

            <div id="body-card" class="flex flex-row">

                <div id="icons" class="p-4 space-y-4 mt-8">
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>

                </div>
                <div id="card-info" class="p-4 space-y-4 mt-8 font-serif ">
                    <h5 class=" text-xl">Instant access to all books</h5>
                    <h5 class=" text-xl">Early access to new books</h5>
                    <h5 class=" text-xl">Access to premium books</h5>
                    <h5 class=" text-xl">Cancel it in any time</h5>
                </div>
            </div>

            <div class=" justify-center text-center py-10">
                <button
                    class="px-20 py-3  rounded text-white bg-green-400 hover:bg-green-300 self-center md:self-start text-xl">Join
                    Now</button>
            </div>
        </div>

        <div id="card-membership"
            class="md:w-1/3 bg-green-50 border border-green-400 rounded-xl m-3 hover:bg-inherit shadow-xl">
            <div id="header-card" class="p-2 my-5">
                <h1 class="font-bold text-center text-5xl">Lifely Membership</h1>
            </div>
            <div id="price" class="flex flex-row space-x-2 justify-center mb-10">
                <p class="mt-5">only</p>
                <h2 class="font-bold text-5xl">$350</h2>
                <p class="mt-5">/life</p>
            </div>
            <hr class="h-0 bg-gray-50  px-2 mx-20 ">

            <div id="body-card" class="flex flex-row">

                <div id="icons" class="p-4 space-y-4 mt-8">
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                    <svg class="h-7 w-7 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>

                </div>
                <div id="card-info" class="p-4 space-y-4 mt-8 font-serif ">
                    <h5 class=" text-xl">Instant access to all books</h5>
                    <h5 class=" text-xl">Early access to new books</h5>
                    <h5 class=" text-xl">Access to premium books</h5>
                    <h5 class=" text-xl">Cancel it in any time</h5>
                </div>
            </div>

            <div class=" justify-center text-center py-10">
                <button
                    class="px-20 py-3  rounded text-white bg-green-400 hover:bg-green-300 self-center md:self-start text-xl">Join
                    Now</button>
            </div>
        </div>
    </div>
    <!--end of section membership-->


    <!-- section new books -->

    <section>

    </section>
    <!-- end of section new books -->





</body>

<footer class=" text-white bg-black p-6 mt-10">
    <div class="">
        <h1 class="text-8xl text-green-500 font-bold pl-10">
            Lets Talk
        </h1>
    </div>
    <div class="md:flex flex-row md:space-x-6 justify-between p-5">
        <div class="p-6">
            <h1 class="text-gray-400 font-bold text-2xl my-3">Call Us</h1>
            <h1 class="text-lg">+963 947470694</h1>
        </div>
        <div class="p-6">
            <h1 class="text-gray-400 font-bold text-2xl my-3">Mail Us</h1>
            <h1 class="text-lg">yousef.yousee.ref@gmail.com</h1>
        </div>

        <div class="p-6">
            <h1 class="text-gray-400 font-bold text-2xl my-3">Find Us</h1>
            <h1 class="text-lg">Damascus Qudsia subarb</h1>
        </div>

        <div class="p-6">
            <h1 class="text-gray-400 font-bold text-2xl my-3">Fowllow Us</h1>
            <div class="flex flex-row space-x-4">

                <a href="#">
                    <button>
                        <svg class="h-10 w-10 text-neutral-200" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </button>
                </a>

                <a href="#">
                    <button>
                        <svg class="h-10 w-10 text-neutral-200" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                        </svg>
                    </button>
                </a>

                <a href="#">
                    <button>
                        <svg class="h-10 w-10 text-neutral-200" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </button>
                </a>

                <a href="#">
                    <button>
                        <svg class="h-10 w-10 text-neutral-200" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <path
                                d="M9 19c-4.286 1.35-4.286-2.55-6-3m12 5v-3.5c0-1 .099-1.405-.5-2 2.791-.3 5.5-1.366 5.5-6.04a4.567 4.567 0 0 0 -1.333 -3.21 4.192 4.192 0 00-.08-3.227s-1.05-.3-3.476 1.267a12.334 12.334 0 0 0 -6.222 0C6.462 2.723 5.413 3.023 5.413 3.023a4.192 4.192 0 0 0 -.08 3.227A4.566 4.566 0 004 9.486c0 4.64 2.709 5.68 5.5 6.014-.591.589-.56 1.183-.5 2V21" />
                        </svg>
                    </button>
                </a>

            </div>
        </div>
    </div>
</footer>


</html>

<!-- category designe --
<div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
  end -->
