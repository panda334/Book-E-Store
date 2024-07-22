@include('components.header')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="">
    <div id="container" class="container items-center flex flex-col ml-20 justify-center w-1/2 m-3 space-y-5">

        @for($i = 0; $i < 5; $i++)
        <div id="card" class=" md:flex flex-row p-4 justify-center items-center border border-gray-200 shadow-xl bg-amber-50 ">

            <div id="image" class="">
                <img class="rounded-sl"
                    src="{{ asset('images/flat-design-world-book-day-template_23-2150151736.avif') }}" alt="">
            </div>
            <div class="flex flex-col justify-between space-y-5 ">

                <div id="info" class="flex flex-col justify-between p-3">
                    <div class="space-y-5">
                        <h1 class="font-bold text-xl">Work for Money, Disign for Love</h1>
                        <p>by Rayan Hamdoon</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus reiciendis libero</p>
                        <h1 class="font-bold text-xl text-amber-300 ">Action</h1>
                        <h1 class="font-bold text-xl text-green-400">$13.00</h1>
                    </div>

                    
                </div>

                <div id="buy" class="flex flex-row justify-between p-2">
                    <div
                        id="button"class="text-center p-2 text-white bg-green-400 hover:bg-green-300 self-center md:self-start">
                        <button class="md:mx-16 sm:mx-0 ">Add To Cart</button>
                    </div>
                    <div id="icon" class="">
                        <a href="#">
                            <svg class="h-10 w-10 text-red-500" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>

                        </a>
                    </div>
                </div>
            </div>

        </div>
        
        @endfor
       
    </div>

    <div class="m-5">
        @include('components.paginate-section')
    </div>

</body>

</html>
