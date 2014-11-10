<?php
$titulo='Bienvenidos al Home';
$contenido='.......';

//concatenamos en un arreglo

$variables=array('titulo'=>$titulo,'contenido'=>$contenido,);

view('home',$variables);

?>