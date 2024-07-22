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
    @include('components.header')
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
                        @foreach ($book->categories->take(1) as $bookCategory)
                            {{ $bookCategory->name }} !
                        @endforeach 
                    </div>

                    <a href="{{ route('getBookDetail' , $book->id) }}">
                        <div id="image" class="rounded-lg items-center flex justify-center">
                            <img class="items-center  h-72 "
                                src="{{ $book->getFirstMediaUrl('images') }}">
                        </div>

                        <div class="p-0.5 shadow-sm bg-green-50">

                        </div>
                    </a>
                    <div id="card-info" class="py-2 flex flex-row justify-between">
                        <div>
                            <h1 class="font-bold">{{ $book->name }}</h1>
                            <p class="">{{ Str::substr($book->description, 0, 30)."       ......" }} </p>
                        </div>
                        <div class=" pr-2  pt-3">
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
                        <h1 class="text-xl text-black font-bold pt-1">
                       {{ $book->author->name }}
                        </h1>
                        <p class="text-2xl font-serif text-green-500">{{ $book->price }} $</p>
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
   @include('components.paginate-section')
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
   @include('components.membership')
    <!--end of section membership-->


    <!-- section new books -->

    <section>

    </section>
    <!-- end of section new books -->





</body>

<!-- footer section -->
@include('components.footer')
<!-- end footer section -->

</html>

<!-- category designe --
<div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
  </div>
  end -->
