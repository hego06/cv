<?php

namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades;
use Illuminate\Database\Eloquent\Model;


class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        //return response()->json(['data' => $usuarios], 200);
        
        return $this->showAll($usuarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ];

        $this->validate($request, $rules);
        
        $datos = $request->all();
        $datos['password'] = bcrypt($request->password);
        $datos['verified'] = User::USUARIO_NO_VERIFICADO;
        $datos['verification_token'] = User::generarVerificationToken();
        $datos['admin'] = User::USUARIO_REGULAR;
        
        $usuario = User::create($datos);

        //return response()->json(['data' => $usuario], 201);
        return $this->showOne($usuario, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user )
    {
        //$usuario = User::findOrFail($id); sustituido por User $user
        //return response()->json(['data' => $usuario], 200);
        
        return $this->showOne($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //$user = User::findOrFail($id);
        $rules = [
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed',
            'admin' => 'in:' . User::USUARIO_ADMINISTRADOR . ',' . User::USUARIO_REGULAR
        ];
        
        $this->validate($request, $rules);
        if($request->has('name'))
        {
            $user->name = $request->name;
        }
        if($request->has('email') && $user->email != $request->email)
        {
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generarVerificationToken();
            $user->email = $request->email;

        }
        if($request->has('password'))
        {
            $user->password = bcrypt($request->password);
        }
        if($request->has('admin'))
        {
            if(!$user->esVerificado())
            {
                //return response()->json(['error' => 'Solo usuarios verificados pueden ser administradores'],409);
                return $this->errorResponse('Solo usuarios verificados pueden ser administradores',409);
            }

            $user->admin = $request->admin;
        }
        if($user->isDirty())
        {
            //return response()->json(['error'=>'Debe proporcionar almenos un dato'],422);  
            return $this->errorResponse('Debe proporcionar almenos un dato',422); 
        }

        $user->save();
        //return response()->json(['data'=>$user],200);
        return $this->showOne($usuario);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        //return response()->json(['data'=> $user],200);
        return $this->showOne($user);
    }
}
