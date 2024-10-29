<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Book::all()], Response::HTTP_OK);
    }

    public function show($id)
    {
        $book = Book::find($id);
        return $book ? response()->json(['data' => $book], Response::HTTP_OK)
                     : response()->json(['error' => 'Book not found'], Response::HTTP_NOT_FOUND);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $book = Book::create($validatedData);
        return response()->json(['data' => $book, 'message' => 'Book created successfully'], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], Response::HTTP_NOT_FOUND);
        }

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'published_year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $book->update($validatedData);
        return response()->json(['data' => $book, 'message' => 'Book updated successfully'], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['error' => 'Book not found'], Response::HTTP_NOT_FOUND);
        }

        $book->delete();
        return response()->json(['message' => 'Book deleted successfully'], Response::HTTP_NO_CONTENT);
    }
}
