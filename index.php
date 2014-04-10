

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es">
    <head> 

        <title>Apliko</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="author" content="juan2ramos" />       
        <meta name="description" content="Inicio" />       
        <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1" />
		<!--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
        <script src="js/jquery-2.1.0.min.js"></script>
        <script src="js/prefixfree.min.js"></script>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- Estilos -->
        <link rel="stylesheet" href="css/normalize.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css" />
        <!--Elementos para el script swiperbox-->
        
        <link rel="stylesheet" href="css/swipebox.css">
        
        
        <!--Fin Elementos para el script swiperbox-->
		<script type="text/javascript">
			$(document).ready(function(e) {
                //Check to see if the window is top if not then display button
                $(window).scroll(function(){
                    if ($(this).scrollTop() > 100) {
                        $('.scrollToTop').fadeIn();
                    } else {
                        $('.scrollToTop').fadeOut();
                    }
                });

                //Click event to scroll to top
                $('.scrollToTop').click(function(){
                    $('html, body').animate({scrollTop : 0},100);
                    return false;
                });
                $("#frmContactenos").submit(function (e)
				{
					console.log("Entre al envio");
					//Valido que los datos no esten vacios
					var nombres=$("#nombres").val();
					var residencia=$("#residencia").val();
					var email=$("#email").val();
					var celular=$("#telefono").val();
					var motivo=$("#motivo").val();
					var acepto=$("#acepto").che
					if(nombres.length>0)
					{
						if(residencia.length>0)
						{
							if(email.length>0)
							{
								if(celular.length>0)
								{
									if(motivo.length>0)
									{
										if($("#acepto").is(":checked"))
										{
											return;
										}else
										{
											alert("Debes aceptar los terminos y condiciones");
											e.preventDefault();
										}
									}else{
										$("#motivo").css("border-color","#F00");
										$("#motivo").css("border-style","solid");
										e.preventDefault();
									}
								}else{
									$("#celular").css("border-color","#F00");
									$("#celular").css("border-style","solid");
									e.preventDefault();
								}
							}else{
								$("#email").css("border-color","#F00");
								$("#email").css("border-style","solid");
								e.preventDefault();
							}
						}else{
							$("#residencia").css("border-color","#F00");
							$("#residencia").css("border-style","solid");
							e.preventDefault();
						}
						
					}else{
						$("#nombres").css("border-color","#F00");
						$("#nombres").css("border-style","solid");
						e.preventDefault();
					}
				});
				
				$("#frmIdeas").submit(function (e)
				{
					//Valido que los datos no esten vacios
					var nombres=$("#nombres1").val();
					var residencia=$("#residencia1").val();
					var email=$("#email1").val();
					var celular=$("#telefono1").val();
					var ocupacion=$("#ocupacion").val();
					var tipoDocumento=$("#tipodocumento").val();
					var documento=$("#documento").val();
					var nombreapp=$("#nombreapp").val();
					var objetivoapp=$("#objetivo").val();
					var appSimilares=$("#appSimilares").val();
					
					
					if(nombres.length>0)
					{
						if(residencia.length>0)
						{
							if(email.length>0)
							{
								if(celular.length>0)
								{
									if(ocupacion.length>0)
									{
										if(tipoDocumento.length>0)
										{
											if(documento.length>0)
											{
												if(nombreapp.length>0)
												{
													if(objetivoapp.length>0)
													{
														if(appSimilares.length>0)
														{
															if($("#acepto1").is(":checked") && $("#acepto2").is(":checked") && $("#acepto3").is(":checked"))
															{
																return;
															}else
															{
																alert("Debes aceptar los terminos y condiciones");
																e.preventDefault();
															}
														}else{
															$("#appSimilares").css("border-color","#F00");
															$("#appSimilares").css("border-style","solid");
															e.preventDefault();
														}
													}else{
														$("#objetivo").css("border-color","#F00");
														$("#objetivo").css("border-style","solid");
														e.preventDefault();
													}
												}else{
													$("#nombreapp").css("border-color","#F00");
													$("#nombreapp").css("border-style","solid");
													e.preventDefault();
												}
											}else{
												$("#documento").css("border-color","#F00");
												$("#documento").css("border-style","solid");
												e.preventDefault();
											}
										}else{
											$("#tipodocumento").css("border-color","#F00");
											$("#tipodocumento").css("border-style","solid");
											e.preventDefault();
										}
									}else{
										$("#ocupacion").css("border-color","#F00");
										$("#ocupacion").css("border-style","solid");
										e.preventDefault();
									}
								}else{
									$("#celular1").css("border-color","#F00");
									$("#celular1").css("border-style","solid");
									e.preventDefault();
								}
							}else{
								$("#email1").css("border-color","#F00");
								$("#email1").css("border-style","solid");
								e.preventDefault();
							}
						}else{
							$("#residencia1").css("border-color","#F00");
							$("#residencia1").css("border-style","solid");
							e.preventDefault();
						}
						
					}else{
						$("#nombres1").css("border-color","#F00");
						$("#nombres1").css("border-style","solid");
						e.preventDefault();
					}
				});
            });
		</script>
        <!-- Humans -->

    </head>
    <body>
        <header>
            <div id="header">
                <div id="contend-nav">
                    <div id="social">
                        <h2>Creamos apps para smartphones, tablets y computadores</h2>
                        <ul>
                            <li>
                            	<!--<img src="images/fb logo.svg"  style="width:30px"/>-->
                                <object type="image/svg+xml" data="images/fb logo.svg" style="width:30px">Your browser does not support SVG</object>
                            </li>
                            <li>
                                <object type="image/svg+xml" data="images/youtubelogo.svg" style="width:30px">Your browser does not support SVG</object>
                            </li>
                        </ul>
                    </div>
                    <nav id="nav" >
                        <figure>
                            <a class="links" href="#" data-menu="header"><img src="images/logo-apliko.png" alt="logo-apliko"></a>
                        </figure>
                        <ul style="padding-right:80px;">
                            <li>
                                <a class="links" href="#" id="about-link" data-menu="about">
                                    esto es apliko
                                </a>
                            </li>
                            <li>
                                <a class="links" href="#" id="do-link" data-menu="do">
                                    esto hacemos
                                </a>
                            </li>
                            
                            <li>
                                <a class="links" href="#" id="our-apps-link" data-menu="our-apps">
                                    nuestras apps
                                </a>
                            </li>
                            <li>
                                <a class="links" href="#" id="people-link" data-menu="people">
                                    para personas
                                </a>
                            </li><li>
                                <a class="links" href="#" id="company-link" data-menu="company">
                                    para empresas
                                </a>
                            </li>
                            <!--<li class="hidden" >
                                <a class="links" href="#" id="people-link" data-menu="people">   
                                    para personas
                                </a>
                            </li>
                            <li class="hidden" >
                                <a class="links" hsref="#" id="company-link" data-menu="company">  
                                    para empresas
                                </a>    
                            </li>-->
                            <li>
								<a class="links" href="#" id="trabajo-link" data-menu="trabajo" >trabaje con nosotros</a>
							</li>
                            <li><a  class="links" href="#" id="contactenos-link" data-menu="contactenos" >contáctenos</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <!--<div id="entities-contend-head" >
                    <ul>
                        <li><img src="images/flecha_izq_indicador.svg"></li>
                        <li>
                            <a class="links" href="#" data-menu="people-home">
                                <img src="images/Bot_Sobre_Personas.png">
                            </a>                            
                        </li>
                        <li>
                            <a class="links" href="#" data-menu="company-home">
                                <img src="images/Bot_Sobre_Empresas.png">
                            </a>
                        </li>
                        <li><img src="images/flecha_der_indicador.svg"></li>
                    </ul>
                </div>-->
                <div id="banner">
                    <div class="slider slider-reservas" id="">
                        <ul class="slides">
                       
                            <li>
                                <img src="images/Banner01.svg">
                            </li>
                            <li>
                                <img src="images/Banner02.svg">
                            </li>
                            <li>
                                <img src="images/Banner03.svg">
                            </li>
                            <li>
                                <img src="images/banner04.svg">
                            </li>
                            <li>
                                <img src="images/banner05.svg">
                            </li>
                                              
                      </ul>
                </div>
                </div>
                <div id="members">
                	<object type="image/svg+xml" data="images/footer ipad logos.svg" style="top:-204px;left:210px;position:absolute;">Your browser does not support SVG</object>
                    <!--<ul>
                        <li><img src="images/google_play.png"></li>
                        <li><img src="images/appstore.svg"></li>
                        <li><img src="images/USB_Cable.svg"></li>
                        <li><img src="images/alliance_logo_color.svg"></li>
                        <li><img src="images/vive_digital_colombia.svg"></li>
                    </ul>-->
                </div>
            </div>
        </header>
        
        <section style="margin-top:100px" >
            <article id="about" class="section" style="padding-bottom:150px;width:850px; margin:auto">
                <figure class="about-apliko">
                    <img src="images/estoesaplikotitulo.svg" alt="esto es aplico">
                    
                </figure>
                <figure class="infografia">
                    <img src="images/infograma.svg" alt="infograma apliko">
                </figure>
                <div class="infografia">
                    <p>Apliko es una fábrica que se especializa en crear aplicaciones (apps) para ser usadas en smartphones, tablets y computadores.</p>
                    <p>Es una fábrica porque allí se materializan las ideas de las personas y de las empresas, para convertirlas en apps disponibles en los mercados.</p>
                    <p>Apliko no es solo desarrollo de apps, es CREACION de apps. Asesoramos, diseñamos, estructuramos, desarrollamos y comercializamos las aplicaciones.</p>
                    <p>Apliko integra una larga historia de experiencia de más de 10 años, creando y desarrollando soluciones para usuarios de telefonía móvil. El equipo de Apliko ha participado en la evolución tecnológica de los dispositivos móviles, creando soluciones a través de sistemas de audio respuesta (IVR), de mensajería de texto (SMS), de WAP, de software en Java y ahora a través de Apps para smartphones y tablets. Nuestro equipo de trabajo está conformado por Ingenieros expertos en tecnología y diseño de soluciones móviles, Diseñadores Gráficos expertos en diagramación y usabilidad web, Programadores de software expertos en desarrollo de apps, Ejecutivos expertos en desarrollo de negocios y mercadeo digital, y Gerentes de Proyectos expertos en gestión y desarrollo.</p>
                    <p>Aplico nace con el propósito de integrar a la comunidad donde personas, empresas y desarrolladores de software, tienen la oportunidad de particpar activamente en la creación, uso y ganancia de las apps.</p>
                </div>
                <div id="dolink" >
                </div>
                
            </article>
            
        </section>  
        <section class="section">
        	<article id="do" class="section">
                
                <figure id="do-this">
                    <img src="images/tituloestohacemos.svg" alt="Esto hacemos">
                </figure>
                <div id="do-first">
                    <ol style="margin-top:30px">
                        <li style="margin-left:185px;">

                            <h2>1. asesoramos</h2>
                            <p style="width:310px;">Tomamos la idea de la persona o la necesidad de la empresa y proyectamos la app técnica, funcional y económicamente.</p>
                        </li>
                        <li style="margin-top:35px;margin-left:185px;">
                            <h2>2. diseñamos uso</h2>
                            <p style="width:310px;">Estructuramos su funcionalidad, planeamos la arquitectura de navegación y aplicamos técnicas de usabilidad.</p>
                        </li>
                        <li style="margin-top:45px;;margin-left:185px;">
                            <h2>3. diseñamos apariecia</h2>
                            <p style="width:310px;">Creamos todos los componentes gráficos entorno a la app de tal forma que sea agradable y amigable.</p>
                        </li>
                        
                    </ol>
                    <figure style="float:right">
                        <img src="images/pictos_ascensor.svg" alt="">
                    </figure>
                </div>
                <div id="do-second" style="margin-top:130px;">
                    <figure>
                        <img src="images/pictos_ascensor2.svg" alt="">
                    </figure>
                    <ol>
                        <li>
                            <h2>4. desarrollamos</h2>
                            <p >Programamos el software y creamos las conexiones a bases de datos o a información de terceros.</p>
                        </li>
                        <li>
                            <h2>5. activamos</h2>
                            <p>Realizamos pruebas de calidad y activamos la app en los respectivos stores para que pueda ser descargada por el público en general.</p>
                        </li>
                        <li>
                            <h2>6. Promocionamos</h2>
                            <p>Diseñamos e implementamos el plan de promoción y mercadeo que requiera la app.</p>
                        </li>
                        <li>
                            <h2>7. gestionamos</h2>
                            <p>Administramos la descargas, uso y actuaización de la app, para recomendar e implemetar mejoras.</p>
                        </li>
                        
                    </ol>
                </div>
            </article>
            <article id="apps">
                <h2>Creamos 2 clases de apps</h2>
                <div class="apps" style="margin-left:70px;">
                    <h3>Apps Nativas</h3>
                    <p>Se desarrollan en el lenguaje propio de cada sistema operativo.</p>
                    <p>Disponibles para descargar e instalar.</p>
                    <p>Funciona en dispositivos que usen el sistema operativo para el cual se desarolla.</p>
                    <div id="plataformas">
                    <figure>
                        <object type="image/svg+xml" data="images/appstores.svg"></object>    
                    </figure>
                    
                    <!--<figure>
                        <object type="image/svg+xml" data="images/android logo.svg">Your browser does not support SVG.</object>
                        <br>
                        <object type="image/svg+xml" data="images/google_play.png" style="width:130px">Your browser does not support SVG</object>
                    </figure>
                    <figure>
                        <object type="image/svg+xml" data="images/apple logo.svg">Your browser does not support SVG</object>
                        <br>
                        <object type="image/svg+xml" data="images/appstore.svg" style="width:130px">Your browser does not support SVG</object>
                        
                    </figure>
                    <figure>
	                    <object type="image/svg+xml" data="images/winlogo.svg">Your browser does not support SVG</object>
                    	<br>
                        <object type="image/svg+xml" data="images/winappstore.svg" style="width:130px">Your browser does not support SVG</object>
                    </figure>-->
                    </div>
                    
                    
                </div>
                <div class="apps" style="margin-left:50px;">
                    <h3>Web Apps</h3>
                    <p>Se desarollan en ambiente web y se utilizan desde el navegador desl dispositivo.</p>
                    <p> No se descargan ni se instalan. </p>
                    <p> Funcionan en cualquier dispositivo que tenga navegador para internet. </p>
                    <figure>
                        <img src="images/Webapp.svg" alt="">
                    </figure>
                </div>
                <div id="our-appslink" >
                </div>
            </article>
        </section>
        
        <section id="our-apps"  class="section" style="padding-top:100px">
            <figure>
                <img src="images/titulonuestrasapps.svg" alt="nuestras apps">
                <figcaption></figcaption>
            </figure>
        </section> 
        <section>
            <div id="people"  class="section">
                <article>
                    <figure>
                        <img src="images/tituloparapersonas.svg" alt="para personas">
                    </figure>
                    <h2>Compartenos<br> tus ideas y gana dinero con nosotros</h2>
                    <p>En apliko queremos escuchar tus ideas , queremos convertilas en apps y queremos compartirte las utilidades que estas generen.</p>
                    <p style="color:#037CC7; font-weight:bold;">Así funciona:</p>
                    <p class="margin">si tienes una idea de app y quisieras verla en el mercado,o si tienes una oportunidad de negocio,compartelas con nosotros.</p>
                    <p>En Apliko nos encargamos de evaluar tu idea con la mayor confidencialidad y profesionalismo, lo unico que debes hacer es enviarnos una breve descripcion y potencial que le hayas visto.</p>
                    <a class="button" href="">
                        <span>Presenta tu idea aquí</span>
                    </a>

                </article>
                <figure class="padding">
                    <img src="images/elcerebrito.svg" alt="idea" style="width:400px; padding-left:50px;">
                </figure>
                <figure class="bottom">
                    <!--<img src="images/video.jpg" alt="conoce el proceso  " style="margin-left:-250px; cursor:pointer">-->
                    <a class="swipebox-video" rel="vimeo" href="https://www.youtube.com/watch?v=hOspzRjJAcw"><img src="images/video.jpg" alt="conoce el proceso  " style="margin-left:-250px; cursor:pointer"></a>
                </figure>
                <article class="gray">
                    <p>La idea de app la evaluamos integralmente, miramos que sea viable su desarollo técnico, que no tenga ninguna restricción y que tenga potencial comercial. </p>
                    <p>Si tu idea es viable y tiene capacidad de generar ingresos económicos, ¡la desarrollaremos!, si no, permitiremos que el publico en general invierta en su desarollo.</p>
                    <p>Cuando esté desarrollada, nos encargaremos de comercializarla y ofrecerla al mercado que bien puede ser al público en general (stores) o a la empresas. </p>
                    <p>Si la App produce ingresos económicos, te compartiremos parte de las utilidades, así ganas tú por la gran idea y ganamos nosotros por desarrollarla y comercializarla.</p>
                
                </article>
                <div id="footer-people">
                    <a class="button" href="">
                        <span>Conoce el proceso completo aquí</span>
                    </a>
                    <a class="button" href="">
                        <span>Terminos y condiciones para presentacion de ideas</span>
                    </a>
                    <figure>
                        <img src="images/cierre.svg" alt=" ">
                    </figure>
                </div>
            </div>
        </section>
        <!--<section id="company"  class="section">
            <figure>
                <img src="images/tituloparaempresas.svg" alt="Para empresas">
            </figure>
            <p></p>
            <p></p>
        </section>-->
		<section id="company" align="center" class="section">
            <div   class="section" style="padding-bottom:100px">
                <figure class="titulo">
                    <img src="images/tituloparaempresas.svg" alt="para personas">
                </figure>
                <p class="p1">
                	La tecnologia asociada a los smartphones, tablets y computadores, abren un infinito mundo de posibilidades y herramientas donde el limite es la imaginacion
                </p>
                
                <p class="p2">
                 Las apps son una gran herramienta para las empresas porque pueden:
                </p>
                <div class="descripciones">
                <p class="desc1">
                	<label class="subtitulo">interactuar </label><br/>
                    Mejorar la interaccion con los clientes de forma rapida y eficiente
                </p>
                <p class="desc2">
                	<label class="subtitulo"> Fidelizar </label></br>
                    Aumentar la base de clientes, conocerlos mejor y fidelizarlos
                </p>
                <p class="desc3">
                	<label class="subtitulo"> Posicionar</label></br>
                    Mejorar la presencia y recordación de marca, crear nuevos canales de información
                </p>
                <p class="desc4">
                	<label class="subtitulo" style="margin-left:0px;"> Innovar </label></br>
                    Crear nuevos negocios, realizar promociones directas y aumentar las ventas
                </p>
                <p class="desc5">
                	<label class="subtitulo" style="margin-left:0px;"> Ganar </label><br/>
                    Generar nuevos ingresos a partir de nuevos productos y servicios
                </p>
                <p class="desc5">
                	<label class="subtitulo" style="margin-left:0px;"> controlar </label><br/>
                    Optimizar el control del personal y  las actividades en campo
                </p>
                </div>
                
                <div id="footer-company" style="margin-top:130px">
                	<label>Para las empresas creamos dos clases de apps</label><br/>
                    
                    <div id="appExclusivas">
                    	<h3>Apps exclusivas:</h3>
                    	<p> Se crean por requerimientos de la empresa y son para su uso exclusivo. Todo entorno al proceso de creacion de la app se hace en conjunto con la empresa.</p>
                        <img src="images/appsexclusivas.svg" />
                    </div>
                    
                    <div id="appCompartidas">
                    <h3>Apps compartidas:</h3>
                    <p> Se crean para atender las necesidades o demandas de un sector en particular y pueden ser utilizadas por varias empresas.</p>
                    <img src="images/appscompartidas.svg" style="margin-left:50px" />
                    </div>
                    <br><br>
                    <div id="mensaje">
                    	<div style="background-color:#A9E1F7;display:inline-block;margin-left:-5px;margin-top:75px;width:905px;height:200px">
                           <p> Eso que necesita su empresa lo podemos convertir en una app, compartanos su idea, del resto nosotros nos ocupamos</p>
                           </div>
                        <a class="button">
                            Contactenos
                        </a>
                            <!--<img src="images/botcontactenos.svg" />-->
                    </div>
                    
                    
                </div>
                
        </section>
        <section id="trabajo" align="center" class="section" style="padding-top:100px">
            <div   class="section" >
                <figure class="titulo">
                    <img src="images/titulotrabaje.svg" alt="Trabaje con nosotros">
                </figure>
                
                <div class="descripcion">
                    	<img src="images/pictostrabaje.svg" >
                    <p>Si eres desarrollador de apps o diseñador gráfico, te gusta el trabajo como freelance y estás interesado en hacer parte de nuestro equipo de creación de apps, déjanos tus datos y nos comunicaremos contigo
                    </p>
                </div>
                
                <div class="footer-trabajo">
                    	<!--<img src="images/contactenostrabaje.svg" style="vertical-align:top; float:left">-->
                        <a class="button" style="vertical-align:top; float:left; width:350px; text-align: center">
                            Conctactenos
                        </a>
                    	<img src="images/poleastrabaje.svg" style="float:left;">
                </div>
                    
                    
                </div>
                
        </section>
        <section id="contactenos" class="section" style="padding-top:100px">
            <div   class="section" >
                <figure class="titulo">
                    <img src="images/titulocontactenos.svg" alt="Contactenos">
                </figure>
                
                <div class="descripcion">
                    <form action="mailto:info@apliko.co" id="frmContactenos" method="post" enctype="text/plain">
                    	 
                    	<div id="fila1">
                        	<label> Nombres y apellidos *</label>
                            <input type="text" id="nombres" name="nombres" />
                        </div>
                        <div id="fila1">
                        	<label>Empresa </label>
                            <input type="text" id="empresa" name="empresa" />
                        </div>
                        <div id="fila1">
                        	<label>Cargo </label>
                            <input type="text" id="cargo" name="cargo" />
                        </div>
                        <div id="fila2">
                        	<label>Lugar de residencia (pais/ ciudad) *</label>
                            <input type="text" id="residencia" name="residencia" />
                        </div>
                        <div id="fila2">
                        	<label>Email * </label>
                            <input type="text" id="email" name="email" />
                        </div>
                        <div id="fila2">
                        	<label>Telefono Celular *</label>
                            <input type="text" id="telefono" name="telefono" />
                        </div>
                        <div id="fila3">
                        	<label>Motivo de contacto (maximo 10 renglones)*</label>
                            <textarea id="motivo" name="motivo" rows="10">
                            
                            </textarea>
                        </div>
                        <div id="autorizacion">
                        	<p>Autorizo a Apliko a enviarme informacion relacionada con su actividad, a mi telefono y correo electronico</p>
                            	<input type="checkbox" id="acepto" name="acepto" /> Acepto
                        </div>
                        <div id="fila4">
                        	<input type="submit" class="contactenos-enviar" value="" />
                        </div>
                        <div id="footer-contactenos">
                            <img src="images/poleascierrecontacto.svg" />
                        </div>
                    </form>
                </div>
               
                    
                    
                </div>
                
        </section>
        <section id="ideas" class="section" style="padding-top:100px">
            <div   class="section" >
                <figure class="titulo">
                    <img src="images/tituloformideas.svg" alt="Contactenos">
                </figure>
                
                <div class="descripcion">
                    <form action="mailto:ideas@apliko.co" id="frmIdeas" method="post" enctype="text/plain">
                    	<div id="subtitulo"><h4>DATOS PERSONALES</h4></div> 
                    	<div id="fila1">
                        	<label> Nombres y apellidos * </label>
                            <input type="text" id="nombres1" name="nombres1" />
                        </div>
                        <div id="fila2">
                        	<label>Lugar de residencia (pais/ciudad) * </label>
                            <input type="text" id="residencia1" name="residencia1" />
                        </div>
                        <div id="fila1">
                        	<label>Email * </label>
                            <input type="email" id="email1" name="email1" />
                        </div>
                        <div id="fila2">
                        	<label>Teléfono celular *</label>
                            <input type="text" id="telefono1" name="telefono1" />
                        </div>
                        <div id="fila2">
                        	<label>Ocupacion * <p style="font-size:10px">(empleado, independiente, pensionado, estudiante, sin ocupacion) </p></label>
                            
                            <input type="text" id="ocupacion" name="ocupacion" />
                        </div>
                        <br>
                        <div id="fila2">
                        	<label>Profesion </label>
                            <input type="text" id="profesion" name="profesion" />
                        </div>
                        <div id="fila2">
                        	<label>Edad</label>
                            <input type="number" id="edad" name="edad"
                        </div>
                        <div id="fila2">
                        	<label>Tipo doc de identidad *</label>
                            <input type="text" id="tipodocumento" name="tipodocumento" />
                        </div>
                        <div id="fila2">
                        	<label>Numero doc de identidad *</label>
                            <input type="text" id="documento" name="documento" />
                        </div>
                        
                        <div id="subtitulo"><h4>INFORMACION DE LA IDEA</h4></div> 
                    	<div id="fila1">
                        	<label> Nombre de la app (maximo dos palabras)* </label>
                            <input type="text" id="nombreapp" name="nombreapp" />
                        </div>
                        <div id="fila3">
                        	<label>Objetivo de la app (max 10 renglones* </label>
                            <textarea id="objetivo" name="objetivo" rows="10">
                            
                            </textarea>
                        </div>
                        <div id="fila2">
                        	<label>Cual crees que seria el perfil del usuario? Quien lo usaria?</label>
                            <input type="text" id="perfilUsuario" name="perfilUsuario" />
                        </div>
                        <br>
                        <div id="fila2">
                        	<label>Como crees que podria generar ingresos económicos</label>
                            <input type="text" id="ingresoseconomicos" name="ingresoseconomicos" />
                        </div>
                        <br>
                        <div id="fila2">
                        	<label>Existen apps similares en el mercado? Cules? *</label>
                            <input type="text" id="appSimilares" name="appSimilares" />
                        </div>
                        <div id="fila3">
                        	<label>Informacion adicional</label>
                            
                            <textarea id="informacionadicional" name="informacionadicional" rows="10">
                            
                            </textarea>
                        </div>
                        <div id="autorizacion">
                        	<p>Acepto terminos y condiciones</p><br/>
                            <p>
                                <img src="images/botcontactenos.svg" />
                                <!--<a class="button" href="">
                                <span>Terminos y condiciones para presentacion de ideas</span>
                            </a>-->
                            </p>
                            Acepto<input type="checkbox" id="acepto1" name="acepto1"  style="width:50px"/><br>
                            <p>Certifico que los datos personales son verdaderos y autorizo a su verificacion</p>
                            Acepto<input type="checkbox" id="acepto2" name="acepto2" style="width:50px" /><br> 
                            <p>Autorizo a Apliko a enviarme inforación relacionada con su actividad, a mi telefono celular y correo electrónico</p>
                            Acepto<input type="checkbox" id="acepto3" name="acepto3" style="width:50px" /><br>
                        </div>
                        <div id="fila4" align="center">
                        	<!--<input type="submit" class="contactenos-enviar" value="Presentar idea" class="button" />-->
                            <input type="submit" value="Presentar idea" class="button" style="text-align:center;" />
                        </div>                    
                        </form>
                </div>
               
                    
                    
                </div>
                
        </section>
        
        <div class="footer">
            
        </div>
            <a href="#" class="scrollToTop"></a>

    </body>

       
    <!-- JavaScript -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.swipebox.js" type="text/javascript"></script>
    <script type="text/javascript">
            ( function( $ ) {

                /* Basic Gallery */
                $( '.swipebox-video' ).swipebox();

                
            } )( jQuery );
	</script>
</html>