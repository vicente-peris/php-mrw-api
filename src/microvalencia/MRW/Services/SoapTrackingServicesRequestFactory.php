<?php

namespace microvalencia\MRW\Services;

class SoapTrackingServicesRequestFactory
{
    public static function create($login, $pass, $codigoIdioma, $tipoFiltro, $valorFiltroDesde, $valorFiltroHasta, $fechaDesde, $fechaHasta, $tipoInformacion)
    {

        // CodigoIdioma:
        //     - 3082: Español.
        //     - 2070: Portugues.
        // TipoFiltro
        //     - 0 : Para consultar por número Albarán/envío MRW
        //     - 1 : Para consultar por referencia cliente del envio/expedición.
        //     - 2 : Para conulstar por referencia cliente del bulto.
        // TipoInformacion
        //     - 0: Básica; mostrará el último estado en el que conste el envío
        //     - 1: Detallada; mostrará el historial por que haya pasado un envío.

        return [
            'GetEnvios' => [
                'login' => $login,
                'pass' => $pass,
                'codigoIdioma' => $codigoIdioma,
                'tipoFiltro' => $tipoFiltro,
                'valorFiltroDesde' => $valorFiltroDesde, 
                'valorFiltroHasta' => $valorFiltroHasta, 
                'fechaDesde' => $fechaDesde, 
                'fechaHasta' => $fechaHasta, 
                'tipoInformacion' => $tipoInformacion,
            ]
        ];
        
    }
}
