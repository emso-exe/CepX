<?php

namespace Emso\CepX;

/**
 * Classe Search
 * Classe final para busca de endereços via CEP
 * @author Estênio Mariano <dev.emso.exe@gmail.com>
 * @version 1.0.0
 */

final class Search
{
    /**
     * Array para armazenar o endereço das APIs, tipo de retorno e complemento
     * ex.: https://cep.com/99999999/json
     * @var array $urlapi
     */
    private static $urlapi = [
        'https://viacep.com.br/ws/'  => [
            'json' => '/json',
            'js'   => '/json/?callback=js',
            'xml'  => '/xml',
        ],
        'https://ws.apicep.com/cep/' => [
            'json' => '.json',
            'js'   => '.js',
            'xml'  => '.xml',
        ],
    ];

    /**
     * Método checkZipCode
     * Método privado, estático para tratamento de CEP, verificando quantidade e remoção de caracteres não numéricos.
     * @param string $zipCode
     * Parâmetro para recebimento de CEP.
     * @return string $zipCode
     */
    private static function checkZipCode(string $zipCode): string
    {
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        if (strlen($zipCode) != 8) {
            die('CEP deve conter 8 números.');
        }

        return (string) $zipCode;
    }

    /**
     * Método getAddressFromZipcode
     * Método privado, estático para verificar qual API está disponível para retornar o CEP no formato solicitado.
     * @param string $zipCode
     * Parâmetro para recebimento de CEP tratado no método checkZipCode. 
     * @param string $type
     * Parâmetro para recebimento do formato em que o endereço deve ser retornado. 
     * @return $get
     */
    private static function getAddressFromZipcode(string $zipCode, string $type)
    {
        foreach (self::$urlapi as $key => $value) {

            $get = @file_get_contents($key . $zipCode . $value[$type]);
            if ($get == false) {
                //echo error_get_last();
                continue;
            } else {
                return $get;
            }
        }
    }

    /**
     * Método searchAddress
     * Método público que ao ser instanciado, recebe o CEP e formato de retorno, retornano o endereço.
     * @param string $zipCode
     * Parâmetro para recebimento de CEP que será tratado no método checkZipCode. 
     * @param string $type
     * Parâmetro para recebimento do formato em que o endereço deve ser retornado.
     * @return json|xml|js
     */
    public function searchAddress(string $zipCode, string $type)
    {
        return self::getAddressFromZipCode(self::checkZipCode($zipCode), $type);
    }

}
