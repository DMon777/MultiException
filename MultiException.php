<?php

require_once 'ExceptionsCollection.php';

class MultiException extends Exception implements ArrayAccess,Iterator
{

    use ExceptionsCollection;

}