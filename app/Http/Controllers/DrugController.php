<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Drug;


    class DrugController extends Controller
    {
        public function drug()
        {

            // return Drug::all();
        }

        public function index(Request $request)
        {

            if ($request->exists('count')) {
                return Drug::orderBy('count', 'desc')->get();
                //my count field is text so I need to fix that, but when you use ?count is works
            }

            if ($request->exists('id')) {
                return Drug::orderBy('id', 'asc')->get();
                //id is an integer and since they are in there originally by popularity, this way works
            }

            return Drug::all();
        }
    }
