<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);

        return view('users', [
            'title' => 'Listagem de Usuários',
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User;
        $userFound = $user->firstOrCreate(
            ['email' => 'danielmatudaoficial@gmail.com'],
            [       
                'firstName' => 'Daniel',
                'lastName' => 'Matuda',
                'password' => bcrypt('123'),
            ]
        );

        return view('user_create', [
            'title' => 'Criar um Usuário'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();

        // $saved = (new User)->create($validated);

        $saved =  ($user = new User())->insert($validated);

        ($saved) ?
            Session::flash('success', 'Usuário cadastrado com sucesso.'):
            Session::flash('error', 'Erro ao cadastrar o Usuário');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('user_edit', [
            'title' => 'Editar Usuário',
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|unique:users,email,'.$user->id,
        ]);

        $updated = $user->update($validated);

        ($updated) ?
            Session::flash('updated_success', 'Atualizado com sucesso'):
            Session::flash('updated_error', 'Erro ao atualizar');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
