<!DOCTYPE html>

<html lang="es">

    <head>
        <title>PHP y objetos Objects (Tema 4).</title>
        <meta charset="utf-8">
        <meta name="description" content=
        "Entrega d'exercici: PHP i Objects (Tema 4). Sprint 1. Nivel 1.
        Ejercicios 1">
        <meta name="author" content="Susana Gil">
        <meta name="keywords" content="php html5 objetos">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <!-- Este meta se usa para la visualización en pantallas móviles-->

    </head>

    <body>

    <?php
        
        include("Employee.php");
        
        //Creación y asignación de objetos
        $emp1 = new Employee();
        $emp1->initialize("Susana", 5000);
        echo $emp1->print();
        echo '<br>';
            
        $emp2 = new Employee();
        $emp2->initialize("Pepe", 7000);
        echo $emp2->print();
        echo '<br>';
    ?>
    
    </body>

</html>