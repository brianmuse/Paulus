<?php
/**
 * Paulus - A PHP micro-framework for creating RESTful services
 *
 * @author      Trevor Suarez (Rican7)
 * @author      Mark Costello (mcos)
 * @copyright   2015 Trevor Suarez
 * @link        https://github.com/Rican7/Paulus
 * @license     https://github.com/Rican7/Paulus/blob/master/LICENSE
 * @version     2.0.0
 */

namespace Paulus\Exception\Http;

use Exception;
use Paulus\Exception\Http\Standard\BadGateway;
use Paulus\Exception\Http\Standard\BadRequest;
use Paulus\Exception\Http\Standard\Forbidden;
use Paulus\Exception\Http\Standard\InternalServerError;
use Paulus\Exception\Http\Standard\MethodNotAllowed;
use Paulus\Exception\Http\Standard\NotAcceptable;
use Paulus\Exception\Http\Standard\NotFound;
use Paulus\Exception\Http\Standard\NotImplemented;
use Paulus\Exception\Http\Standard\Unauthorized;

/**
 * ApiExceptionFactory
 *
 * Provides the means to create Api Exceptions using minimal other information
 *
 * @package Paulus\Exception\Http
 */
class ApiExceptionFactory
{

    /**
     * Create an HTTP exception using a HTTP status code.
     *
     * @param int $code              The HTTP status code
     * @param string $message        The optional message to include with the exception
     * @param Exception $previous    The previous exception thrown, if any
     * @static
     * @access public
     * @return ApiExceptionInterface
     */
    public static function createFromCode($code, $message = null, Exception $exception = null)
    {
        switch ($code) {
            case 400:
                return BadRequest::create($message, $code, $exception);
            case 401:
                return Unauthorized::create($message, $code, $exception);
            case 403:
                return Forbidden::create($message, $code, $exception);
            case 404:
                return NotFound::create($message, $code, $exception);
            case 405:
                return MethodNotAllowed::create($message, $code, $exception);
            case 406:
                return NotAcceptable::create($message, $code, $exception);
            case 501:
                return NotImplemented::create($message, $code, $exception);
            case 502:
                return BadGateway::create($message, $code, $exception);
            case 500:
            default:
                return InternalServerError::create($message, null, $exception);
        }
    }
}
