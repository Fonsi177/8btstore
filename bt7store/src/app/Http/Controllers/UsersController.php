<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsersController extends Controller
{

    public function index(Request $request): View
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function new(Request $request): View
    {
        return view('users.new');
    }


    public function store(Request $request):RedirectResponse
    {
        //Validacao dos dados 
        $validateData = $request->validate([

            'name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users,email',
            'password'=> 'required|string|min:8',
        ]);

        try {
            $user = User::create([
                'name' => $validateData['name'],
                'email' => $validateData['email'],
                'password' => Hash::make($validateData['password']),
            ]);
        
            if ($user){
                session()->flash('sucess','Utilizador criado com sucesso');
            }else {
                session()->flash('error','Error ao criar o utilizador.');
            }

            return Redirect::route('users.index');

        } catch (\Exception $e){
            session()->flash('error', 'Ocorreu um erro:'. $e->getMessage());
        }
return Redirect::route('user.create');
    }

    
    
    public function edit(Request $request): View
    {
        return view('users.edit');
    }


    public function update(Request $request):RedirectResponse
    {
        //Validacao dos dados 
        $validateData = $request->validate([

            'name'=> 'required|string|max:255',
            'email'=> 'required|string|email|max:255|unique:users,email',
            'password'=> 'required|string|min:8',
        ]);

        try {
            $user = User::save([
                'name' => $validateData['name'],
                'email' => $validateData['email'],
                'password' => Hash::make($validateData['password']),
            ]);
        
            if ($user){
                session()->flash('sucess','Utilizador criado com sucesso');
            }else {
                session()->flash('error','Error ao criar o utilizador.');
            }

            return Redirect::route('users.index');

        } catch (\Exception $e){
            session()->flash('error', 'Ocorreu um erro:'. $e->getMessage());
        }
return Redirect::route('user.create');
    }
}
