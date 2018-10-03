<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;
use Image;
use App\Usuario;
use App\Propietario;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propietarios = DB::table('propietario as p')
                            ->join('usuario as u', 'u.ci', '=', 'p.ci')
                            ->where('u.tipoPropietario','=','1')
                            ->select('u.ci as CI','u.*','p.*')->get();
        //->paginate(1);
        //return view('estudiante.index',['estudiantes'=>$estudiantes]);
        return view('crud.propietario.index',compact('propietarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ci'=>'required|max:11',
            'nombres'=>'required|max:30',
            'apellidos'=>'required|max:30',
            'fecha_nacimiento'=>'required',
            'sexo'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'correo_electronico'=>'required',
            'foto'=>'required',
            //Datos para Propietario
            'foto_soat_ruat'=>'required',
        ]);
        $usuario= new Usuario($request->all());
        $propietario= new Propietario($request->all());
        //////////////////////////////////////////////////
        $fileName = "";
        //dd($request);
        if (Input::hasFile('foto')) {
            $destinationPath = 'foto'; // upload path
            $extension = Input::file('foto')->getClientOriginalExtension(); // getting image extension
            $fileName = $request['ci'].'.'.$extension; // renameing image
            Input::file('foto')->move($destinationPath, $fileName); // uploading file to given path
        }
        $usuario->foto='foto/'.$fileName;
        //////////////////////////////////////////////////
        $usuario->tipoChofer=0;
        $usuario->tipoPropietario=1;
        //////////////////////////////////////////////////
        $fileName = "";
        //dd($request);
        if (Input::hasFile('foto_soat_ruat')) {
            $destinationPath = 'foto_soat_ruat'; // upload path
            $extension = Input::file('foto_soat_ruat')->getClientOriginalExtension(); // getting image extension
            $fileName = $request['ci'].'.'.$extension; // renameing image
            Input::file('foto_soat_ruat')->move($destinationPath, $fileName); // uploading file to given path
        }
        $propietario->foto_soat_ruat='foto_soat_ruat/'.$fileName;
        //////////////////////////////////////////////////
        $usuario->save();
        $propietario->save();
        \Flash::success("Se ha <strong>Registrado</strong> el Propietario =><strong>".$usuario->nombres.' '.$usuario->apellidos."</strong> de forma exitosa!");
        return redirect('propietario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propietario = Propietario::where('ci','=',$id);
        return view('crud.propietario.edit',compact('propietario'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propietario = Propietario::where('ci','=',$id);
        Propietario::destroy($id);
        \Flash::success("Se ha <strong>Eliminado</strong> un Propietario de forma exitosa!");
        return redirect('propietario');
    }
}
