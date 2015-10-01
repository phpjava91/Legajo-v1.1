<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layout Main</title>
</head>
<body>
   <header>
   	  <h1>titulo</h1>
   	   <figure>
   	  	  <!--<img src="" />-->
   	  	  FIGURA
   	  </figure>
   	  <nav>
   	  	 <ul>
   	  	 	<li><a href="#">USUARIO</a>
              <ul>
                <li><a href="#">Salir</a></li>	
              </ul>
   	  	 	</li>   	  	 	
   	  	 </ul>
   	  </nav>
   </header>

   <section>	
       <nav>
       	<a href="#">icono</a>
      	<p><span>icono</span></p>

       	 <ul>
       	  	<li><a href="#">Mantenimiento</a>
                <ul>
                	<li><a href="#">Docentes</a></li>
                	<li><a href="#">Facultades</a></li>
                	<li><a href="#">Especialidades></a></li>
                	<li><a href="#">Estado Civil></a></li>
                	<li><a href="#">Niveles Academicos</a></li>
                	<li><a href="#">Capacitaciones</a></li>
                </ul>
       	  	</li>
       	  	<li><a href="#">Consultas</a>
                <ul>
                	<li><a href="#">Capacitaciones</a></li>
                	<li><a href="#">Publicaciones</a></li>
                	<li><a href="#">Grado</a></li>
                </ul>
       	  	</li>
       	  	<li><a href="#">Reportes</a>
              <ul>
              	<li><a href="#">Capacitaciones</a></li>
              	<li><a href="#">Publicaciones</a></li>
              	<li><a href="#">Grado</a></li>
              </ul>

       	  	</li>
       	  </ul> 
       </nav>

       <section>
       	  @yield('content')
       </section>	
   </section> 

   <footer>
   	   <p>Legajo</p>
   	   <p><strong>Universidad Nacional de Piura</strong></p>
   </footer>
</body>
</html>