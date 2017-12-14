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
        $oficina=$this->create($request->all());
        $oficina->save();
        $id=$oficina->id;
        $num = $this->calculaTaquillas($oficina->id);
        $datosOficina = $this->mostrarDatos($oficina->id);

        return view('/fijas/editarOficina', ['datosOficina' => $datosOficina]);

    }
    public function index(Request $request)
    {
        $id = $request->get('oficina');
        $datosOficina = $this->mostrarDatos($id);
        return view('/fijas/editarOficina', ['datosOficina' => $datosOficina]);
    }

    public function mostrarDatos($id)
    {
        return $datosOficina =DB::table('oficinas')->select('id','ciudad', 'calle', 'num_calle')->where('id', $id)->get();
    }

    public function calculaTaquillas($id)
    {
        return $taquillas = DB::table('taquillas')->select('id')->where('id_oficina',$id)->count();
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

    public function getTaquillasPorIdOficina($idOficina)
    {
        $taquillas = DB::table('taquillas')->select('id', 'num_taquilla', 'tamanio', 'ocupada','estado','id_oficina')->where('id_oficina',$idOficina)->get();

        return $taquillas;
    }


}
