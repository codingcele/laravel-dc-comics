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

    public function personCreate() {

        return view('pages.personCreate');
    }

    public function personStore(Request $request) {

        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'height' => 'nullable|integer',
        ]);

        $person = new Person;

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];

        $person -> save();

        return redirect() -> route('home');
    }
}
