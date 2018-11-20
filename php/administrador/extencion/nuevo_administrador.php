<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../../css/administrador/usuarios.css">
</head>
<body>
	<!-- Side -->
	<section class="full-box cover dashboard-sideBar ">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard "></div>
		<div class="full-box dashboard-sideBar-ct ">
			<!--Titulo -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				ADMINISTRADOR <i></i>
			</div>
			<!-- Informacion -->
			<div class="full-box dashboard-sideBar-UserInfo ">
				<figure class="full-box">
					<img src="" >
					<figcaption class="text-center text-titles">Nombre del Usuario</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a class="btn-exit-system">
							<i class="glyphicon glyphicon-off"></i>
						</a>
					</li>
				</ul>
			</div>
			<!--Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="../../../index2.php">
						<i class="glyphicon glyphicon-th"></i> Pagina Principal
					</a>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Administracion 
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="../administrador.php"><i class="glyphicon glyphicon-cog"></i> Configuraciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Usuarios
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="lista_administradores.php"><i class="glyphicon glyphicon-king"></i> Administradores</a>
						</li>
						<li>
							<a href="lista_usuarios.php"><i class="glyphicon glyphicon-user"></i> Usuarios</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Prioridades 
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="usuarios_prioridad.php"><i class="glyphicon glyphicon-bishop"></i> Usuarios con Prioridad</a>
						</li>
						<li>
							<a href="publicaciones.php"><i class="glyphicon glyphicon-transfer"></i> Rotacion de Publicaciones</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="btn-sideBar-SubMenu">
						<i class="glyphicon glyphicon-menu-right"></i> Ayuda
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href=""><i ></i> Ternimos y condiciones</a>
						</li>
						<li>
							<a href="Programador.php"><i class="glyphicon glyphicon-knight"></i> ¿El Programador?</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	<!-- contenedor-->
	<section class="full-box dashboard-contentPage ">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a class="btn-menu-dashboard"><i class="glyphicon glyphicon-align-justify"></i></a>
				</li>
			</ul>
		</nav>
		<!-- contenido de la pagina //falta aumentar en esta parte -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">ADMINISTRADORES</h1>
			</div>
		</div>







		<section>
			<!-- folmulario para nuevo administrador -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Nuevo Administrador
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" action="consultas/nuevo_administrador.php" method="POST" enctype="multipart/form-data">
                  	<div>
                      <label class="control-label col-lg-2">foto de Perfil</label><div class="col-lg-10">
                        <input  type="file" REQUERED name="foto" />
                      </div>
                    </div><br><br>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Nombre</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="nombre"  type="text" placeholder="Nombre Completo">
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Apellido Peterno</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="apPaterno" type="text"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Apellido Materno</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="apMaterno" type="text"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">CI</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="ci" type="text"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Correo</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="correo" type="text"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="password" class="control-label col-lg-2">Contraseña</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="contra" type="password" />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Pais</label><div class="col-lg-10">
                        <input class="form-control" REQUIRED name="pais" type="text"/>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label class="control-label col-lg-2">Departamento</label><div class="col-lg-10">
                        <input class="form-control" name="dtpo" type="text"/>
                      </div>
                    </div>
                    <!-- Falta colocar de que tipo es el usuario-->
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                      	<button type="submit" value="nuevo_administrador" name="nuevo_administrador">Guardar

                      	</button>
                        <a class="btn btn-primary" href="lista_administradores.php">Volver</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
		</section>
	</section>



	
	<!--====== Scripts -->
	<script src="../../../js/jquery.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
	<script src="../../../js/usuarios/sweetalert2.min.js"></script>	
	<script src="../../../js/usuarios/material.min.js"></script>
	<script src="../../../js/usuarios/ripples.min.js"></script>
	<script src="../../../js/usuarios/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../../../js/usuarios/usuarios.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>