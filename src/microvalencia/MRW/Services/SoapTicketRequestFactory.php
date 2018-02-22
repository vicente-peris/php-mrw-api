<?php

namespace microvalencia\MRW\Services;

class SoapTicketRequestFactory
{
    public static function create($orderId)
    {
        return [
            'GetEtiquetaEnvio' => [
                'request' => [
                    'NumeroEnvio' => $orderId,
                    'SeparadorNumerosEnvio' => '',
                    'TipoEtiquetaEnvio' => '0',
                    'ReportTopMargin' => 1100,
                    'ReportLeftMargin' => 650,
                ]
            ]
        ];
    }
}
