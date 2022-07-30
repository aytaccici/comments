<?php

namespace App\Exceptions;

use Exception;

class PostNotFoundException extends Exception
{
    protected $message='Post not found';
}
