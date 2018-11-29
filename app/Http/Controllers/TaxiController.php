<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use Image;
use App\Usuario;
use App\Chofer;
use App\Propietario;
use App\Taxi;

class TaxiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taxi = DB::table('taxi')->get();
        //return view('estudiante.index',['estudiantes'=>$estudiantes])
       //dd($taxi);
        return view('crud.taxi.index',compact('taxi'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propietarios = DB::table('usuario')
        ->whereExists(function ($query) {
            $query->select('p.ci')
                ->from('propietario as p')
                ->whereRaw('p.ci = usuario.ci');
        })->pluck('nombres','ci');
        $choferes = DB::table('usuario')
        ->whereExists(function ($query) {
            $query->select('ch.ci')
                ->from('chofer as ch')
                ->whereRaw('ch.ci = usuario.ci');
        })->pluck('nombres','ci');
        return view('crud.taxi.create',compact('choferes','propietarios'));
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
            'placa'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
            'anio'=>'required',
            'color'=>'required',
            'numero_asientos'=>'required',
            'numero_puertas'=>'required',
            'con_parrilla'=>'required',
            'con_aire'=>'required',
            'codigo_ruat'=>'required',
            'ci_chofer'=>'required',
            'ci_propietario'=>'required',
        ]);
        $taxi= new Taxi($request->all());
        $taxi->save();
        \Flash::success("Se ha <strong>Registrado</strong> un Nuevo Taxi de forma exitosa!");
        return redirect('taxi');
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
        //
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
        //
    }
}
