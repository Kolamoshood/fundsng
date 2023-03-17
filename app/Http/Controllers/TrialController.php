<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TrialController extends Controller
{
    public function index(){
        return view('trials', [
            // 'Trials' => Good::all() This gets all trials in no order
            'Trials' => Good::latest()->filter(request(['search']))->paginate(4)
        ]);
    }

    public function show(Good $trial){
        return view('trial', [
            'Trial'=> $trial
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'label' => 'required',
            'company' => ['required', Rule::unique('Goods', 'company')],
            'email' => ['required', 'email', Rule::unique('Goods', 'email')],
            'location' => 'required',
            'website' => 'required',
            'description' => 'required'

        ]);

        Good::create($formFields);
        return redirect('/trials')->with('message', 'Trial Created Succesfully!');
    }
}