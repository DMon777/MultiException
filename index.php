<?php

include 'Controller.php';

if($_POST['addMessage']){

    try{
        $controller = new Controller('message.txt');
        $controller->writeFile($_POST['name'],$_POST['message']);
    } catch(MultiException $e){
        foreach ($e as $error){
            echo $error->getMessage();
        }
    }

}

?>

<div class="col-md-8">
    <form method="post" action="">
        <div class="form-group">
            <label for="InputHeader">name</label>
            <input type="text" name="name" class="form-control" id="InputHeader" placeholder="Header">
        </div>
        <div class="form-group">
            <label for="InputText">message</label>
            <textarea class="form-control" name="message" rows="3" id="InputText"></textarea>
        </div>

        <input type="submit" name="addMessage" value="submit" class="btn btn-default">
    </form>
</div>
