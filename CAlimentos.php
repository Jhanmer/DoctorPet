<?php 
    
    require ('includes/funciones.php');
    require ('includes/config/database.php');
    $db = conectarDB();
    incluirTemplate('header');
?>

        <div class="container">
        <?php 
        $limite = 100;
        include 'parce-alimento.php';
        ?>
            
        </div>

        
       


    <?php 
    include './includes/templates/footer.php';

?>