<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $usuario;
    public function __construct(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }
    public function index()
    {
        $usuarios = $this->usuario->lista_usuario();
        $idade = $this->usuario->idade();
        return view('site.usuario.index',compact('usuarios','idade'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.usuario.novo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        return view('site.usuario.mostrar');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        return view('site.usuario.edita');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        return dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
