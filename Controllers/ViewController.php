<?php

namespace Controllers;

class ViewController
{
    public function displayForm()
    {
        include('views/form.php');
    }

    public function displayResult($modifiedUrl)
    {
        include('views/result.php');
    }
}
?>