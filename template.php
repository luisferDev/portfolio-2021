<?php 

/* 
 ----------------------------------------------------------------
 HEADER NAV
 ------------------------------------------------------------------
*/
 function nav() {?>

    <header>
        <div class="container-fluid">
            <nav id="navbar" class="menu">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row main-row">
                            <div class="col-md-2 logo">
                                <a href="#headerintro"><img src="images/logo-luisfer.png" alt="Logo Luis Marín Web Desginer"></a>
                            </div>
                            <div class="col-md-10">
                                <ul class="nav-links">
                                    <li><a href="#about">About Me</a></li>
                                    <li><a href="#skills">Skills</a></li>
                                    <li><a href="#tools">Tools</a></li>
                                    <li><a href="#development">Portfolio</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 burger">
                                <div class="line1"></div>
                                <div class="line2"></div>
                                <div class="line3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<?php

}
   
    
     
/* 
 ----------------------------------------------------------------
 HEADER HERO
 ------------------------------------------------------------------
*/
 function hero() {?>

        <section id="headerintro" class="hero-header">
            <div class="container hero-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="hero-title fadeIn">
                            <h1 class="big">Welcome</h1>
                            <h2 class="big">a mi portfolio</h2>
                            <h3 class="text-white">soy Desarrollador Front-End</h3>
                        </div>
                    </div>
                </div>
                <div class="more-box fadeIn">
                    <a href="#about" class=""><span class=""></span></a>
                </div>
            </div>
            <img src="images/hero-bg.png" class="slidebg" alt="">
            <img src="images/hero-headphone.png" class="headphones" alt="">
            <img src="images/hero-keyboard.png" class="keyboard" alt="">
            <a href="#about"><img src="images/hero-mouse.png" class="mouse" alt=""></a>
        </section><!-- /.Cierre de HERO -->
<?php

}

/*
 ----------------------------------------------------------------
 SECTION ABOUT ME
 ------------------------------------------------------------------
*/
 function about() {?>

		<section id="about" class="st-about container-fluid">
            <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                <div class="col-md-3">
                    <img src="images/about-img.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9 container-inner about-col2">

                    <div class="about-title">
                        <h2 class="mid">Un Developer<br>Front-End</h2>
                        <h2 class="mid typewrite-txt"><span></span></h2>
                    </div>

                    <p>He pasado los últimos 4+ años en diferentes áreas del universo IT. Al principio en el mundo del diseño digital, y en la actualidad con unos 3+ años como <strong>Desarrollador Front-End</strong> con una buena relación con la programación Back.</p>

                    <p><strong>La integración web</strong>, me parece sumamente interesante, porque es una dimensión en donde el aprender,  nunca acaba. Lo de hacer algo tan visual, tan técnico y tan consumible como los productos web, me mantienen en un punto de encuentro con mis ganas de comunicar (soy periodista de carrera), y las tecnologías.</p>
                    
                    <p>En la actualidad, mi tiempo lo dedico a investigar, diseñar, hacer prototipos y codificar, porque ya sea un proyecto para hacer una app, una web, piezas de <em>marketing visual</em> como banners dinámicos, es lo esperado en mi "<em>to do list</em>", pero siempre hay un <em>twist</em>, que no me deja indiferente y me mantiene con mi objetivo activo: desarrollar y que mi código sea limpio.</p>

                </div>
            </div>
        </section>

<?php

}

/*
 ----------------------------------------------------------------
 SECTION SKILLS
 ----------------------------------------------------------------
*/
 function skills() {?>

    <section id="skills" class="st-skills container-fluid bg-white" data-aos="fade-right" data-aos-easing="linear"
            data-aos-duration="200" data-aos-delay="200">
            <div class="container">
                <h2 class="mid">Mi enfoque<br>& Skills</h2>
                    <!-- ROW 1-->
                    <div class="row">
                        <!-- RESPONSIVE -->
                        <div class="col-12 col-lg-6 card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img">
                                        <img src="images/skills-responsive-img.png" class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6 bg-color-aquamarine">
                                    <div class="info">
                                        <h3>Responsive</h3>
                                        <p>Adaptabilidad y <em>cross-browsing</em>, siempre presentes en mis <em>layouts</em> desde su creación.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /. FIN RESPONSIVE -->

                        <!-- WEB SPARKLER -->
                        <div class="col-12 col-lg-6 card">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img"><img src="images/skills-sparkler-img.png" class="img-fluid"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="col-md-6 bg-color-mimosa">
                                    <div class="info">
                                        <h3>Web-Sparkler</h3>
                                        <p>Entrego páginas dinámicas, visuales y modernas, según el requerimiento del proyecto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /. FIN WEB SPARKLER -->
                    </div><!-- fin ROW 1-->

                    <!-- ROW 2-->
                    <div class="row">
                        <!-- SCRUM -->
                        <div class="col-12 col-lg-6 card">
                            <div class="row flex-column-reverse flex-md-row">
                                <div class="col-md-6 bg-color-night">
                                    <div class="info">
                                        <h3>Scrum Agile</h3>
                                        <p>Acostumbrado a la metodología ágil de desarrollo en equipo y cumplimiento con los <em>timmings</em>.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img"><img src="images/skills-agile-img.png" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /. FIN SCRUM -->
                        <!-- UX UI -->
                        <div class="col-12 col-lg-6 card">
                            <div class="row flex-column-reverse flex-md-row">
                                <div class="col-sm-12 col-md-6 bg-color-orange">
                                    <div class="info">
                                        <h3>UX & UI</h3>
                                        <p>Mi enfoque está en la facilidad y aprovechamiento de la web por el usuario y por el cliente.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img"><img src="images/skills-ux-ui-img.png" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div><!-- /. FIN UX UI -->
                    </div><!-- fin ROW 2-->
            </div>
        </section>

<?php

}


/*
 ----------------------------------------------------------------
 SECTION TOOLS
 ----------------------------------------------------------------
 */
 function tools() {?>
 
   <section id="tools" class="container">
            <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
                <div class="col-md-12">
                    <h2 class="mid">Herramientas <br>& Lenguajes</h2>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <!-- FLEXSLIDER -->
                            <div class="flexslider">
                                <ul class="slides">
                                    <!-- SLIDE FRONTEND -->
                                    <li>
                                        <div class="row">
                                            <!-- Inner Boxes-->
                                            <div class="col-md-5 bg-color-pinkdark">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h3>Front-End</h3>
                                                    </div>
                                                    <div class="col-12">
                                                        <img src="images/slider/img-front.png" class="tools-header" alt="Herramientas Front-End" />
                                                    </div>
                                                </div>
                                            </div><!-- /. Fin Inner Boxes-->

                                            <!-- Logos -->
                                            <div class="col-md-7 bg-white">
                                                <img src="images/slider/img-logos-frontend.png" class="logos-tools"
                                                    alt="Front-End de uso" />
                                            </div><!-- /. Fin Logos -->
                                        </div>
                                    </li><!-- /. FIN SLIDE FRONTEND -->


                                    <!-- SLIDE BACKEND -->
                                    <li>
                                        <div class="row flex-column-reverse flex-md-row">
                                            <!-- Logos -->
                                            <div class="col-md-7 bg-white">
                                                <img src="images/slider/img-logos-backend.png" class="logos-tools"
                                                    alt="Herramientas Back-end" />
                                            </div><!-- /. Fin Logos -->

                                            <!-- Inner Boxes-->
                                            <div class="col-md-5 bg-color-pinkdark">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="images/slider/img-back.png" class="tools-header" alt="Back-End de uso" />
                                                    </div>
                                                    <div class="col-12">
                                                        <h3>Back-End</h3>
                                                    </div>
                                                </div>
                                            </div><!-- /. Fin Inner Boxes-->
                                        </div>
                                    </li><!-- /. FIN SLIDE BACKEND -->


                                    <!-- SLIDE CMS -->
                                    <li>
                                        <div class="row">
                                            <!-- Inner Boxes-->
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="images/slider/img-cms.png" class="tools-header" alt="CMS de uso" />
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <h3>Gestores<br>de Contenido</h3>
                                                    </div>
                                                </div>
                                            </div><!-- /. Fin Inner Boxes-->

                                            <!-- Logos -->
                                            <div class="col-md-7 bg-color-mimosa">
                                                <img src="images/slider/img-logos-cms.png" class="logos-tools"
                                                    alt="Herramientas CMS" />
                                            </div><!-- /. Fin Logos -->
                                        </div>
                                    </li><!-- /. FIN SLIDE CMS -->


                                    <!-- SLIDE DISEÑO -->
                                    <li>
                                        <div class="row flex-column-reverse flex-md-row">
                                            <!-- Logos -->
                                            <div class="col-md-7">
                                                <img src="images/slider/img-logos-disseny.png" class="logos-tools"
                                                    alt="Harramientas de Diseño" />
                                            </div><!-- /. Fin Logos -->

                                            <!-- Inner Boxes-->
                                            <div class="col-md-5 bg-color-greysl">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="images/slider/img-disseny.png" class="tools-header" alt="Programas de Diseño de uso" />
                                                    </div>
                                                    <div class="col-12">
                                                        <h3>Diseño & Media</h3>
                                                    </div>
                                                </div>
                                            </div><!-- /. Fin Inner Boxes-->
                                        </div>
                                    </li><!-- FIN SLIDE DISEÑO -->


                                    <!-- SLIDE IT TOOLS -->
                                    <li>
                                        <div class="row">
                                            <!-- Inner Boxes-->
                                            <div class="col-md-5 bg-color-night">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img src="images/slider/img-it.png" class="tools-header" alt="Programas de IT de uso" />
                                                    </div>
                                                    <div class="col-12">
                                                        <h3>Helpers</h3>
                                                    </div>
                                                </div>
                                            </div><!-- /. Fin Inner Boxes-->

                                            <!-- Logos -->
                                            <div class="col-md-7">
                                                <img src="images/slider/img-logos-it.png" class="logos-tools"
                                                    alt="Herramientas de IT" />
                                            </div><!-- /. Fin Logos -->
                                        </div>
                                    </li><!-- FIN SLIDE IT TOOLS -->
                                </ul>
                            </div><!-- /. FIN FLEXSLIDER -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
<?php 

}


/*
 ----------------------------------------------------------------
 LOGIN
 ----------------------------------------------------------------
 */
 function login() {?>
<div id="development"><br></div>
<section id="login" class="st-login" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="200" data-aos-delay="200">
            
            <div class="row  container">
            <?php if(empty($_SESSION['user'])) {?>
                <div class="col-md-5">
                
                    <div class="">
                        <h2 class="mid">Proyectos<br>& Prototipos</h2>
                        <p>Debes acceder con el usuario y clave de invitado, para poder visualizar mis productos
                            finales. Los <em>royalties</em> pertenecen a mis clientes como bien conocemos los
                            desarrolladores, y por ende, aquí detallo una muestra de los trabajos autorizados
                            salvaguardando mi autoría intelectual.</p>
                    </div>
        
                    <button id="open" class="btn btn--border--black">Accede como Guest</button>
                    
                </div>
            <?php }else{?>
                <div class="col-md-5">
                    <div class="">
                        <h2 class="mid">¡Genial!<br>Ya puedes ver el 100%</h2>
                        <p>Gracias por querer indagar un poco más en lo que puedo hacer, ten presente que conversando, podré dar más detalles, pero adelanto que soy un curioso y me gusta siempre la actualización dentro del Desarrollo Web. Siempre hay oportunidad para aprender algo más.</p>
                    </div>
                    <button id="open" class="btn btn--border--black" type='submit' name='logout'>Salir</button>
                </div>
            <?php } ?>

                <div class="col-md-7" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="600">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/mobile-lock.png" class="mob" alt="">
                        </div>
        
                        <div class="col-md-6">
                            <div id="pr">
                                <div class="form-toogle">
                                    <?php if(empty($_SESSION['user'])) {?>
                                    <form method="post" id="formlog" action="/#development">
                                        <input name="user" type="text" placeholder="Username" size="30">
                                        <input name='password' type="password" placeholder="Password" size="30">
                                        <input class="btn btn--border--black" type="submit" value="Entrar" name="login">
                                    </form>
                                    <?php }else{?>
                                	<p class="form-message">Vuelve cuando quieras</p>
                					<form method='post'>
                						<input class="btn btn--main log-out" type='submit' name='logout' value='Logout'><br />
                					</form> 
                                    <?php } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
<?php 

}




/*
----------------------------------------------------------------
SECTION WORKS 
----------------------------------------------------------------
*/
 function works() {
    if(!empty($_SESSION['user'])){
     ?>
    
	
    <section id="works" class="st-works container-fluid" data-aos="fade-up" data-aos-easing="linear"
            data-aos-duration="200" data-aos-delay="200">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row ">
                        <!----------------------------------------- 
                                TAB NAV 
                            -------------------------------->
                        <div class="col-md-3 bg-color-greysl">
                            <div class="row container">
                                <!-- PESTAÑAS DE LA TABLA -->
                                <div class="col-4 col-md-12">
                                    <div class="tabimg">
                                        <img src="images/tab-photo-luis-marin.png" class="" alt="">
                                    </div>
                                </div><!-- /. FIN PESTAÑAS DE LA TABLA -->

                                <!-- PESTAÑAS DE LA TABLA -->
                                <div class="col-8 col-md-12">
                                    <div class="tabnav">
                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                                href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                aria-selected="true">

                                                <h3 class="mid line">ApiRest</h2>

                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                aria-selected="false">

                                                <h3 class="mid line">Webs</h2>

                                            </a>
                                            <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                aria-selected="false">

                                                <h3 class="mid line">App | MVC</h2>

                                            </a>
                                        </div>
                                    </div>
                                </div><!-- PESTAÑAS DE LA TABLA -->
                            </div>
                        </div><!-- /. FIN TAB NAVA -->

                        <!----------------------------------------- 
                                TAB CONTENT 
                            -------------------------------->
                        <div class="col-md-9 bg-white">
                            <div class="row container">
                                <div class="col-md-12">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <!-- TAB PANE 1 -->
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                            aria-labelledby="v-pills-home-tab">
                                            <!----------------------------------------- 
                                            Row Container | API
                                        -------------------------------->
                                            <div class="row content-txt">
                                                <div class="col-md-8">
                                                    <div class="">
                                                        <h2><em>Sample</em> & Simple</h2>
                                                        <p>Con <code>Javascript</code>, <code>HTML5</code> y algo de<code>PHP</code>, he podido desarrollar este ejemplo de <code>API</code> sencilla de código abierto. Puedo manejar ficheros <code>JSON</code> o <code>XML</code> adicionalmente para hacer este tipo de aplicaciones distribuidas. Lo dicho, soy Front, pero no temo a ir más allá con el código.</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 d-flex justify-content-md-end align-items-center">
                                                    <div class="">
                                                        <span class="pseudolink btn btn--border" onclick="linkL()">Visita la API</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <!-- CAJA DE LA API -->
                                                    <div id="api" class="api-search container-fluid" onclick="linkL()">
                                                        <div class="row container">
                                                            <div class="col-md-12 hero">
                                                                <div class="row">
                                                                    <div class="col-lg-7 col-f">
                                                                        <div class="api-title">
                                                                            <h1>
                                                                                <span class="h1">API</span>
                                                                                <span class="h2">Open Source</span>
                                                                                <span class="h3">NASA IMGs</span>
                                                                            </h1>
                                                                        </div>
                                                                        <div class="caja">
                                                                            <div class="message">
                                                                                <p>Indica qué quieres buscar y pulsa el botón. Palabras en inglés preferiblemente, porque... ¡Es La Nasa <em>you know</em>!</p>
                                                                                <span>Se ha autolimitado a 30 resultados</span>
                                                                            </div>
                                                                            <div class="options">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <input type="text" id="buscar">
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <button type="button" class="btn" id="boton">Buscar</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <div class="void"></div>
                                                                    </div>
                                                                </div>
                                                                <img src="images/api/bg-still.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div><!-- /. FIN CAJA DE LA API -->
                                                </div>
                                            </div><!-- /. FIN Row Container -->
                                        </div><!-- /. FIN TAB PANE 1-->


                                        <!-- TAB PANE 2 -->
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab">

                                            <!----------------------------------------- 
                                            Row Container | WEBSITES 
                                        -------------------------------->
                                            <div class="row">
                                                <!-- Col Container -->
                                                <div class="col-md-12">
                                                    <!-- Row Main -->
                                                    <div class="row">

                                                        <!-- Column Modals -->
                                                        <div class="col-md-12">
                                                            <!-- Row 1 -->
                                                            <div class="row effect-magazine">

                                                                <!-- Modal 1 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio1" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/museu-03.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/museu-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/museu-01.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">

                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Museo Olímpico de Barcelona</h3>
                                                                                            <p>En esta web desarrollé todo el Front, colaboré con el programador de Backend en PHP 7 para generar la app de compra-venta de Tickets.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkA()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio1" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/museu-03.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Museo Olímpico</h3>
                                                                                <p>Front 90% | Back 10%</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 1 -->

                                                                <!-- Modal 2 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio2" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/lighteyes-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/lighteyes-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/lighteyes-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Light Eyes</h3>
                                                                                            <p>Pagína web con el page builder <code>Elementor Pro</code> de Wordpress, y estilé todo el Front.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkB()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio2" rel="modal:open">
                                                                            <div class="img"><img
                                                                                    src="images/trabajos/lighteyes-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Light Eyes</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 2 -->


                                                                <!-- Modal 3 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio3" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/elcenador-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/elcenador-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/elcenador-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>El Cenador</h3>
                                                                                            <p>En este caso hice un entorno duplicable para la línea de restaurantes de la cadena Iberostar. En total fueron 8 duplicidades de restaurante, cambiando variables y poco código gracias al BEMMIT, aplicado para estas webs.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkC()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio3" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/elcenador-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>El Cenador</h3>
                                                                                <p>Front 95% | Back 5%</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->
                                                                </div><!-- /. Fin Modal 3 -->

                                                            </div><!-- /. Cierre Row 1 -->

                                                            <!-- Row 2 -->
                                                            <div class="row effect-magazine2">

                                                                <!-- Modal 4 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio4" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/construmat-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/construmat-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/construmat-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Construmat Expo</h3>
                                                                                            <p>Feria anual. Lanzamiento de la nueva web en Wordpress (anteriormente con Liferay). Se hizo todo de cero, con su correspondiente migración de bases de datos.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkD()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio4" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/construmat-02.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Construmat Expo</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 4 -->

                                                                <!-- Modal 5 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio5" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/impars-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/impars-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/impars-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Impars</h3>
                                                                                            <p>Una web demostrativa e informativa, que requería que las páginas se generasen como "Post". Desarrollé con Wordpress e hice uso de los "custom type fields" de principio a fin.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkE()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio5" rel="modal:open">
                                                                            <div class="img"><img
                                                                                    src="images/trabajos/impars-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Impars</h3>
                                                                                <p>Front 95% | Back 5%</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 5 -->


                                                                <!-- Modal 6 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio6" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/cataria-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/cataria-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/cataria-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Cataria</h3>
                                                                                            <p>Con el uso de Bemmit, quiero mostrar que esta web se deriva del entorno de Katagi, de manera modular y con las variables en <code>SCSS</code>, se pudo ejecutar esta web con mínimo tiempo invertido de producción (esta es un entorno de 8 duplicados como ejemplo).</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkF()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio6" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/cataria-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Cataria</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->
                                                                </div><!-- /. Fin Modal 6 -->

                                                                <!-- Modal 7 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio7" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/5elements-shop-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/5elements-shop-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/5elements-shop-03.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/5elements-shop-04.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>5Elements Shop</h3>
                                                                                            <p>Una línea de negocio que requería detalles de producto, cesta de compra, y pago vinculado a su cuenta. Todo el diseño, los desarrollé con el <em>page builder</em> "Elementor Pro", con un tema de hoja blanca llamado "hello elementor".
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkG()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio7" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/5elements-shop-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Shop 5 Elements</h3>
                                                                                <p>Front 90% | Back 10%</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->
                                                                </div><!-- /. Fin Modal 7 -->
                                                            </div><!-- /. Cierre Row 2 -->


                                                            <!-- Row 3 -->
                                                            <div class="row effect-magazine3">

                                                                <!-- Modal 8 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio8" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/portfolio-ultimatefitnessbootcampspain-img-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-ultimatefitnessbootcampspain-img-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-ultimatefitnessbootcampspain-img-03.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-ultimatefitnessbootcampspain-img-04.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Ultimate Fitness Bootcamp Spain</h3>
                                                                                            <p>Sistema de reservas. Desarrollé todo lo que se muestra en la web: sliders con Slider Revolution (wordpress), etiquetas, imagen de productos, refrescamiento del logo,etc.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkH()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio8" rel="modal:open">
                                                                            <div class="img"><img
                                                                                    src="images/trabajos/portfolio-ultimatefitnessbootcampspain-img-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Fitness Bootcamp</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 8 -->


                                                                <!-- Modal 9 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio9" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/fundacion-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/fundacion-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/fundacion-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Fundación Olímpica BCNA</h3>
                                                                                            <p>Página institucional de la Fundación, realizada en wordpress con tema en hoja blanca.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkI()">Visita la Web</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio9" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/fundacion-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Fundación Olímpica</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->
                                                                </div><!-- /. Fin Modal 9 -->

                                                                <!-- Modal 10 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio10" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/katagi-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/katagi-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/katagi-03.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>Katagi Restaurant</h3>
                                                                                            <p>Una propuesta de Bemmit, en el que se hizo uso de JS, HTML5, CSS y funcionalidades del <em>page builder</em> de Wordpress.</p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkJ()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio10" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/katagi-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>Katagi Restaurant</h3>
                                                                                <p>Front 95% | Back 5%</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->
                                                                </div><!-- /. Fin Modal 10 -->

                                                                <!-- Modal 11 -->
                                                                <div class="col-sm-3">
                                                                    <!-- Modal -->
                                                                    <div id="portfolio11" class="modal">
                                                                        <div class="modal-content">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <ul class="bxsliderModal">
                                                                                        <li><img src="images/trabajos/portfolio-5elementsuk-img-01.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-5elementsuk-img-02.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-5elementsuk-img-03.jpg" class="img-fluid" alt=""></li>
                                                                                        <li><img src="images/trabajos/portfolio-5elementsuk-img-04.jpg" class="img-fluid" alt=""></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-md-12 modal-info">
                                                                                    <div class="row">
                                                                                        <div class="col-md-8">
                                                                                            <h3>5Elements</h3>
                                                                                            <p>Sistema de <em>booking</em> y llamadas en directo. Desarrollé todo el front e incluso el diseño de la web UX UI.
                                                                                            </p>
                                                                                        </div>
                                                                                        <div class="col-md-4">
                                                                                            <span class="pseudolink btn btn--main_inverse" onclick="linkK()"> Visita la Web
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <!--/. Fin Modal -->

                                                                    <!-- Card -->
                                                                    <div
                                                                        class="overrides-style ih-item square colored effect3 bottom_to_top">
                                                                        <a href="#portfolio11" rel="modal:open">
                                                                            <div class="img">
                                                                                <img src="images/trabajos/portfolio-5elementsuk-img-01.jpg"
                                                                                    class="img-fluid" alt="img">
                                                                            </div>
                                                                            <div class="info">
                                                                                <h3>5elementsUk</h3>
                                                                                <p>Front-End</p>
                                                                            </div>
                                                                        </a>
                                                                    </div><!-- /. Fin Card -->

                                                                </div><!-- /. Fin Modal 11 -->

                                                            </div><!-- /. Cierre Row 3 -->

                                                        </div><!-- /. Cierre Column Modals -->

                                                        <!-- CONTENT TAB WEBS-->
                                                        <div class="row content-txt">
                                                            <div class="col-md-9">
                                                                <h2>Una muestra<br>de mis Trabajos</h2>
                                                                <p>Puedo trabajar desde código cero, bien dentro de los <code>CMS's</code> o piezas a medida. Soy un developer que cuento también con atención a los detalles, y que puedo trabajar de forma modular con el equipo de trabajo sin inconvenientes.</p>
                                                            </div>
                                                            <div
                                                                class="col-md-3 d-flex justify-content-md-center align-items-center">
                                                                <div class="">
                                                                    <span class="pseudolink btn btn--border"
                                                                        onclick="linkM()">Visita mi GIT</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- /. FIN CONTENT TAB WEBS-->
                                                    </div><!-- /. Cierre Row Main -->
                                                </div><!-- /. Col Container -->
                                            </div><!-- /. Cierre Row Container -->
                                        </div><!-- /. FIN TAB PANE 2-->


                                        <!-- TAB PANE 3 -->
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

                                            <!----------------------------------------- 
                                        Row Container | MVC APP
                                        -------------------------------->
                                            <!-- Row Container -->
                                            <div class="row content-txt">
                                                <div class="col-md-12">
                                                    <!-- Col Container -->
                                                    <div class="row d-flex justify-content-center align-items-center">
                                                        <div class="col-md-6">
                                                            <h2>Mi MVC<br>de cabecera</h2>

                                                            <p>Uso el patrón "<code>Modelo Vista Controlador</code>" desarrollado en este prototipo. En una formación de programación, este patrón me permitió comprender el funcionamiento de una app, sin <em>frameworks</em> y sin la versión front-end <em>"single app page"</em>. Quise ir a la fuente, al código nativo, directo a su raíz en <code>PHP</code>.</p>

                                                            <span class="pseudolink btn btn--border"
                                                                onclick="linkP()">Visita mi App</span>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <span class="pseudolink" onclick="linkP()"><img class="img-mob" src="images/appmvc.gif" alt=""></span>
                                                        </div>
                                                    </div><!-- /. Col Container -->
                                                </div>
                                            </div>
                                        </div><!-- /. FIN TAB PANE 3-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /. FIN TAB CONTENT -->
                    </div>
                </div>
                 <?=empty($_ENV['mensaje'])? "" : $_ENV['mensaje']?>
            </div>
        </section>
        <?php }?>    
<?php 

}
 


/*
 ----------------------------------------------------------------
 SECTION CONTACT 
 ----------------------------------------------------------------
 */
 function contact() {?>
	
    <section id="contact" class="st-contact container bg-color-aquamarine" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mid">¿Entonces...<br>un café para comenzar?</h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row d-flex justify-content-flex-center align-items-center">
                            <div class="col-md-6 d-flex justify-content-flex-center align-items-center">
                                <img class="img-cup" src="images/contact-taza.png" alt="">
                            </div>
                            <div class="col-md-6">
                                <p>Siempre es mejor poner propuestas sobre mesa, y más si esas opciones son proyectos interesantes, por ello, allí dejo mis contactos directos.</p>
                                
                                <div class="row cv-btn">
                                    <div class="col-md-6">
                                            <a class="btn btn--border--black" href="/descargas-pdf/cv_luis_marin.pdf" target="_blank">CV<br>Castellano</a>
                                    </div>
                                    <div class="col-md-6">
                                            <a class="btn btn--border--black" href="/descargas-pdf/resume-luis-marin.pdf" target="_blank">English<br>Resume</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /. Fin Container -->
            </section>
    
<?php 

}

/* ----------------------------------------------------------------
 FOOTER
 ------------------------------------------------------------------
*/
 function footer() {?>

<footer id="moreinfo" class="st-contact container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mid-reverse">¿Quieres saber más?</h2>
                    <div class="contact-content">
                        
                        <div class="contact-ico">
                            <span class="pseudolink" onclick="linkO()"><img class="ico-email" src="images/icon-email.png" alt=""></span>
                            <span class="pseudolink" onclick="linkN()"><img class="ico-linkedin" src="images/icon-linkedin.png" alt=""></span>
                            <span class="pseudolink" onclick="linkM()"><img class="ico-git" src="images/icon-git.png" alt=""></span>
                        </div>

                        <p>Si te interesa, estaré encantado de saber de ti. Responderé lo antes posible.</p>
                    </div>
                    <div class="contact-legal"> 
                        <p>Derechos reservados, Luis Marín - Desarrollador Web | Barcelona 2021</p>
                    </div>
                </div>
            </div>
        </footer><!-- /. Cierre Footer -->

  <?php } ?>
