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
class MApiMobileController extends BaseController
{
    /**
     * @var MApiMobileController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return MApiMobileController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * @todo Add general description for this endpoint
     *
     * @param string  $grantType     TODO: type description here
     * @param string  $refreshToken  TODO: type description here
     * @param integer $clientId      TODO: type description here
     * @param string  $clientSecret  TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function refresh(
        $grantType,
        $refreshToken,
        $clientId,
        $clientSecret
    ) {

        //prepare query string for API call
        $_queryBuilder = '/oauth/token';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken)
        );

        //prepare parameters
        $_parameters = array (
            'grant_type'    => $grantType,
            'refresh_token' => $refreshToken,
            'client_id'     => $clientId,
            'client_secret' => $clientSecret
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
     * @todo Add general description for this endpoint
     *
     * @param string  $grantType     TODO: type description here
     * @param integer $clientId      TODO: type description here
     * @param string  $clientSecret  TODO: type description here
     * @param string  $username      TODO: type description here
     * @param integer $password      TODO: type description here
     * @param integer $appid         TODO: type description here
     * @param string  $sig           TODO: type description here
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function login(
        $grantType,
        $clientId,
        $clientSecret,
        $username,
        $password,
        $appid,
        $sig
    ) {

        //prepare query string for API call
        $_queryBuilder = '/api/mobile/login';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken)
        );

        //prepare parameters
        $_parameters = array (
            'grant_type'    => $grantType,
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'username'      => $username,
            'password'      => $password,
            'appid'         => $appid,
            'sig'           => $sig
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