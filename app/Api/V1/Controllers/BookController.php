<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use App\Book;
use Dingo\Api\Routing\Helpers;
use App\Http\Controllers\Controller;
use \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BookController extends Controller {

  use Helpers;

  public function index(JWTAuth $JWTAuth) {

    $currentUser = $JWTAuth->parseToken()->authenticate();

    return $currentUser
                    ->books()
                    ->orderBy('created_at', 'desc')
                    ->get()
                    ->toArray();
  }

  public function store(Request $request, JWTAuth $JWTAuth) {

    $currenUser = $JWTAuth->parseToken()->authenticate();

    $book = new Book;

    $book->title = $request->get('title');
    $book->author_name = $request->get('author_name');
    $book->pages_count = $request->get('pages_count');

    if ($currenUser->books()->save($book)) {
      return $this->response->created();
    }

    return $this->response->error('could_not_create_book', 500);
  }

  public function show($id, JWTAuth $JWTAuth) {

    $currentUser = $JWTAuth->parseToken()->authenticate();

    $book = $currentUser->books()->find($id);

    if (!$book) {
      throw new NotFoundHttpException;
    }

    return $book;
  }

  public function update(Request $request, $id, JWTAuth $JWTAuth) {

    $currentUser = $JWTAuth->parseToken()->authenticate();

    $book = $currentUser->books()->find($id);

    if (!$book) {
      throw new NotFoundHttpException;
    }

    $book->fill($request->all());

    if ($book->save()) {
      return $this->response->noContent();
    }

    return $this->response->error('could_not_update_book', 500);
  }

  public function destroy($id, JWTAuth $JWTAuth) {

    $currentUser = $JWTAuth->parseToken()->authenticate();

    $book = $currentUser->books()->find($id);

    if (!$book) {
      throw new NotFoundHttpException;
    }

    if ($book->delete()) {
      return $this->response->noContent();
    }

    return $this->response->error('could_not_delete_book', 500);
  }

}
