<?php

// class NombreClase extends Controller{

//     function __construct(){
//         parent::__construct();
//         echo "<p>Nuevo controlador XXXXX</p>";
//         $this->view->render('XXXXX/index');
//     }
// }

?>

<?php

class Main extends Controller{

    function __construct(){
        parent::__construct();
        // echo "<p>Nuevo controlador Main</p>";
        // $this->view->render('main/index');
    }

    function render(){
        $this->view->render('main/index');
    }

    function saludo(){
        echo "<p>Ejecutaste el método Saludo</p>";
    }
}

?>

