<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Categoria; 
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $categorias = Categoria::all(); // Obtén todas las categorías
        return view('users.create', compact('categorias')); // Pasa la variable a la vista
    }
    

    

    public function store(Request $request)
    {
        $request->validate([
            'NomU' => 'required',
            'ApPa' => 'required',
            'ApMa' => 'required',
            'User' => 'required',
            'password' => 'required',
            'C' => 'required', // Asegúrate de que esta validación esté presente
        ]);
    
        $user = new User();
        $user->NomU = $request->NomU;
        $user->ApPa = $request->ApPa;
        $user->ApMa = $request->ApMa;
        $user->User = $request->User;
        $user->Password = bcrypt($request->password); // Asegúrate de que sea el nombre correcto
        $user->C = $request->C; // Guarda la categoría
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito.');
    }
    
    




    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
