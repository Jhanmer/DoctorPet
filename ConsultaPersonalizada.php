<?php 
    require ('includes/funciones.php');
    incluirTemplate('header');
?>
<?php
require 'Config/conexion_bd.php';
$con = fnConnect($msg);
$consultaMascCliente = "select * from dp_mascota where idCliente  = '2'";
$ListaMascCli = mysqli_query($con, $consultaMascCliente);
?>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
							<!--
							<div class="form-group">
								<div class="form-checkbox">
									<label for="roundtrip">
										<input type="radio" id="roundtrip" name="flight-type">
										<span></span>Roundtrip
									</label>
									<label for="one-way">
										<input type="radio" id="one-way" name="flight-type">
										<span></span>One way
									</label>
									<label for="multi-city">
										<input type="radio" id="multi-city" name="flight-type">
										<span></span>Multi-City
									</label>
								</div>
							</div>
							-->
							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Motivo breve para la consulta</span>
										<input class="form-control" type="text" placeholder="¡Escriba aquí!">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Estado Actual  / <?php $idCliente ?></span>
											<select class="form-control">
												<option>Leve</option>
												<option>Medio</option>
												<option>
												
													Urgente
												</option>
												<option>Atención inmediata</option>
											</select>
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Fecha para la Cita</span>
										<input class="form-control" type="date" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Horario</span>
										<input class="form-control" type="time" id="hora" name="hora" required>
										<input type='time' id='mt_start'>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Selecione su Mascota a Tratar</span>
										<select class="form-control" name="mascotaCli" requerid>
											<?php while ($row = mysqli_fetch_assoc($ListaMascCli)) { ?>
												<option value="<?php echo $row["idMascota"] ?>">
													<?php echo $row["NomMasc"] ?>
												</option>
											<?php } ?>
										</select>
										<span class="select-arrow"></span>
									</div>


								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Adjunta Evidencia</span>
										<input type="file" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">¿Disponibilidad para ir a su domicilio?</span>
										<div class="form-checkbox">
											<label for="roundtrip">
												<input type="radio" id="roundtrip" name="flight-type">
												<span></span>No
											</label>
											<label for="one-way">
												<input type="radio" id="one-way" name="flight-type">
												<span></span>Si
											</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Fecha de última visita (No Obligatorio)</span>
										<input class="form-control" type="date">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Continuar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>

<?php 
    include './includes/templates/footer.php';

?>