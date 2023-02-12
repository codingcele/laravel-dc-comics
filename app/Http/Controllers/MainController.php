<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Person;

class MainController extends Controller
{
    public function home() {

        $people = Person :: all();

        return view('pages.home', compact('people'));
    }

    public function personShow(Person $person) {

        return view('pages.personShow', compact('person'));
    }

    public function personDelete(Person $person) {

        $person -> delete();

        return redirect() -> route('home');
    }
}
