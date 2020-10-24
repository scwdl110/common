<?php
declare (strict_types=1);

namespace Captainbi\Library\Exception;

use Exception;

/**
 * HTTP异常
 */
class BusinessException extends \RuntimeException
{
    public function __construct($message, $code, $previous)
    {
        parent::__construct($message, $code, $previous);
    }
}
