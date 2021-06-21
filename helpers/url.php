<?php
/*Diz onde fica a raiz do nosso sistema, 
para conseguirmos linkar imagens e estilos*/
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
