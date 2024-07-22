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

<body class="bg-gray-100">
    <h1 class="p-6 font-bold text-2xl ">
        We Recommend
    </h1>

    <div id="container" class="md:flex flex-row justify-between p-2 m-3 bg-white ">
        <div id="image" class="p-2">
            <img class="p-1 h-80 w-96" src="{{ $books->getFirstMediaUrl('images') }}"
                alt="">
        </div>

        <div id="info" class="p-2 my-5 md:flex flex-col md:justify-between ">
            <h1 class=" font-bold text-black text-xl ">
               {{$books->name}}
            </h1>

            <p>by {{ $books->author->name }}</p>

            @foreach ($books->categories->take(1) as $category)
            <h2 class="font-bold text-amber-400 ">{{ $category->name }}</h2>
            @endforeach
            <p class="w-auto">{{ $books->description }}</p>

            <h2 class="font-bold text-2xl ">${{ $books->price }}.00</h2>

            <div
                id="button"class="text-center p-3 text-white bg-green-400 hover:bg-green-300 my-5 md:my-0 self-start md:self-start">
                <button class="mx-10">Add To Cart</button>
            </div>

           
            
        </div>
    </div>


    <!-- section recommand for you -->
    <h1 class="font-bold p-2 text-3xl ml-2">Sugguested For You</h1>
    <div id="container" class="bg-gray-100 md:flex flex-row space-y-5  md:space-y-0 md:space-x-5  p-5 ml-20 md:ml-0">

        @foreach ($recommandBooks as $book)
        <div id="card" class="p-5 bg-white w-60 h-80 rounded-xl">
            <a href="{{ route('getBookDetail' , $book->id) }}">
            <div id="image" class="p-2 items-center">
                <img class="w-44 h-44" src=" {{ $book->getFirstMediaUrl('images') }} " alt="">
            </div>
            </a>
        
            <div id="info" class="p-3 my-2">
                <h1 class="font-bold text-xl">{{ $book->name }}</h1>
                <p>by {{ $book->author->name }}</p>
                <h1 class="font-bold text-lg text-green-400">${{ $book->price }}.00</h1>
            </div>

  
        </div>
        
        @endforeach
        
    </div>

    <!-- end section recommand for you -->

    <nav class="amy-pagination items-center flex justify-center">
        <div class="amy-shadow">
            {{ $recommandBooks->links() }}
        </div>
        </nav>

</body>
@include('components.footer')
</html>
