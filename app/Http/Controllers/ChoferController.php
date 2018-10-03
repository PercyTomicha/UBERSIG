<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Input;
use Image;
use App\Usuario;
use App\Chofer;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choferes = DB::table('chofer as ch')
                            ->join('usuario as u', 'u.ci', '=', 'ch.ci')
                            ->where('u.tipoChofer','=','1')
                            ->select('u.ci as CI','u.*','ch.*')->get();
        //->paginate(1);
        //return view('estudiante.index',['estudiantes'=>$estudiantes]);
        return view('crud.chofer.index',compact('choferes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.chofer.create');
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
            //Datos para Chofer
            'licencia'=>'required',
            'cod_antecedentes'=>'required',
            'foto_licencia'=>'required',
            'imei'=>'required',
            'password'=>'required',
        ]);
        $usuario= new Usuario($request->all());
        $chofer= new Chofer($request->all());
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
        $usuario->tipoChofer=1;
        $usuario->tipoPropietario=0;
        //////////////////////////////////////////////////
        $fileName = "";
        //dd($request);
        if (Input::hasFile('foto_licencia')) {
            $destinationPath = 'foto_licencia'; // upload path
            $extension = Input::file('foto_licencia')->getClientOriginalExtension(); // getting image extension
            $fileName = $request['ci'].'.'.$extension; // renameing image
            Input::file('foto_licencia')->move($destinationPath, $fileName); // uploading file to given path
        }
        $chofer->foto_licencia='foto_licencia/'.$fileName;
        //////////////////////////////////////////////////
        $usuario->save();
        $chofer->save();
        \Flash::success("Se ha <strong>Registrado</strong> el Chofer =><strong>".$usuario->nombres.' '.$usuario->apellidos."</strong> de forma exitosa!");
        return redirect('chofer');
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
        $chofer = Chofer::where('ci','=',$id);
        return view('crud.chofer.edit',compact('chofer'));
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
        $chofer = Chofer::where('ci','=',$id);
        Chofer::destroy($id);
        \Flash::success("Se ha <strong>Eliminado</strong> un Chofer de forma exitosa!");
        return redirect('nivel_academico');
    }
}
