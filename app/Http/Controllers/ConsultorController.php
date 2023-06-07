<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Factura;
use App\Models\Salario;
use Illuminate\View\View;

class ConsultorController extends Controller
{

    private function __getDay($month, $year){
        switch($month){
            case '01':
            case '03':
            case '05':
            case '07':
            case '08':
            case '10':
            case '12':
                return '31';

            case '02': return  $year % 4 == 0 ? '29' : '28';
        }

        return '30';
    }
    /**
     * Show the consultor list.
     */
    public function listConsultores(): View
    {

        $consultores = Usuario::join('permissao_sistema', 'cao_usuario.co_usuario', '=', 'permissao_sistema.co_usuario')
        ->where('permissao_sistema.co_sistema', '=', 1)
        ->where('permissao_sistema.in_ativo', '=', 'S')
        ->whereIn('permissao_sistema.co_tipo_usuario', [0, 1, 2])
        ->get();

        return view('consultor')->with('consultores', $consultores);
    }

    public function relatorio(Request $request)
    {
        $consultores = $request->input('consultor');
        $month1 = $request->input('m1');
        $year1 = $request->input('y1');
        $month2 = $request->input('m2');
        $year2 = $request->input('y2');

        $day = '30';

        switch($month2){
            case '01':
            case '03':
            case '05':
            case '07':
            case '08':
            case '10':
            case '12':
                $day = '31'; break;

            case '02': $day =  $year2 % 4 == 0 ? '29' : '28'; break;
        }

        $date_started = "{$year1}-{$month1}-01";
        $date_ended = "{$year2}-{$month2}-30";

        $list;
        foreach ($consultores as $consultor) {
            $totalFacturasPorMes = Factura::selectRaw(' SUM(cao_fatura.valor) as value,
                                                    SUM(cao_fatura.total_imp_inc) as total_imp_inc,
                                                    SUM(cao_fatura.comissao_cn) as comissao_cn,
                                                    MONTH(cao_fatura.data_emissao) as month, YEAR(cao_fatura.data_emissao) as year')
            ->join('cao_os', 'cao_fatura.co_os', '=', 'cao_os.co_os')
            ->where('cao_os.co_usuario', $consultor)
            ->whereBetween('cao_fatura.data_emissao', [$date_started, $date_ended])
            ->groupBy('month', 'year')
            ->get();

            $costo = Salario::where('co_usuario', $consultor)->get('brut_salario');

            $costo = count($costo) > 0 ? $costo[0]->brut_salario : 0;

            foreach($totalFacturasPorMes as $factura){

                $value_total_imp_inc = $factura->value * $factura->total_imp_inc / 100;
                $factura->receita_liquida = $factura->value - $value_total_imp_inc;
                $factura->comision = ($factura->value - ($factura->value * $factura->total_imp_inc / 100)) * $factura->comissao_cn / 100;
                $factura->lucro = ($factura->value - $value_total_imp_inc) - ($costo - $factura->comision );

            }

            $user = Usuario::where('co_usuario', $consultor)->get('no_usuario')[0];

            $totalFacturasPorMes = $totalFacturasPorMes->sortBy([
                ['month', 'asc'],
                ['year', 'asc'],
            ])->values();

            $item =  array(
                        'no_usuario' => $user->no_usuario,
                        'relatorio' => $totalFacturasPorMes,
                        'costo' => $costo,
                        'saldo_receita_liquida' => $totalFacturasPorMes->sum('receita_liquida'),
                        'saldo_costo' =>$costo * count($totalFacturasPorMes),
                        'saldo_comision' => $totalFacturasPorMes->sum('comision'),
                        'saldo_lucro' => $totalFacturasPorMes->sum('lucro')
            );

           $list["{$consultor}"] = $item;

        }


        return response()->json($list);
    }
}
