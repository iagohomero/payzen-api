<?php

namespace PayZen;

use SoapClient;
use SoapHeader;
use PayZen\Resource\Payment;

class PayZen
{
    private $client;

    private $shopId;

    private $key;

    private $mode;

    private $wsdl = "https://secure.payzen.com.br/vads-ws/v5?wsdl";

    public function __construct($shopId, $key, $mode = "TEST"){
        $this->client = new soapClient(
            $this->wsdl,
            $options = array(
                'trace' => 1,
                'exceptions' => 1,
                'encoding' => 'UTF-8',
                'soapaction' => ''
            )
        );
        $this->shopId = $shopId;
        $this->key = $key;
        $this->mode = $mode;
    }

    public function payment(){
        return new Payment($this);
    }

    public function getClient(){
        return $this->client;
    }

    public function getShopId(){
        return $this->shopId;
    }

    public function getKey(){
        return $this->key;
    }

    public function getMode(){
        return $this->mode;
    }

    function getAuthToken($requestId, $timestamp, $key){
        $data = "";
        $data = $requestId . $timestamp;
        $authToken = hash_hmac("sha256", $data, $key, true);
        $authToken = base64_encode($authToken);
        return $authToken;
    }

    function genUuid(){
        if (function_exists('random_bytes')) {
            // PHP 7
            $data = random_bytes(16);
        } elseif (function_exists('openssl_random_pseudo_bytes')) {
            // PHP 5.3, Open SSL required
            $data = openssl_random_pseudo_bytes(16);
        } else {
            return sprintf(
                '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0x0fff) | 0x4000,
                mt_rand(0, 0x3fff) | 0x8000,
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff),
                mt_rand(0, 0xffff)
            );
        }

        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6 & 7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    function genHeaders(){
        $requestId = $this->genUuid();
        $timestamp = gmdate("Y-m-d\TH:i:s\Z");
        $authToken = base64_encode(hash_hmac('sha256', $requestId . $timestamp, $this->key, true));
        $this->setHeaders($this->shopId, $requestId, $timestamp, $this->mode, $authToken, $this->key, $this->client);
    }

    function setHeaders($shopId, $requestId, $timestamp, $mode, $authToken, $key, $client){
        //Criação dos cabeçalhos shopId, requestId, timestamp, mode e authToken	
        $ns = 'http://v5.ws.vads.lyra.com/Header/';
        $headerShopId = new SOAPHeader($ns, 'shopId', $shopId);
        $headerRequestId = new SOAPHeader($ns, 'requestId', $requestId);
        $headerTimestamp = new SOAPHeader($ns, 'timestamp', $timestamp);
        $headerMode = new SOAPHeader($ns, 'mode', $mode);
        $authToken = $this->getAuthToken($requestId, $timestamp, $key);

        $headerAuthToken = new SOAPHeader($ns, 'authToken', $authToken);
        //Adição dos cabeçalhos no SOAP Header	
        $headers = array(
            $headerShopId,
            $headerRequestId,
            $headerTimestamp,
            $headerMode,
            $headerAuthToken
        );

        $client->__setSoapHeaders($headers);
    }

    function setJsessionId($client){
        $cookie = $_SESSION['JSESSIONID'];
        $client->__setCookie('JSESSIONID', $cookie);
        return $cookie;
    }

    /**
     *  
     *
     * @param $client 
     * @return string $JSESSIONID
     */
    function getJsessionId($client){
        //recuperação do cabeçalho da resposta
        $header = ($client->__getLastResponseHeaders());

        if (!preg_match("#JSESSIONID=([A-Za-z0-9\._]+)#", $header, $matches)) {
            return "Nenhum ID de Sessão Retornado."; //Este caso nunca deverá acontecer;
            die;
        }

        $JSESSIONID = $matches[1];
        $_SESSION['JSESSIONID'] = $JSESSIONID;
        //print_r($JSESSIONID);

        return $JSESSIONID;
    }
}
