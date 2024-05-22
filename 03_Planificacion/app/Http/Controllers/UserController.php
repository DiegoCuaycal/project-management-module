<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreUser;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    /*
    public function index()
    {
        // Cargar usuarios con sus roles utilizando la carga ansiosa (eager loading)
        $users = User::with('roles')->paginate(10);

        // Pasar los usuarios a la vista
        return view('user.index', compact('users'));
    }
     */

    public function index(Request $request)
    {
        // Obtener el término de búsqueda ingresado por el usuario
        $searchTerm = $request->input('search');
    
        // Cargar usuarios con sus roles utilizando la carga ansiosa (eager loading)
        $users = User::with('roles')
            ->where('name', 'like', "%$searchTerm%") //Filtrar por nombre
            ->orWhere('id', 'like', "%$searchTerm%")  // Filtrar por id
            ->paginate(10);
    
        // Pasar los usuarios a la vista
        return view('user.index', compact('users'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $user = new User();
        return view('user.create', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        // request()->validate(User::$rules);
        // $user = User::create($request->all());

        $user = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password  = $request->name;
        $user->save();

        // Asociar los roles seleccionados
        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::find($id);

        return view('user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        // Actualizar los roles del usuario
        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
    public function showProfile()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'You need to login to see this page.');
        }

        return view('user.profile', compact('user'));
    }
}
