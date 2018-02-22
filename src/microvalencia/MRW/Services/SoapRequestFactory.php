<?php

namespace microvalencia\MRW\Services;

use microvalencia\MRW\Entity\ServiceData;
use microvalencia\MRW\Entity\ShippingAddress;
use microvalencia\MRW\Entity\ShippingUser;

class SoapRequestFactory
{
    public static function create(ServiceData $data, ShippingAddress $address, ShippingUser $user): array
    {
        return [
            'TransmEnvio' => [
                'request' => [
                    'DatosEntrega' => [
                        'Direccion' => [
                            'CodigoDireccion' => $address->getAddressCode(),
                            'CodigoTipoVia' => $address->getViaType(),
                            'Via' => $address->getVia(),
                            'Numero' => $address->getNumber(),
                            'Resto' => $address->getOther(),
                            'CodigoPostal' => $address->getPostalCode(),
                            'Poblacion' => $address->getCity(),
                            'CodigoPais' => $address->getCountryCode(),
                        ],
                        'Nif' => $user->getNif(),
                        'Nombre' => $user->getName(),
                        'Telefono' => $user->getTelephone(),
                        'Contacto' => $user->getContact(),
                        'ALaAtencionDe' => $user->getAtentionTo(),
                        'Observaciones' => $user->getObservations(),
                    ],
                    'DatosServicio' => [
                        'Fecha' => $data->getDate(),
                        'Referencia' => $data->getReference(),
                        'EnFranquicia' => $data->getOnFranchise(),
                        'CodigoServicio' => $data->getServiceCode(),
                        'DescripcionServicio' => $data->getServiceDescription(),
                        'Bultos' => $data->getItems(),
                        'NumeroBultos' => $data->getNumberOfItems(),
                        'Peso' => $data->getWeight(),
                        'EntregaSabado' => $data->getSaturdayDelivery(),
                        'Retorno' => $data->getReturn(),
                        'Reembolso' => $data->getRefund(),
                        'ImporteReembolso' => $data->getRefundAmount(),
                        'Notificaciones' => [
                            'NotificacionRequest' =>[
                                [
                                    'CanalNotificacion' => '1',
                                    'TipoNotificacion' => '2',
                                    'MailSMS' => $data->getNotificationsMail(),
                                ],
                                [
                                    'CanalNotificacion' => '2',
                                    'TipoNotificacion' => '2',
                                    'MailSMS' => $data->getNotificationsSMS(),
                                ],
                                [
                                    'CanalNotificacion' => '1',
                                    'TipoNotificacion' => '4',
                                    'MailSMS' => $data->getNotificationsMail(),
                                ],
                                [
                                    'CanalNotificacion' => '2',
                                    'TipoNotificacion' => '4',
                                    'MailSMS' => $data->getNotificationsSMS(),
                                ]

                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
