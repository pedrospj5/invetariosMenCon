<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Usuario;
use Carbon\Carbon;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->where('estado', '=', 'ACTIVO')->get();
        return view('usuario.listar', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
            
            /*$u->name = $request->name;
            $u->email = $request->email;
            $u->password = bcrypt($request->password);
            $u->fechaNacimiento = $request->fechaNacimiento;
            $u->lugarNacimiento = $request->lugarNacimiento;
            $u->CI = $request->CI;
            $u->sexo = $request->sexo;
            $u->estadoCivil = $request->estadoCivil;
            $u->telefono = $request->telefono;
            $u->estado = $request->estado;*/
            $fechaNA = Carbon::createFromFormat('m/d/Y', $request->fechaNacimiento)->format('Y-m-d');

            DB::table('users')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'fechaNacimiento' => $fechaNA,
                'lugarNacimiento' => $request->lugarNacimiento,
                'CI' => $request->CI,
                'sexo' => $request->sexo,
                'estadoCivil' => $request->estadoCivil,
                'telefono' =>  $request->telefono,
                'estado' => $request->estado,
            ]);
            return redirect('/usuario')->with('ok', 'USUARIO REGISTRADO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = DB::table('users')->where('id', '=', $id)->get();
        /*return view('usuario.ver', compact('users'));*/
        return view('usuario.ver', ["users"=> $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = DB::table('users')->where('id', '=', $id)->get();
        /*return view('usuario.ver', compact('users'));*/
        return view('usuario.editar', ["users"=> $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        DB::table('users')
              ->where('id', $id)
              ->update([
                'name' => $request->name,                
                'fechaNacimiento' => $request->fechaNacimiento,
                'lugarNacimiento' => $request->lugarNacimiento,
                'CI' => $request->CI,
                'sexo' => $request->sexo,
                'estadoCivil' => $request->estadoCivil,
                'telefono' =>  $request->telefono,               
              ]);
              return redirect('/usuario')->with('ok', 'USUARIO EDITADO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePass($id)
    {
        $users = DB::table('users')->where('id', '=', $id)->get();
        /*return view('usuario.ver', compact('users'));*/
        return view('usuario.pass', ["users"=> $users]);
    }
    Public function setNewPass(Request $request, $id){
        $validatedData = $request->validate([          
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
        DB::table('users')
              ->where('id', $id)
              ->update([
                'password' => bcrypt($request->password),
                ]);
                return redirect('/usuario')->with('ok', 'USUARIO EDITADO');
    }
    public function destroy($id)
    {
        //
    }
}
