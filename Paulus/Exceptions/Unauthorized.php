<?php

namespace Paulus\Exceptions;

use	\Paulus\Exceptions\Interfaces\ApiException,
	\Paulus\Exceptions\Traits\ApiExceptionBase,
	\InvalidArgumentException;

/**
 * Unauthorized 
 *
 * Unauthorized Exception 
 * 
 * @uses InvalidArgumentException
 * @uses ApiException
 * @package		Paulus\Exceptions
 */
class Unauthorized extends InvalidArgumentException implements ApiException {
	// Use trait
	use ApiExceptionBase;

	// Define unique properties
	protected $code = 401;
	protected $slug = 'UNAUTHORIZED';
	protected $message = 'You are not authorized to access or modify this';

} // End class Unauthorized
