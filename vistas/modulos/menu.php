<?php
    // Obtener la URL de la página actual
    $currentPage = basename($_SERVER['REQUEST_URI']);
	//die();
    // Función para agregar la clase 'active' si la URL coincide
    function setActive($page) {
        global $currentPage;
        if ($currentPage == $page) {
           return 'active';
        }
    }

//::::::::::::::::::::::::::::::::Consulta el estado actual del usuario:::::::::::::::::::::::::::::://
//:::Cierra la sesion si el estado es 0 y en su proxima interaccion con el software lo desconecta::://
include_once 'config/checkUser.php';
checkUserStatus();
//::::::::::::::::::::::::::::::::Fin del metodo::::::::::::::::::::::::::::::::::::::::::::::::::::://
//:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::://

?>

<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu">
		<!-- =============================================
		INICIO
		============================================= -->
		<li class="<?php echo $currentPage == 'inicio' ? 'active' : ''; ?>">
				<a href="inicio">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>


	<?php
		/*=============================================
		CONFIGURAR POLÍTICIAS
		=============================================*/
		if($_SESSION["permisos"]["veradministracionintegradoor"] == "x"){	
			echo '<li class="' . ($currentPage == 'politicas' || $currentPage == 'planes' || $currentPage == 'contratos' || $currentPage == 'pagos'? 'active' : '') . '">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			<i class="fa fa-wrench" aria-hidden="true"></i>
				<span >Administrador Integradoor</span>
			</a>			
				<ul class="dropdown-menu right">
					<li class="user-body">			
						<a href="politicas" class="btn btn-default btn-flat"><i class="" style="color: red;"></i>Políticas</a>
					</li>
					<li class="user-body">	
						<a href="planes" class="btn btn-default btn-flat"><i class="" style="color: red;"></i>Planes</a>
					</li>
					<li class="user-body">	
						<a href="inicio" class="btn btn-default btn-flat"><i class="" style="color: red;"></i>Contratos</a>
					</li>
					<li class="user-body">	
						<a href="inicio" class="btn btn-default btn-flat"><i class="" style="color: red;"></i>Pagos</a>
					</li>

				</ul>
		</li>';
			}
		
		/*=============================================
		ADMINISTRAR COTIZACIONES
		=============================================*/
		if($_SESSION["permisos"]["administracionCotizaciones"] == "x"){	
			echo '<li class="' . ($currentPage == 'adminCoti' ? 'active' : '') . '">
            <a href="adminCoti">
                <i class="fa fa-list-ul"></i>
                <span>Admin Cotizaciones</span>
            </a>
          </li>';
			}
		/*=============================================
		AUTOGESTION
		=============================================*/	
		if($_SESSION["permisos"]["administracionCotizaciones"] == "x"){	
			echo '<!--<li>
				<a href="autogestion">
					<i class="fa fa-user"></i>
					<span>Autogestión</span>
				</a>
			</li>-->';
		}
		
		/*=============================================
		CLIENTES
		=============================================*/
		if($_SESSION["permisos"]["Clientes"] == "x"){	
			echo '<li class="' . ($currentPage == 'clientes' ? 'active' : '') . '">
				<a href="clientes">
					<i class="fa fa-user-circle-o"></i>
					<span>Clientes</span>
				</a>
			</li>';
		}
		/*=============================================
		COTIZAR LIVIANO
		=============================================*/
		echo  '<li class="' . ($currentPage == 'cotizar' ? 'active' : '') . '">
				<a href="cotizar">
					<i class="fa fa-car"></i>
					<span>Cotizar Livanos</span>
				</a>
			</li>';
	?>
			

			
	<?php	
		/*=============================================
		COTIZACIONES MASIVAS
		=============================================*/
		if($_SESSION["permisos"]["Cotizacionesmasivas"] == "x"){	
			echo  '<li class="' . ($currentPage == 'livianoMasivas' ? 'active' : '') . '">
				<a href="livianoMasivas">
					<i class="fa fa-file-archive-o"></i>
					<span>Cotizaciones masivas liviano</span>
				</a>
			</li>';
		}
		/*=============================================
		PESADOS
		=============================================*/
		if($_SESSION["permisos"]["Cotizarpesados"] == "x"){	
			echo '<li class="' . ($currentPage == 'pesados' ? 'active' : '') . '">
				<a href="pesados">
					<i class="fa fa-truck"></i>
					<span>Cotizar Pesados</span>
				</a>
			</li>';
		}
		
		/*=============================================
		MOTOS
		=============================================*/
		if($_SESSION["permisos"]["Cotizarmotos"] == "x"){	
			echo '<li class="' . ($currentPage == 'motos' ? 'active' : '') . '">
				<a href="motos">
					<i class="fa fa-motorcycle"></i>
					<span>Cotizar Motos</span>
				</a>
			</li>';
		}
		
		/*=============================================
		MÓDULO SOAT
		=============================================*/

		if ($_SESSION["permisos"]["SeguroExequial"] == "x") {
			echo '<li role="presentation" style="width: 50px; height: 44px;" class="' . ($currentPage == 'soat' ? 'active' : '') . '">
					<a href="soat">
						<img class="imagen" style="margin-left: -3px;" width="20" height="20" src="vistas/img/plantilla/soat.png" alt="SOAT">
						<span>SOAT</span>
					</a>
				  </li>';
		}

		/*=============================================
		EXEQUIAS
		=============================================*/

		if($_SESSION["permisos"]["SeguroExequial"] == "x"){	
			echo '<li class="' . ($currentPage == 'exequias' ? 'active' : '') . '">
				<a href="exequias">
				<i class="fa fa-umbrella" aria-hidden="true"></i>
				<span>Exequias</span>
				</a>
			</li>';
		}
		
		/*=============================================
		ASSITCARD
		=============================================*/
		
		if($_SESSION["permisos"]["AsistenciaEnViajes"] == "x"){	
			echo '<li class="' . ($currentPage == 'assistcard' ? 'active' : '') . '">
				<a href="assistcard">
					<i class="fa fa-plane" aria-hidden="true" style="font-size: 1.2em;"></i>
					<span>Asistencia en viajes</span>
				</a>
			</li>';
		}    
		

		/*=============================================
		USUARIOS
		=============================================*/
		if($_SESSION["permisos"]["AdministrarUsuarios"] == "x"){	
			echo '<li class="' . ($currentPage == 'usuarios' ? 'active' : '') . '">
				<a href="usuarios">
					<i class="fa fa-user-plus"></i>
					<span>Usuarios</span>
				</a>
			</li>';
		}
		/*=============================================
		PRODUCTOS
		=============================================*/	
		if($_SESSION["permisos"]["Modificaciondeproductos"] == "x"){	
			echo '<li class="' . ($currentPage == 'Productos' ? 'active' : '') . '">
				<a href="Productos">
					<i class="fa fa-folder"></i>
					<span>Productos</span>
				</a>
			</li>';
		}
		/*=============================================
		AYUDA VENTAS
		=============================================*/		
	?>
		<li class="<?php echo $currentPage == 'ayuda-ventas' ? 'active' : ''; ?>">
			<a id="ayuda-ventas">
				<i class="fa fa-book"></i>
				<span>Ayuda Ventas</span>
			</a>
		</li> 
	<?php
		/*=============================================
		INTERMEDIARIO
		=============================================*/	
		if($_SESSION["permisos"]["Agregarintermediario"] == "x"){	
			echo '<li class="' . ($currentPage == 'intermediario' ? 'active' : '') . '">
				<a href="intermediario">
					<i class="fa fa-briefcase"></i>
					<span>Intermediario</span>
				</a>
			</li>';
		
		}
	
		/*=============================================
		INVITACIÓN
		=============================================*/
		
		if($_SESSION["permisos"]["veradministracionintegradoor"] == "x"){
		echo'<li class="' . ($currentPage == 'invitar' ? 'active' : '') . '">
				<a href="invitar">
				<i class="fa fa-paper-plane" aria-hidden="true"></i>
					<span>Invitación</span>
				</a>
			</li>';
		}

		/*=============================================
		CONFIGURAR PDF
		=============================================*/

			// <li>
			// 	<a id="configuracion-pdf">
			// 		<i class="fa fa-cog" aria-hidden="true"></i>
			// 		<span>Configuracion</span>
			// 	</a>
			// </li>
	?>

	</ul>
	</section>
</aside>