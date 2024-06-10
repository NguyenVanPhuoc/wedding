<?php

namespace App\Http\Controllers;
use App\Models\HappyBook;

use App\Http\Requests\HappyBookRequest;

class WeddingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $contents = HappyBook::select('name', 'content')->orderBy('created_at', 'desc')->get();
        return view('wedding', compact('contents'));
    }

    /**
     * Get data happy books.
     *
     * @param HappyBookRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function happyBook(HappyBookRequest $request)
    {
        $params = $request->all();
        $result = HappyBook::create($params);
        $happy = HappyBook::select('name', 'content')->where('id', $result->id)->first();
        return response()->json(['status' => 'success', 'happy' => $happy]);
    }
}
