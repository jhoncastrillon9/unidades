</div>
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="<?php echo site_url() ?>/PanelAdmin" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="<?php echo site_url() ?>/PanelAdmin"> <span id="logo" ></span>
			      <!--<img id="logo" src="" alt="Logo"/>-->
			  </a> </div>
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="<?php echo site_url() ?>/PanelAdmin"><i class="fa fa-tachometer"></i><span>Inicio</span></a></li>
		        <li id="menu-comunicacao" ><a href="<?php echo site_url() ?>/AdminReservas"><i class="fa fa-map-marker nav_icon"></i><span>Reservas</span><span class="fa fa-angle-right" style="float: right"></span></a>
              <ul id="menu-comunicacao-sub" >
                <li id="menu-arquivos" ><a href="<?php echo site_url() ?>/AdminReservas">Reservas</a></li>
                <li id="menu-arquivos" ><a href="<?php echo site_url() ?>/AdminEspaciosReservar">Espacios a reservar</a></li>
              </ul>
		        </li>
		        <li><a href="<?php echo site_url() ?>/AdminPqrs"><i class="fa fa-book"></i><span>PQRS</span></a></li>
		        <li id="menu-academico" ><a href="<?php echo site_url() ?>/AdminPublicaciones"><i class="fa fa-file-text"></i><span>Publicaciones</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="<?php echo site_url() ?>/AdminPublicaciones">Ver Todas</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url() ?>/AdminPublicaciones/index/add">Nueva</a></li>
		          </ul>
		        </li>
		        <li><a href="<?php echo site_url() ?>/AdminDocumentos"><i class="fa fa-envelope"></i><span>Documentos</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url() ?>/AdminDocumentos">Ver Todos</a></li>
			            <li id="menu-academico-boletim" ><a href="<?php echo site_url() ?>/AdminDocumentos/index/add">Publicar Nuevo</a></li>
		             </ul>
		        </li>
		         <li><a href="<?php echo site_url() ?>/Configurar"><i class="fa fa-cog"></i><span>Configurar</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="<?php echo site_url() ?>/AdminInfoPagina">Información de la pagina</a></li>
			            <li id="menu-academico-boletim" ><a href="<?php echo site_url() ?>/AdminImagenesPagina">Imagenes</a></li>
			            <li id="menu-academico-boletim" ><a href="<?php echo site_url() ?>/AdminUsuarios">Mi Perfil</a></li>
		             </ul>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<script>
var toggle = true;

$(".sidebar-icon").click(function() {
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }
                toggle = !toggle;
            });
</script>
</body>
<footer>
  <div class="copyrights">
  	 <p>Urbanización villa real - Todos los derechos reservados</p>
     <p>Desarrollado por Rabbit.com.co</p>
  </div>
</footer>
