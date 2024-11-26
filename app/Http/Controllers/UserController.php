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
                'is_admin' => 1,
                'nascimento' => '2011-02-12',
                'sexo' => 'masculino',
                'telefone' => '(61) 999223834',
                'endereco' => 'QNXX ConjYY QuadraZZ Casa PPP',
                'especialidade' => 'super-admin',
                'cep' => '71805808',
                'cidade' => 'Brasilia',
                'uf' => 'DF',
                'nr_sus' => '0000111122223333',

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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id, // Ignora o email do usuário atual
            'password' => 'nullable|string|confirmed', // Password opcional e deve ser confirmado
            'nascimento' => 'required|date',
            'sexo' => 'required|string|in:masculino,feminino,outro',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:30',
            'especialidade' => 'nullable|string|max:255',
            'cep' => 'nullable|string|max:255',
            'cidade' => 'nullable|string|max:255',
            'uf' => 'nullable|string|max:255',
            'nr_sus' => 'nullable|string|max:255',
        ]);
    
        // Atualize os campos do usuário
        $user->fill($validated);
    
        // Verifica se uma nova senha foi fornecida
        if ($request->filled('password')) {
            $user->password = bcrypt($request->password);
        }
    
        // Salva as alterações no banco de dados
        $updated = $user->save();
    
        ($updated) ?
            Session::flash('updated_success', 'Atualizado com sucesso') :
            Session::flash('updated_error', 'Erro ao atualizar');
    
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

}
