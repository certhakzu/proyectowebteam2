<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use Illuminate\Database\Eloquent\Builder;


class HabitacionController extends Controller
{
    public function search(Request $request){
        $text = $request->query('text');

        $habitaciones = Habitacion::whereHas('hotel', function (Builder $query) use($text) {
            $query->where('nombre', 'like', '%'.$text.'%');
        })->with(['hotel', 'tipo'])->get();

        return $habitaciones;
    }

    public function filter(Request $request){
        $filter = $request->input('filter');

        switch($filter){
            case 'piso':
                $habitaciones = Habitacion::whereBetween('piso', [$request->input('min'), $request->input('max')])->with(['hotel', 'tipo'])->get();
                break;
            case 'precio':
                $habitaciones = Habitacion::whereBetween('precio', [$request->input('min'), $request->input('max')])->with(['hotel', 'tipo'])->get();
                break;
            case 'capacidad':
                $habitaciones = Habitacion::where('capacidad', $request->input('value'))->with(['hotel', 'tipo'])->get();
                break;
            case 'estrellas':
                $habitaciones = Habitacion::whereHas('hotel', function (Builder $query) use($request) {
                    $query->where('estrellas', $request->input('value'));
                })->with(['hotel', 'tipo'])->get();
                break;
            case 'minibar':
                $habitaciones = Habitacion::where('minibar', $request->input('value'))->with(['hotel', 'tipo'])->get();
                break;
        }
        return $habitaciones;
    }
}
