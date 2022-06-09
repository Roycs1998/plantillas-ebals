<!DOCTYPE HTML>
<html lang="en-US">
	
	<?php include('assets/php/head-link.php'); ?>

<body>

	<?php include('assets/php/header.php');?>	

	<!-- breadcumb-area -->
	<div class="breadcumb-area">
		<div class="container">				
			<div class="row">
				<div class="col-md-12 txtc  text-center ccase">
					<div class="brpt">
						<h2>Contacto</h2>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- solutech_contact5_area -->
	<div class="solutech_contact5_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="witr_section_title">
						<div class="witr_section_title_inner text-left">
							<h3>Cotiza aquí</h3>		
							<p>Escríbenos y te responderemos en el menor tiempo posible.</p>		
						</div>
					</div>
				</div>
			</div>
			<div class="row contact_top">
				<div class="col-lg-8 col-md-12 col-sm-12">
					<div class="apartment_area">				
						<div class="apartment_text"></div>		
						<div class="witr_apartment_form">
							<form action="mail.php" method="post" id="contact-form">
								<div class="form-row">
									<div class="form-group col-md-6">
										<span><input type="text" name="name" placeholder="Nombre*"></span>
									</div>
									<div class="form-group col-md-6">
										<span><input type="email" name="email" placeholder="Correo Electrónico*"></span>
									</div>
								</div>
								<div class="form-group">
									<span><input type="number" name="phone" placeholder="Celular*"></span>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<span><input type="text" name="city" placeholder="RUC"></span>
									</div>
									<div class="form-group col-md-4">
										<span>
											<select name="select_opt">
												<option>¿Cual es su consulta?</option>
												<option>ISOS</option>
												<option>Problema con SUNAFIL</option>
												<option>Seguridad y Salud Ocupacional</option>
											</select>
										</span>
									</div>
									<div class="form-group col-md-2">
										<span><input type="text" name="zip" placeholder="Rubro"></span>
									</div>
								</div>
								<div class="form-group">
									<span><textarea name="comment" placeholder="Envienos una breve descripción sobre su consulta..."></textarea></span>
								</div>
								<button type="submit" name="ok" class="btn btn-primary">Enviar ahora</button>
								<div class="row">
									<div class="col-lg-12 text-center">
										<p class="form-messege"></p>
									</div>
								</div>
							</form>
						</div>					
					</div>									
				</div>
				<div class="col-lg-4 col-md-12 col-sm-12">
					<div class="row em_service_contact_area">
						<div class="col-lg-12 col-md-6 col-sm-12">
							<div class="service-item all_color_service width_height_link_0 text-center  ">
								<div class="service_top_image"></div>
								<div class="text_box all_icon_color">
									<i class="fa-solid fa-map"></i>
									<h3>Dirección de la Oficina</h3>
									<p>Calle Las Camelias 790,<br> distrito de San Isidro, Lima</p>		
								</div> 						
							</div>
						</div>
						<div class="col-lg-12 col-md-6 col-sm-12">
							<div class="service-item all_color_service width_height_link_0 text-center  ">
								<div class="service_top_image"></div>
								<div class="text_box all_icon_color">
									<i class="fa-solid fa-clock"></i>
									<h3>Horarios de atención</h3>
									<p>Lun - Vie: 09:00am - 06:00pm<br>Sábados: 9:00am - 12:00pm</p>	
								</div> 						
							</div>
						</div>
						<div class="col-lg-12 col-md-6 col-sm-12">
							<div class="service-item all_color_service width_height_link_0 text-center  ">
								<div class="service_top_image"></div>
								<div class="text_box all_icon_color">
									<i class="fa-solid fa-envelope"></i>
									<h3>Escribenos</h3>
									<p>ebelin@ecorporacionebals.com<br>+51 957404672</p>
								</div> 						
							</div>
						</div>
					</div>
				</div>			
			</div>			
		</div>			
	</div>

	<!-- security_map_area -->
	<div class="security_map_area"> 
		<div class="containers">
			<div class="row">
				<div class="col-lg-12">
					<div class="map_area">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20236.693023942586!2d-77.05168179188544!3d-12.10147346275939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868bd340ee1%3A0x14e3b337b0d072f1!2sC.%20las%20Camelias%20790%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1653683946078!5m2!1ses-419!2spe" width="600" 
						height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<?php include('assets/php/footer.php'); ?>
</body>
</html>