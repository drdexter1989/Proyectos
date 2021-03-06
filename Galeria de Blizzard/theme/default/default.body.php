<?php
/***********************************************************
 *	
 *		Galería de Blizzard
 * 		----------------------------------------------------
 *		Autor		:	Asfo Zavala
 *		Copyright	: 	Copyright (C) 2012, Asfo Zavala
 *		Licencia	:	GNU GPL v3
 *		Link		: 	http://github.com/Asfo/
 *		----------------------------------------------------
 *
 **********************************************************/
 //Acceso denegado a la visualización del archivo directamente.
 if(!DEFINED('ACCESS'))
	die("<h1>Error 403</h1><p>No tienes los permisos suficientes para acceder a este archivo.</p><hr /><i>Galer&iacute;a de Blizzard por <b>Asfo</b> &copy; 2011 | Sistema de Seguridad | <b>Error 403</b>");
?>
			<div class="landingcontents">
				<div class="holder">
	<div class="breadcrumb breadcrumbsub">
		<div class="left"></div>
		<div class="center">
			<div class="ref">
				<div class="contents">
						<div class="text"><?php echo LANG('MENSAJE_BARRA_PAGINACION'); ?></div>
				</div>
			</div>
		</div>
	</div>

		<div class="fn_holder">

		<div class="top_rounded"><img style="float:rig'ht;" src="<?php echo WEB_URL; ?>theme/default/_images/layout/tr_rounded.gif"/><img style="float:left;" src="<?php echo WEB_URL; ?>theme/default/_images/layout/tl_rounded.gif"/></div>

		<div class="blizzart-gallery">

			<div class="searches">
				<div id="gallery-search" class="search">
					<div class="left">
						<div class="right">
							<input type="text" placeholder="Buscar..."></input>
						</div>
					</div>
				</div>
			</div>

			<div class="top_pagenav" id="gallery-toppages">
				<a href="javascript:;" class="disabled" id="prevpg_top">
					<span><?php echo LANG('ANTERIOR'); ?></span>
				</a>
		   		<a href="javascript:;" class="disabled" id="nextpg_top">
					<span><?php echo LANG('SIGUIENTE'); ?></span>
				</a>
				<div class="fn_submit">
					<?php 
						if(isset($_SESSION['userId']) && $_SESSION['userId'] != "")
							echo "<span>".LANG('MENSAJE_ENVIO_IMAGEN') . "<a href=\"upload/\"> " . LANG('ENVIAR_AQUI') . "</a>.</span>";
						else
							echo "<a href=\"login/\">".LANG('MENSAJE_INICIAR_SESION')."</a> ". LANG('MENSAJE_INICIAR_SESION_ADICIONAL') . " o " . LANG('REGISTRATE') . " <a href=\"register/\">".LANG('AQUI')."</a>";
					?>
				</div>
			</div>

			<div id="gallery-message" class="message"></div>

			<div id="gallery-pictures" class="pictures">
				<?php
					echo LANG('SIN_IMAGENES');
				?>
			</div>

			<div id="gallery-pages" class="pages"></div>
		</div>
	</div>