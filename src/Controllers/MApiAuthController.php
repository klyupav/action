<?php
/*
 * GBALib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GBALib\Controllers;

use GBALib\APIException;
use GBALib\APIHelper;
use GBALib\Configuration;
use GBALib\Models;
use GBALib\Exceptions;
use GBALib\Http\HttpRequest;
use GBALib\Http\HttpResponse;
use GBALib\Http\HttpMethod;
use GBALib\Http\HttpContext;
use GBALib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class MApiAuthController extends BaseController
{
    /**
     * @var MApiAuthController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return MApiAuthController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Получить JWT токен, через авторизацию подпользователем системы
     *
     * @param integer $appid     TODO: type description here
     * @param string  $deviceid  TODO: type description here
     * @param string  $login     TODO: type description here
     * @param integer $pass      TODO: type description here
     * @param string  $useragent TODO: type description here
     * @param string  $sig       $sig = md5(strtolower($paramStr.$appid).$secret);  $paramStr = 'appid'.$appid .
     *                           'deviceid'.$deviceid . 'format'.$format . 'login'.$login . 'method'.$method . 'pass'.
     *                           $pass;
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function login(
        $appid,
        $deviceid,
        $login,
        $pass,
        $useragent,
        $sig
    ) {

        //prepare query string for API call
        $_queryBuilder = '/api/auth/login';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken)
        );

        //prepare parameters
        $_parameters = array (
            'appid'     => $appid,
            'deviceid'  => $deviceid,
            'login'     => $login,
            'pass'      => $pass,
            'useragent' => $useragent,
            'sig'       => $sig
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Получить JWT токен, через авторизацию подпользователем системы
     *
     * @param string  $name          TODO: type description here
     * @param string  $email         TODO: type description here
     * @param integer $password      TODO: type description here
     * @param integer $departmentId  TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function register(
        $name,
        $email,
        $password,
        $departmentId
    ) {

        //prepare query string for API call
        $_queryBuilder = '/api/auth/register';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken)
        );

        //prepare parameters
        $_parameters = array (
            'name'          => $name,
            'email'         => $email,
            'password'      => $password,
            'department_id' => $departmentId
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * Обновление токена
     *
     * @param string  $contentType      TODO: type description here
     * @param string  $accept           TODO: type description here
     * @param string  $id2ClientToken   TODO: type description here
     * @param integer $appid            TODO: type description here
     * @param string  $deviceid         TODO: type description here
     * @param string  $useragent        TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function refresh(
        $contentType,
        $accept,
        $id2ClientToken,
        $appid,
        $deviceid,
        $useragent
    ) {

        //prepare query string for API call
        $_queryBuilder = '/api/auth/refresh';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => BaseController::USER_AGENT,
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken),
            'Accept'           => $accept,
            'Id2-Client-Token' => $id2ClientToken
        );

        //prepare parameters
        $_parameters = array (
            'appid'            => $appid,
            'deviceid'         => $deviceid,
            'useragent'        => $useragent
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }
}
