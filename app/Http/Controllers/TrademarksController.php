<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTrademarkRequest;
use App\Models\Trademark;
use Illuminate\Http\Request;
use Session;

class TrademarksController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(RegisterTrademarkRequest $request)
    {
        Trademark::create($request->validated());
        Session::flash('message', 'Registration Successful!');
        Session::flash('alert-class', 'success');
        return redirect('/dashboard');
    }

    public function show(Trademark $trademark)
    {
    }

    public function edit(Trademark $trademark)
    {
    }

    public function update(Request $request, Trademark $trademark)
    {
    }

    public function destroy(Trademark $trademark)
    {
    }
}
