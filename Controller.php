<?php

require_once 'MultiException.php';

class Controller
{

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }


    public function writeFile($name,$message){

        $multiException = new MultiException();

        if(!$name){
            $multiException[] = new Exception('не введено имя!!!');
        }
        if(!$message) {
            $multiException[] = new Exception('не введено сообщение!!!');
        }
        if(count($multiException->data) == 0){
            $fullMessage = 'name : '.$name.' ;'.' message - '.$message."\n ";
            file_put_contents($this->path,$fullMessage,FILE_APPEND);
        } else {
            throw $multiException;
        }
    }

}