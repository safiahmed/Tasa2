<?php

function __autoload($classname){ //this will call automatically whenever php call any functions
     $classname = strtolower($classname);
    include "classes/".$classname.".php";
}
