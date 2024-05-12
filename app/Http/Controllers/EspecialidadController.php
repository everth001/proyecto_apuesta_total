<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Especialidad;

class EspecialidadController extends Controller
{
    public function index(){
        // $especialidad = Especialidad::paginate(10);
        // return view('especialidad.index', ['especialidad' => $especialidad]);
        return view('especialidad.index');
    }
    public function buscar(){
        $especialidad = Especialidad::all();
        $salidahtml ='';
        $cont=1;
        if ($especialidad->count() > 0) {
            $salidahtml .= '<table class="table table-hover" >
            <thead class="text-warning">
                <th>N°</th>
                <th>Especialidad</th>
                  <th style="text-align: end;">Estado</th>
                </thead>
                <tbody>';
                foreach ($especialidad as $item) {
                    if (($item->condicion)=='0') {
                        $buttoncheck = '<input type="checkbox" name="condicion" checked="" class="condicionCheckbox" id="' . $item->id  . '">';
                    }else{
                        $buttoncheck = '<input type="checkbox" name="condicion" class="condicionCheckbox" id="' . $item->id  . '">';
                    }
                    $salidahtml .= '<tr>
                    <td>'.$cont.'</td>
                    <td>' . $item->nespecialidad . '</td>
                    <td class="td-actions text-right buttonsAtTheEnd" >
                  <i class="bi-pencil-square h4"></i>
                  <button  id="' . $item->id  . '" type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm editEspe" data-backdrop="static" data-toggle="modal" data-target="#editModal">
                            <i class="material-icons">edit</i>
                        </button>
                          <div class="contRadio">'.$buttoncheck.'
                            <span>inact</span>
                            <span>activ</span>
                            
                          </div>
             
                        </td>
                  </tr>';
                  $cont++;
                }
            $salidahtml .= '</tbody></table>';
            echo $salidahtml;
        }else {
            echo '<h1 class="text-center text-secondary my-5">No hay registros en la base de datos</h1>';
        }
        
    }
    public function crear(Request $request){

        $espData = ['nespecialidad' => $request->nespecialidad];
        Especialidad::create($espData);
        return response()->json([
            'status' => 200,
        ]);
    }
    public function edit(Request $request) {
        $id = $request->id;
        $esp = Especialidad::find($id);
        return response()->json($esp);
    }
 
    // update an employee ajax request
    public function update(Request $request) {


        $esp = Especialidad::find($request->esp_id);

        $espData = ['nespecialidad' => $request->nespecialidad];
 
        $esp->update($espData);
        return response()->json([
            'status' => 200,
        ]);
    }

    public function cambiarCondicion(Request $request)
{   
    $id = $request->id;
    $condicion = $request->condicion;
    $esp = Especialidad::find($id);
    $espData = ['condicion' => $condicion];
    $esp->update($espData);
}

    public function destroy($id){
        Especialidad::destroy($id);
        return redirect(route('especialidad.index'));
    }
}
