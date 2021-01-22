<?php

namespace App\Http\Controllers;

use App\Models\Validation;

use Illuminate\Http\Request;

class ValidationController extends Controller {

    /**
     * Show all existing validation objects
     *
     * @param \Illuminate\Http\Request
     * @return View
     */
    public function index(Request $request) {
        return view('validation.index');
    }

    /**
     * Show the creation form
     *
     * @param \Illuminate\Http\Request $request
     * @return View
     */
    public function create(Request $request) {
        return view('validation.create')->with([
            'back' => route('validation.index')
        ]);
    }

    /**
     * Store a new object to database
     *
     * @param \Illuminate\Http\Request $request
     * @return Redirection
     */
    public function store(Request $request) {
        // Validate request parameters
        $params = $request->all();
        Validation::validate($params, 'store');
        return redirect()->route('validation.index');
    }

}
