<?php

spl_autoload_register(function ($name){
    require_once './'.str_replace('\\','/',$name).'.php';
});