<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Support\Facades\DB;
use \Validator;
use Illuminate\Http\Request;

class OficinaController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'ciudad' => 'required|string|max:255',
            'calle' => 'required|string|max:255',
            'num_calle' => 'required|integer',
        ]);
    }
    protected function create(array $data)
    {
        return Oficina::create([
            'ciudad' => $data['ciudad'],
            'calle' => $data['calle'],
            'num_calle' => $data['num_calle'],
        ]);
    }
    public function store(Request $request)
    {
        $this->validator($request->all())->validate();
        $oficina= new Oficina();
        $oficina->setCalle($request->calle);
        $oficina->setCiudad($request->ciudad);
        $oficina->setNumCalle($request->num_calle);
        $oficina->save();
        //se cambiara
        $datosOficina = $this->mostrarDatos($oficina->id);
        $oficinaRegistrada = true;
        return view('fijas.admin', ['oficinaRegistrada'=>$oficinaRegistrada]);
    }
    public function index($id_request)
    {
        $id = $id_request;
        $datosOficina = $this->mostrarDatos($id);
        return view('/fijas/editarOficina', ['datosOficina' => $datosOficina]);
    }
    public function mostrarDatos($id)
    {
        return $datosOficina =DB::table('oficinas')->select('id','ciudad', 'calle', 'num_calle')->where('id', $id)->get();
    }
    public function calculaTaquillas($id)
    {
        return $taquillas = DB::table('taquillas')->select('id')->where('oficina_id',$id)->count();
    }
    public function actualizar(Request $request)
    {
        DB::table('oficinas')
            ->where('id', $request->id)
            ->update([  'ciudad' => $request->ciudad,
                'calle' => $request->calle,
                'num_calle' => $request->num_calle,
            ]);
        return redirect()->route('admin.home');
    }
    public function dropOficinas(Request $request){
        for ($i=0; $i<sizeof($request->delete); $i++){
            DB::table('oficinas')->where('id',$request->delete[$i])->delete();
        }

        $oficinaBorrada = true;

        return redirect()->route('admin.home.swal',['oficinaBorrada'=>$oficinaBorrada]);
    }

    public function showTaquillas($oficina_id){
        $taquillas= DB::table('taquillas')
            ->where('oficina_id', $oficina_id)
            ->get();
        return view( 'taquillas',['taquillas' => $taquillas, 'ofi_id' => $oficina_id]);
    }
}