<?php
/**
 *  For displaying home page.
 * @package BeOnePage
 */

get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
    }
    else{
		?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section id="slider" class="slider<?php echo Kirki::get_option( 'front_page_text_slider_parallax' ) == '1' ? ' slider-parallax' : ''; ?> nopadding clearfix">
				<div class="full-screen">
					<div class="container slider-caption text-center clearfix">
						<?php
							if ( Kirki::get_option( 'front_page_text_slider_title' ) != '' ) {
							
								echo '<h1>' .  html_entity_decode(wp_kses( Kirki::get_option( 'front_page_text_slider_title' ), array( 'span' => array() ) )) . '</h1>';
							}
						?>

						<?php
							if ( Kirki::get_option( 'front_page_text_slider_content' ) != '' ) {
								echo '<p>' . wp_kses( Kirki::get_option( 'front_page_text_slider_content' ), '<span>' ) . '</p>';
							}
						?>

						<?php if ( Kirki::get_option( 'front_page_text_slider_btn_text' ) != '' ) : ?>
							<div class="slider-btn">
								<a href="<?php echo esc_url(Kirki::get_option( 'front_page_text_slider_btn_url' )); ?>" class="btn btn-light"><?php echo esc_html(Kirki::get_option( 'front_page_text_slider_btn_text' )); ?></a>
							</div><!-- .slider-btn -->
						<?php endif; ?>
					</div><!-- .container -->
				</div><!-- .full-screen -->

				<?php if ( Kirki::get_option( 'front_page_text_slider_scroll_down' ) == '1' ) : ?>
					<div class="scroll-down"></div>
				<?php endif; ?>
			</section><!-- #slider -->

			<section id="como-funciona" class="module icon-service-module clearfix">
				<div sytle="margin-top: 250px;" class="<?php echo Kirki::get_option( 'front_page_icon_service_module_layout' ) == 'fixed' ? 'container' : 'container-fluid'; ?>">
                    <div class="row">
						<?php if ( Kirki::get_option( 'front_page_icon_service_module_title' ) != '' ) : ?>
							<div class="module-caption text-center">
								<h2><?php echo html_entity_decode(wp_kses( Kirki::get_option( 'front_page_icon_service_module_title' ), '<span>' )); ?></h2>
								
								<?php if ( Kirki::get_option( 'front_page_icon_service_module_subtitle' ) != '' ) : ?>
									<p><?php echo esc_html(Kirki::get_option( 'front_page_icon_service_module_subtitle' )); ?></p>
								<?php endif; ?>

								<div class="separator">
									<span><i class="fa fa-circle"></i></span>
								</div><!-- .separator -->
								<div class="col-xs-0 col-md-1 col-lg-2 col-sm-2"></div>
								<div class="col-xs-12 col-md-10 col-lg-8 col-sm-8">
								<br><p style="font-family: &quot;Raleway&quot;, sans-serif; font-size: 1.377em; letter-spacing: .036em;">Centralizar toda la tecnología del hogar en un dispositivo móvil.<p><br>
								<p>Controla los sistemas desde tu propio dispositivo, <b>eliminando</b> la necesidad de encender o apagar las luces, altavoces, aires acondicionados... a mano.</p>
								<p>Su casa sobrá dónde se encuentra usted y encenderá solo las luces que necesite, nuestro <b>sistema modular</b> le permite controlar sólo lo que quiere controlar.</p>
								<br>
								<div class="row-fluid">
								<div class="col-xs-0 col-md-2 col-lg-2 col-sm-2"></div>
								<div class="col-xs-12 col-md-8 col-lg-8 col-sm-8">
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_ventaja_4.png" alt=""/>
												</div>
												<div>
													<a>Sin necesidad</a><br>  
													<a>de obras</a>  
												</div>
											</div>
										</div>								
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_ventaja_5.png" alt=""/>
												</div>
												<div>
													<a>Sin pagos mensuales.</a><br>  
													<a>Pague lo que utilice</a>  
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-12"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_vetaja_6.png" alt=""/>
												</div>
												<div>
													<a>Gane comodidad.</a><br>  
													<a>Ahorre energía.</a>  
												</div>
											</div>
										</div>
									</div> 	
								</div>
								<div class="col-xs-0 col-md-2 col-lg-2 col-sm-8"></div>
    						</div> 	
							<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="margin-top: 60px">	
								<h3>
									<span>¿EN QUE CONSISTE?</span>
								</h3>
								<br><p style="font-family: &quot;Raleway&quot;, sans-serif; font-size: 1.377em; letter-spacing: .036em;">Fácil y cómodo<p><br>
								<p>El funcionamiento de nuestro producto es muy sencillo, solo hay que instalar un pequeño servidor cerca de su router en casa, posteriormente deberá cambiar los interruptores de las habitaciones que usted quiera controlar por unos proporcionados en nuestro paquete y añadir en los interruptores que usted quiera un pequeño sistema intermedio que le permitirá controlar la energía que pasa.</p>
								<br><p>¡Así de sencillo en 3 pasos!</p><br><br>
							</div>
							
								<div class="row-fluid">
								<div class="col-xs-0 col-md-2 col-lg-2 col-sm-2"></div>
								<div class="col-xs-12 col-md-8 col-lg-8 col-sm-8">
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_paso_1.png" alt=""/>
												</div>
												<div>
													<a>Recibir el paquete</a><br>  
													<a>SwitcHome</a>  
												</div>
											</div>
										</div>								
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_paso_2.png" alt=""/>
												</div>
												<div>
													<a>Instalar servidor</a><br>  
													<a>router</a>  
												</div>
											</div>
										</div>
									</div>
									<div class="col-xs-12 col-md-4 col-lg-4 col-sm-12"> 
										<div>
											<div>
												<div class="fotoIcon">
													<p></p>
													<p></p>
													<img class="imagenPerso" src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ic_paso_3.png" alt=""/>
												</div>
												<div>
													<a>Cambiar interruptores</a><br>  
													<a>deseados</a>  
												</div>
											</div>
										</div>
									</div> 	
								</div>
								<div class="col-xs-0 col-md-2 col-lg-2 col-sm-8"></div>
    						</div>
							<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12" style="margin-top: 60px">	
								<h3><span>¿Que beneficios me aporta switchome?</span></h3>								
								<br><p style="font-family: &quot;Raleway&quot;, sans-serif; font-size: 1.377em; letter-spacing: .036em;">Controle luces, sonido y enchufes dónde y cuándo quiera.<p><br>
								<p>Gracias a nuestro avanzado sistema de seguimiento se acabaron las luces y aparatos encendidos sin necesidad, lo que supone un ahorro en la factura energética.<p>
								<p>Use su propio hogar como una alarma, haciendo que los electrodomésticos, luces, sonido... empiecen o dejen de funcionar a la hora que usted quiera</p>
							</div>
							</div>
							<div class="col-xs-0 col-md-1 col-lg-2 col-sm-2"></div>
							</div>	
								
								
							<!-- .module-caption -->
						<?php endif; ?>

						<?php $icon_service_boxes = get_post_meta( get_option( 'page_on_front' ), '_beonepage_option_icon_service_box', true ); ?>

						<?php if ( ! empty( $icon_service_boxes ) ) : ?>
							<?php foreach ( $icon_service_boxes as $icon_service_box ) : ?>
								<?php
									if ( Kirki::get_option( 'front_page_icon_service_module_layout' ) == 'fixed' ) {
										$width = 'col-md-4';
									} else {
										$width = 'col-md-3';
									}
								?>

								<div class="icon-service-box <?php echo $width; ?> text-center">
									<?php if ( isset( $icon_service_box['url'] ) && $icon_service_box['url'] != '' ) : ?>
										<a href="<?php echo esc_url($icon_service_box['url']); ?>">
									<?php endif; ?>

									<div class="service-icon">
										<i class="fa fa-<?php echo esc_attr($icon_service_box['icon']); ?>"></i>
									</div><!-- .service-icon -->

									<?php if ( isset( $icon_service_box['title'] ) && $icon_service_box['title'] != '' ) : ?>
										<h3 class="service-title"><?php echo esc_html($icon_service_box['title']); ?></h3>
									<?php endif; ?>

									<?php if ( isset( $icon_service_box['description'] ) && $icon_service_box['description'] != '' ) : ?>
										<p class="service-content"><?php echo esc_html($icon_service_box['description']); ?></p>
									<?php endif; ?>

									<?php if ( isset( $icon_service_box['url'] ) && $icon_service_box['url'] != '' ) : ?>
										</a>
									<?php endif; ?>

									<div class="spacer"></div>
								</div><!-- .icon-service-box -->
							<?php endforeach; ?>
						<?php endif; ?>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #service -->

			<section id="<?php echo esc_attr(Kirki::get_option( 'front_page_portfolio_module_id' )); ?>" class="module portfolio-module clearfix">
				<div class="container-fluid" style="margin: 20px">
                    <div class="row row-nopadding">
						<?php if ( Kirki::get_option( 'front_page_portfolio_module_title' ) != '' ) : ?>
							<div class="module-caption col-md-12 text-center">
								<h2><?php echo html_entity_decode(wp_kses( Kirki::get_option( 'front_page_portfolio_module_title' ), '<span>' )); ?></h2>

								<div class="separator">
									<span><i class="fa fa-circle"></i></span>
								</div><!-- .separator -->
						<?php endif; ?>

						<div class="col-xs-0 col-md-1 col-lg-2 col-sm-2"></div>
						<div class="col-xs-12 col-md-10 col-lg-8 col-sm-8">
						<div class="module-caption col-md-12 text-center">
						
							<p> Nuestro producto se basa en aprovechar la instalacion del propio hogar facilitando así su incorporación al hogar, para ello, tenemos varios tipos de dispositivos controladores</p>
							<br>
							<h3>
								Dispositivos de luz
							</h3>
							<p>
								Gracias a las nuevas tecnologías, hemos podido comprimir un pequeño ordenador en el espacio de un interruptor, por lo que nuestro interruptor sustituiría al habitual en su hogar haciendolo así inteligente. La instalación será tan sencilla como conectar cambiar de interruptor.
							</p>
							<br>
							<h3>
								Dispositivos de sonido
							</h3>
							<p>
								Estos pequeños receptores inteligentes solo necesitan energía de un cargador convencial de movil y que su aparato de música tenga una entrada jack 3.5 (el típico conector de auriculares). Solo con esto nuestro dispositivo controlará su altavoz sea la marca que sea.
							</p>
							<br>
							<h3>
								Dispositivos de infrarrojos
							</h3>
							<p>
								Estos emisores de infrarrojos se colocarían en el centro de las salas donde se encuentran los dispositivos que se van a controlar, generalmente recomendamos acoplarlo con la luz central de la sala. Solo conectandolo a la red de luz, podrá controlar desde su móvil y de una manera muy comoda las radios, televisiones y aires acondicionados de su sala. 
							</p>
							<br>
							<h3>
								Dispositivos de enchufes
							</h3>
							<p>
								Nuestros enchufes inteligentes son tan sencillos de instalar como conectar un alargador convencional, sencillamente se trataría de un dispositivo que se conecta a la toma de electricidad y a éste se le conectarían los aparatos eléctricos. No importa que potencia tengan, usted podrá controlar si les llega corriente o no desde su móvil. 
							</p>
							<br>
							<h3>
							</h3>
							<p>
								Estos dispositivos son los mas pequeños y a la vez más importantes, solo necesitan de una batería de botón, la cual dura meses y con ello estos dispositivos triangularán su ubicación en la casa ofreciendole un nuevo tipo de casa inteligente, encendiendo solo la luz de la sala en la que se encuentre y apagando todas ellas en las que no haya nadie. No requiere ningun tipo de instalación, sencillamente deberá decidir a que distancia quiere que funcionen y listo.
							</p>
<br>
				
							</div><!-- .module-caption -->
							</div>
					<div class="col-xs-0 col-md-1 col-lg-2 col-sm-2"></div>
					</div><!-- .row -->
				</div><!-- .container-fluid -->
			</section><!-- #portfolio -->

			<section id="<?php echo esc_attr(Kirki::get_option( 'front_page_ver_promo_module_id' )); ?>" class="module promo-box-ver-module clearfix">
				<div class="container">
                    <div class="row">
						<div class="col-md-10 col-md-offset-1 text-center">
							<h2> ¿QUIENES SOMOS? </h2>
							
							<div class="separator">
									<span><i class="fa fa-circle"></i></span>
							</div><!-- .separator -->

							<?php
								if ( Kirki::get_option( 'front_page_ver_promo_content' ) != '' ) {
									echo '<p> Somos un grupo de emprendedores finalizando los estudios de Grado Superior en Desarrollo de Aplicaciones Multiplataforma, cuyo proyecto final queremos que llegue más alla de un simple trabajo, sino hacer que llegue a todo el mundo</p>';
								}
							?>
							<br><br>
							
							<h3>
								Nuestro equipo
							</h3>
							
							<div class="row-fluid">
        						<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
									<div>
										<h4>
											José Manuel Rivera García
										</h4>
										<div>
											<div class="foto">
												<p></p>
												<p></p>
												<img class="imagenPerso" src="https://media.licdn.com/dms/image/C5603AQEZUF0oBan3wA/profile-displayphoto-shrink_800_800/0?e=1532563200&v=beta&t=qEmfXc-hfjbQIaKUBnKW07fRt_Lyj8zHEZcNW7LnZpY" alt=""/>
											</div>
											<div>
												<a>Full-stack especializado en backend</a>  
											</div>
										</div>
									</div>								
								</div>
        						<div class="col-xs-12 col-md-4 col-lg-4 col-sm-6"> 
									<div>
										<h4>
											Julián Parrilla Erazo
										</h4>
										<div>
											<div class="foto">
												<p></p>
												<p></p>
												<img class="imagenPerso" src="https://media.licdn.com/dms/image/C5603AQGKgnZXfwBerQ/profile-displayphoto-shrink_800_800/0?e=1534377600&v=beta&t=5E-c-YIdaGSdZoRifjsklICe07eJeKqtFbTdMmSx2uY" alt=""/>
											</div>
											<div>
												<a>Full-stack especializado en Android</a>  
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-md-4 col-lg-4 col-sm-12"> 
									<div>
										<h4>
											Denis Menendez Acosta
										</h4>
										<div>
											<div class="foto">
												<p></p>
												<p></p>
												<img class="imagenPerso" src="https://media.licdn.com/dms/image/C5603AQELzz82_JVJVA/profile-displayphoto-shrink_800_800/0?e=1532563200&v=beta&t=vduwlYrS6zGaK5LORx1OJw0K33V2qge6fw6EcGgxJDM" alt=""/>
											</div>
											<div>
												<a>Full-stack especializado en iOS</a>  
											</div>
										</div>
									</div>
								</div> 	
    						</div> 	 	

							<?php if ( Kirki::get_option( 'front_page_ver_promo_btn_text' ) != '' ) : ?>
								<div class="promo-btn">
									<a href="<?php echo esc_url(Kirki::get_option( 'front_page_ver_promo_btn_url' )); ?>" class="btn btn-light"><?php echo esc_html(Kirki::get_option( 'front_page_ver_promo_btn_text' )); ?></a>
								</div><!-- .promo-btn -->
							<?php endif; ?>
						</div><!-- .promo-box-ver -->
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #promo-box-ver -->

			<section id="<?php echo esc_attr(Kirki::get_option( 'front_page_blog_module_id' )); ?>" class="module blog-module clearfix">
				<div class="container-fluid">
                    <div class="row row-nopadding">
						<?php if ( Kirki::get_option( 'front_page_blog_module_title' ) != '' ) : ?>
							<div class="module-caption col-md-12 text-center">
								<h2>Contenido multimedia</h2>
								<div class="separator">
									<span><i class="fa fa-circle"></i></span>
								</div><!-- .separator -->
							
								<div class="row-fluid">
									<div class="col-xs-12 col-md-5 col-lg-5 col-sm-5"> 
										<div>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/7kbRHG5ihL4?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>								
									</div>
									<div class="col-xs-0 col-md-2 col-lg-2 col-sm-2"> </div>
									<!--
									<div id="myCarousel" class="carousel slide col-xs-12 col-md-4 col-lg-4 col-sm-4" data-ride="carousel">
									
									  <ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
										<li data-target="#myCarousel" data-slide-to="3"></li>
										<li data-target="#myCarousel" data-slide-to="4"></li>
										<li data-target="#myCarousel" data-slide-to="5"></li>
									  </ol>

									  <div class="carousel-inner">
										<div class="item active">
										  <img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180516.jpg" alt="Login" style="width:100%;">
											<div class="carousel-caption">
												<h3>Login</h3>
											 	<p>Pantalla para acceder</p>
											</div>
										</div>

										<div class="item">
											<img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180525_1.jpg" alt="Pantalla inicial" style="width:100%;">
											<div class="carousel-caption">
												<h3>Pantalla inicial</h3>
											 	<p>Vista que verá el usuario cuando acceda a su app</p>
											</div>
										</div>
										  
										<div class="item">
											<img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180525_2.jpg" alt="Funciones rápidas" style="width:100%;">
											<div class="carousel-caption">
												<h3>Funciones rápidas</h3>
											 	<p>Se permite acceder a las funciones más utiles dentro de la app</p>
											</div>
										</div>
										  
										<div class="item">
										  <img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180518_16.jpg" alt="Modificar configuraciones" style="width:100%;">
											<div class="carousel-caption">
												<h3>Modificar configuraciones</h3>
											 	<p>Pantalla para modificar los grupos ya hechos</p>
											</div>
										</div>

									  	<div class="item">
										  	<img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180518_8.jpg" alt="Sensores de proximidad" style="width:100%;">
											<div class="carousel-caption">
												<h4>Sensores de proximidad</h4>
											 	<p>Configurando una liza para que se encienda cuando detecte cierto sensor y a que distancia</p>
											</div>
										</div>
										  
										<div class="item">
										  	<img src="http://switchome.vanadis.es/wp-content/uploads/2018/05/HUAWEI-MLA-L01_ScreenShot_20180525.jpg" alt="Dispositivos a controlar" style="width:100%;">
											<div class="carousel-caption">
												<h4>Dispositivos disponibles</h4>
											 	<p>Todos los tipos de dispositivos que hay</p>
											</div>
										</div>
										
									  </div>

									  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="right carousel-control" href="#myCarousel" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>
									-->
									<div class="col-xs-12 col-md-5 col-lg-5 col-sm-5"> 
										<div>
											<iframe width="560" height="315" src="https://www.youtube.com/embed/pg9avC1nbVk?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
										</div>
									</div>
										
									<div class="col-xs-12 col-md-12 col-lg-12 col-sm-12"> 
										<img src="http://switchome.vanadis.es/wp-content/uploads/2018/06/SwitcHome-mockup.png" alt=""/>
									</div>
										
								</div> 	 
								
								<div class="spacer"></div>
							</div><!-- .module-caption -->
						<?php endif; ?>
					</div><!-- .row -->
				</div><!-- .container-fluid -->
			</section><!-- #blog -->

			<section id="<?php echo esc_attr(Kirki::get_option( 'front_page_contact_module_id' )); ?>" class="module contact-module clearfix">
				<div class="container">
                    <div class="row">
						<?php if ( Kirki::get_option( 'front_page_contact_module_title' ) != '' ) : ?>
							<div class="module-caption col-md-12 text-center">
							<h2>Contacta con nosotros</h2>
								<div class="separator">
									<span><i class="fa fa-circle"></i></span>
								</div><!-- .separator -->

								<div class="spacer"></div>
							</div><!-- .module-caption -->
						<?php endif; ?>

						<?php $contact_boxes = get_post_meta( get_option( 'page_on_front' ), '_beonepage_option_contact_box', true ); ?>

						<?php if ( ! empty( $contact_boxes ) ) : ?>
							<div class="contact-info col-md-4 clearfix">
								<?php foreach ( $contact_boxes as $contact_box ) : ?>
									<div class="contact-item">
										<?php if ( isset( $contact_box['icon'] ) && $contact_box['icon'] != '' ) : ?>
											<div class="ci-icon"><i class="fa fa-<?php echo esc_attr($contact_box['icon']); ?>"></i></div>
										<?php endif; ?>

										<?php if ( isset( $contact_box['label'] ) && $contact_box['label'] != '' ) : ?>
											<div class="ci-title"><?php echo esc_html($contact_box['label']); ?></div>
										<?php endif; ?>

										<?php if ( isset( $contact_box['description'] ) && $contact_box['description'] != '' ) : ?>
											<?php if ( isset( $contact_box['url'] ) && $contact_box['url'] != '' ) : ?>
												<div class="ci-content"><a href="<?php echo esc_url($contact_box['url']); ?>"><?php echo wp_kses_post( $contact_box['description']); ?></a></div>
											<?php else : ?>
												<div class="ci-content"><?php echo wp_kses_post( $contact_box['description']); ?></div>
											<?php endif; ?>
										<?php endif; ?>
									</div><!-- .contact-info -->
								<?php endforeach; ?>
							</div><!-- .contact-item  -->
						<?php endif; ?>

						<div class="contact-form col-md-8 clearfix">
							<?php
								$a = rand( 0, 9 );
								$b = rand( 0, 9 );
								$required = esc_attr__( 'Este apartado es obligatorio.', 'beonepage' );
								$equalto = esc_attr__( 'Porfavor, revise la respuesta.', 'beonepage' );
								$email = esc_attr__( 'Dirección de correo inválida.', 'beonepage' );
							?>

							<form class="contact-form clearfix" action="mailto:domotic.solutions.iot@gmail.com" method="post" enctype="text/plain">

								<fieldset class="col-sm-4">
									<input type="text" id="contact-form-name" name="name" placeholder="<?php esc_attr_e( 'Nombre', 'beonepage' ); ?>" value="<?php if( isset( $_POST['name'] ) ) { echo esc_attr( $_POST['name'] ); } ?>" class="cf-form-control required" data-msg-required="<?php echo $required; ?>" />
								</fieldset>

								<fieldset class="col-sm-4">
									<input type="email" id="contact-form-email" name="email" placeholder="<?php esc_attr_e( 'Email', 'beonepage' ); ?>" value="<?php if( isset( $_POST['email'] ) ) { echo esc_attr( $_POST['email'] ); } ?>" class="required email cf-form-control" data-msg-required="<?php echo $required; ?>" data-msg-email="<?php echo $email; ?>" />
								</fieldset>

								<fieldset class="col-sm-4">
									<input type="text" id="contact-form-phone" name="phone" placeholder="<?php esc_attr_e( 'Teléfono', 'beonepage' ); ?>" value="<?php if( isset( $_POST['phone'] ) ) { echo esc_attr( $_POST['phone'] ); } ?>" class="cf-form-control" />
								</fieldset>

								<fieldset class="col-sm-12">
									<input type="text" id="contact-form-subject" name="subject" placeholder="<?php esc_attr_e( 'Asunto', 'beonepage' ); ?>" value="<?php if( isset( $_POST['subject'] ) ) { echo esc_attr( $_POST['subject'] ); } ?>" class="required cf-form-control" data-msg-required="<?php echo $required; ?>" />
								</fieldset>

								<fieldset class="col-sm-12">
									<textarea rows="3" id="contact-form-message" name="message" placeholder="<?php esc_attr_e( 'Mensaje', 'beonepage' ); ?>" class="required cf-form-control" data-msg-required="<?php echo $required; ?>"><?php if( isset( $_POST['message'] ) ) { echo esc_attr( $_POST['message'] ); } ?></textarea>
								</fieldset>

								<fieldset class="submit col-sm-12">
									<button class="btn btn-light" type="submit" ><?php echo esc_html(Kirki::get_option( 'front_page_contact_module_send' )); ?></button>
								</fieldset><!-- .submit -->
							</form>
                        </div><!-- .contact-form -->
						
						<div class="contact-form col-md-4 clearfix">
							<h4>
								Correo electrónico: 
							</h4>
							<a href="mailto:domotic.solutions.iot@gmail.com">domotic.solutions.iot@gmail.com</a>
							<br><br>
							<h4>
								Teléfono: 
							</h4>
							<a>+34 622 76 73 44</a>
							<br><br>
							<h4>
								Dirección: 
							</h4>
							<a>C/ Gaztambide 65 (Bajo 002) Madrid, España</a>
						</div>
					</div><!-- .row -->
				</div><!-- .container -->
			</section><!-- #contact -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="footerJuli">
		<div class="col-xs-6 col-md-6 col-lg-6 col-sm-6" style="text-align: right">
			<button style="background-color: #dddddd00; border: none;" onclick="location.href='https://play.google.com/store/apps/details?id=com.app1t1617.iotgroup.swithome'">
				<img style='object-fit: contain' src="http://switchome.vanadis.es/wp-content/uploads/2018/06/android-1.png">
			</button>
		</div>
		<div class="col-xs-6 col-md-6 col-lg-6 col-sm-6" style="text-align: left">
			<button style="background-color: #dddddd00; border: none;" onclick="location.href='https://itunes.apple.com/us/app/switch-home/id1356055266?l=es'">
				<img style='object-fit: contain' src="http://switchome.vanadis.es/wp-content/uploads/2018/06/ios-1.png">
			</button>
		</div>
	</div>
	<?php } ?>
	<?php get_footer(); ?>