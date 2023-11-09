<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Entities\ApiResult;
use Illuminate\Http\Request;
use League\Config\Exception\ValidationException;
use Throwable;

class bookController extends Controller
{
    private const FAILED_PROCESS_RESULTS_ERROR = 'Не удалось обработать результаты';
    private const FAILED_PARAMS_VALIDATE = 'Передан не корректный параметр';
    private const BOOK_NOT_FOUND = 'Книги не найдены';

    public function getListBookAction(): ApiResult
    {
        $books = Book::all()->map(function (Book $book) {
            return [
                'id' => $book->id,
                'Author' => $book->author,
                'picture_path' =>$book->picture_path,
                'price'=>$book->price,
                'name'=>$book->name_book,
            ];
        });
        if (!$books){
            return new ApiResult(errors: [static::BOOK_NOT_FOUND]);
        }
        return new ApiResult(data: [$books]);
    }

    public function getBookAction(Request $request): ApiResult
    {
        try {
            $request->validate([
                'bookId' => ['required'],
            ]);

            $book = Book::whereId($request->bookId)->get();
            $book->toArray();

            $book->map(function (Book $book) {
                return [
                    'id' => $book->id,
                    'author' => $book->author,
                    'picture_path' => $book->picture_path,
                    'price' => $book->price,
                    'name_book' => $book->name_book,
                    'production' => $book->production,
                    'year_production' => $book->year_production,
                    'page' => $book->page,
                    'type_preview' => $book->type_preview,
                    'age_baryer' => $book->age_baryer,
                ];
            });
            if (!$book){
                return new ApiResult(errors: [static::BOOK_NOT_FOUND]);
            }
            return new ApiResult(data: [$book]);
        }catch (ValidationException){
           return new ApiResult(errors: [static::FAILED_PARAMS_VALIDATE]);
        } catch (Throwable) {
            return new ApiResult(errors: [static::FAILED_PROCESS_RESULTS_ERROR]);
        }
    }

    public function searchAction(Request $request):ApiResult
    {
        try {
            $request->validate([
                'query' => ['required'],
            ]);

            $params = $request->toArray();

            $string = preg_replace('/\s+/', '', $params['query']);

            $search = Book::search($string)->get();

            $booksSearch =$search->map(function (Book $book) {
                return [
                    'id' => $book->id,
                    'Author' => $book->author,
                    'picture_path' =>$book->picture_path,
                    'price'=>$book->price,
                    'name'=>$book->name_book,
                ];
            })->toArray();

            return new ApiResult(data: [$booksSearch]);
        } catch (Throwable) {
            return new ApiResult(errors: [static::FAILED_PROCESS_RESULTS_ERROR]);
        }
    }

}
