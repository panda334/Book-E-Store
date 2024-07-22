<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooksPaginate()
    {
        $books=Book::paginate(5);
        return view('welcome' , compact('books')); 
    }

    public function getBookDetail($id)
    {
        $books = Book::findOrFail($id);
        $recommandBooks = Book::paginate(5);
        return view('user-interface.single-book' , compact('books' , 'recommandBooks'));
    }

    public function addToCart(Request $request)
    {
        $bookId = $request->input('book_id');
        $book = Book::find($bookId);

        // Add product to cart
        $cart = session()->get('cart', []);
        $cart[$bookId] = [
            'name' => $book->name,
            'price' => $book->price,
        ];
        session()->put('cart', $cart);

        return redirect()->route('');
    }


}
 