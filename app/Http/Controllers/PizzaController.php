<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //protect every single routes
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        //::all()
        // $pizza = Pizza::orderBy('name', 'desc')->get();
        //where
        // $pizza = Pizza::where('type', 'hawaiian')->get();

        $pizza = Pizza::latest()->get();
        return view('pizzas.index', ['pizzas' => $pizza, 'name' => request('name')]);
    }

    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));

        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings'); //object

        //save to db
        $pizza->save();
        //with is in session
        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destory($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
