<?php

class OpenWeatherMap{
    /**
     * URL base das APIs
     * @var string
     */
    const BASE_URL = 'https://api.openweathermap.org';

    /**
     * Chave de acesso da API
     * @var string
     */
    private $apikey;

    /**
     * Metodo responsavel por construir a classe definindo a chave de API
     * @param string $apikey
    */
    public function __construct($apikey){
        $this -> apikey = $apikey;
    }

    /**
     * Metodo responsavel por obter o clima atual de uma cidade do brasil
     * @param double $lat
     * @param double $long
     * @return array
     */
    public function consultarClimaAtual($lat,$lon){
        return $this->get('/data/2.5/weather',[
            'lat' => $lat,'lon' => $lon
        ]);
    }
    /**
     * Metodo responsavel por executar a consulta GET na API
     * @param string $resource
     * @param array $params
     * @return array
     */
    private function get($resource, $params = []) {
        //Parametros adicionais
        $params['units'] = 'metric';
        $params['lang'] = 'pt_br';
        $params['appid'] = $this ->apikey;
        

        //ENDPOINT
        $endpoint = self::BASE_URL.$resource.'?'.http_build_query($params);

        //Inicio o CURL
        $curl = curl_init();

        //CONFIGURAÇÕES DO CURL
        curl_setopt_array($curl,[
            CURLOPT_URL => $endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ]);

        //RESPONSE
        $response = curl_exec($curl);

        //FECHA CONEXAO DO CURL
        curl_close($curl);

        //RESPOSE EM ARRAY
        return json_decode($response,true);
    }
    
    }

?>