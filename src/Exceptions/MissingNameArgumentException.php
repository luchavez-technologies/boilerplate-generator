<?php

namespace Luchavez\BoilerplateGenerator\Exceptions;

use Exception;

/**
 * Class MissingNameArgumentException
 *
 * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
 */
class MissingNameArgumentException extends Exception
{
    public function __construct()
    {
        parent::__construct('Name argument is required!');
    }
}
