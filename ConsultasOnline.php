<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<div class="consulta-body">
                <div class="consulta-container">
                    <div class="consulta-card">
                        <div class="left-column background1-left-column">
                            <h6>Veterinaria</h6>
                            <h2>DoctorPet</h2>
                            <i class="fa-sharp fa-solid fa-shield-dog"></i>
                        </div>
                        <div class="right-column">
                            <div>
                                <h4>Atención</h4>
                                <h6>08:00 a.m. - 18:00 p.m.</h6>
                            </div>
                            <h2>Consulta por Internet</h2>
                            <p>Nuestros veterinarios están esperando por su consulta online. Registre sus datos y eliga un
                            horario disponible para su atención online, y una vez hecho se le enviara un link de zoom
                            15 minutos antes de su cita programada.</p>
                            <a href="https://api.whatsapp.com/send?phone=958407045&text=Deseo registrar..." 
                               target="_blank" class="button background1-left-column">Empezar</a>
                        </div>
                    </div>
                </div> 
            </div>  
<?php 
    include './includes/templates/footer.php';

?>