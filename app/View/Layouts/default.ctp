<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php
		if(isset($title)):
			echo $title;
		else:
			echo __('Titre');
		endif;
		?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		//on charge les CDN de Boostrap
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
		echo $this->Html->css('//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css');
		echo $this->Html->css('//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.min.css');
		echo $this->Html->css('//cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css');
		
		echo $this->Html->css('style');
		echo $this->fetch('css');
	?>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo $this->Html->script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'); ?>
      <?php echo $this->Html->script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'); ?>
    <![endif]-->

</head>
<body>

	<!-- MENU, BANNIERE ET PRIX -->
	<header class="container-fluid">
		
		<!-- BARRE DE NAVIGATION -->
		<div class="row">
			<?php echo $this->element('navigation_bar');?>				
		</div>		

		<!-- BANNIERE ET PRIX -->
		<div class="row">
			<div class="col-md-6 col-sm-12" id="fond_header">
				<div class="hidden-md hidden-lg hidden-xs">					
					<?php echo $this->Html->image("./tablette/fond_header.png", ["alt" => "fleche"]); ?>
				</div>

				<div class="hidden-md hidden-lg hidden-sm">					
					<?php echo $this->Html->image("./mobile/fond_header.png", ["alt" => "fleche"]); ?>
				</div>
			</div>

			<div class="col-md-6 col-sm-12" id="meilleur_prix">
				<table>
					<tr>
						<td class="fleche_meilleur_prix hidden-sm hidden-xs">
							<?php echo $this->Html->image("./divers/fleche.png", ["alt" => "fleche"]); ?>
						</td>
						<td>				
							<div class="row">
								<div class="col-md-10 col-xs-12 bg_bleu text-center">
									<h2 class="blanc"><strong>N°1 <span class="bleu_clair">FRA</span>NC<span class="rouge">AIS</span></strong></h2>
									<h4 class="blanc">du nom de domaine tout inclus<br/>+500.000 dommaines déjà ouvert</h4>
								</div>
							</div>

							<div class="row">
								<div class="col-md-10 col-xs-12 bg_blanc">
									<div class="row">
										<div class="col-md-12 bleu">
											<table>
												<tr>
													<td><div class="bloc_orange">.fr</div></td>
													<td>.....</td>
													<td><span><strong>0,99€</strong></span> HT/an</td>
													<td class="orange"><strong><del>3,99€</del></strong></td>
												</tr>

												<tr>
													<td><div class="bloc_orange">.com</div></td>
													<td>.....</td>
													<td><span><strong>0,99€</strong></span> HT/an</td>
													<td class="orange"><strong><del>3,99€</del></strong></td>
												</tr>

												<tr>
													<td><div class="bloc_orange">.eu</div></td>
													<td>.....</td>
													<td><span><strong>0,99€</strong></span> HT/an</td>
													<td class="orange"><strong><del>3,99€</del></strong></td>
												</tr>

												<tr>
													<td><div class="bloc_orange">.be</div></td>
													<td>.....</td>
													<td><span><strong>0,99€</strong></span> HT/an</td>
													<td class="orange"><strong><del>3,99€</del></strong></td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</div>			
	</header>

	<!-- FORMULAIRE POUR LA RECHERCHE DU NOM DE DOMMAINE -->
	<section class="container-fluid" id="rechercheDomaine">
		<div class="row text-center">
			<div class="col-md-12">Vérifiez que votre nom de domaine est libre et réservez le :</div>
			<div class="col-xs-12 col-md-6 col-md-push-3">
				<form class="form-inline form-recherche">
				  <div class="input-group">
	  			    <span class="input-group-addon hidden-xs">www.</span>
				    <input type="text" class="form-control" placeholder="nom-de-votre-site-internet" value="">
				    <span class="hidden-xs">
					    <select type="text" class="form-control">
					    	<option value=".fr">.fr</option>
					    	<option value=".com">.com</option>
					    	<option value=".net">.net</option>
					    </select>
				    </span>
				    <span class="input-group-btn">
      					<button class="btn my_btn" type="button">
      						<span class="glyphicon glyphicon-search"></span>
      						Je réserve
      					</button>
      				</span>
				  </div>
				</form>
			</div>
		</div>
	</section>

	<!-- CONTENU DE LA PAGE D'ACCUEIL : SERVICES, TEMOIGNAGES, ETC...  -->
	<?php echo $this->fetch('content'); ?>
   
    <!-- PIED DE PAGE -->
   	<footer class="container-fluid">
   		<div class="row">
   			<div class="col-sm-3 text-left">
   				<div><?php echo $this->Html->image("./logo/logo-fr.png", ["alt" => "logo"]); ?></div>   				

			 	<div class="bfh-selectbox bfh-countries" data-country="FR" data-available="FR,BE,DE" data-flags="true">
				  <input type="hidden" value="">
				  <a class="bfh-selectbox-toggle" role="button" data-toggle="bfh-selectbox" href="#">
				    <span class="bfh-selectbox-option input-medium" data-option=""></span>
				    <b class="caret"></b>
				  </a>
				  <div class="bfh-selectbox-options">
				    <input type="text" class="bfh-selectbox-filter">
				    <div role="listbox">
				    <ul role="option">
				    </ul>
				    </div>
				  </div>
				</div>
				Service Statut : <?php echo $this->Html->image("./icones/statut_ok.png", ["alt" => "status ok"]); ?>		
				<div class="separateur"></div>

				<div class="reseaux_sociaux">
					Rejoignez-nous<br/>
					<?php echo $this->Html->link($this->Html->image("./icones/twetter.png", ["alt" => "twitter"]),
				                                 "http://www.twitter.com",
				                                 ['escape' => false]);?>

				    <?php echo $this->Html->link($this->Html->image("./icones/facebook.png", ["alt" => "facebook"]),
				                                 "http://www.facebook.com",
				                                 ['escape' => false]);?>

					<?php echo $this->Html->link($this->Html->image("./icones/google_plus.png", ["alt" => "google_plus"]),
					                             "https://plus.google.com/?hl=fr",
					                             ['escape' => false]);?>

				    <?php echo $this->Html->link($this->Html->image("./icones/youtube.png", ["alt" => "youtube"]),
				                                 "http://www.youtube.com",
				                                 ['escape' => false]);?>

				</div>

				<div>
					Recevez notre newsletter<br/>
					<form class="form-inline" id="newsletter">
					  <div class="input-group">		  			    
					    <input type="text" class="form-control" placeholder="Votre email" value="">
					    
					    <span class="input-group-btn">
	      					<button class="btn my_btn" type="button">
	      						OK
	      					</button>
	      				</span>
					  </div>

					</form>
				</div>
   			</div>
   			<span class="hidden-xs">
	   			<div class="col-sm-3">
	   				<div>
						<ul>
							<li><strong>Nom de domaine</strong></li>
							<li><a href="#">Créer un nom de domaine</a></li>
							<li><a href="#">Tarif nom de domaine</a></li>
							<li><a href="#">Transfert nom de domaine</a></li>
						</ul>
					</div>
	   				<div>
						<ul>
							<li><strong>Site E-commerce</strong></li>
							<li><a href="#">Création de site e-commerce</a></li>
							<li><a href="#">Hébergement e-commerce</a></li>
							<li><a href="#">Boutique Prestashop</a></li>
						</ul>
					</div>
					<div>
						<ul>
							<li><strong>Envois de SMS</strong></li>
							<li><a href="#">Envoi sms par internet</a></li>
							<li><a href="#">Envoi mailing SMS</a></li>
							<li><a href="#">Envoi SMS international</a></li>
						</ul>
					</div>
	   			</div>

	   			<div class="col-sm-3">
	   				<div>
						<ul>
							<li><strong>Hébergement web</strong></li>
							<li><a href="#">Hébergement web</a></li>
							<li><a href="#">Hébergement web Windows</a></li>
						</ul>
					</div>
	   				<div>
						<ul>
							<li><strong>Serveur dédié</strong></li>
							<li><a href="#">Serveur virtuel</a></li>
							<li><a href="#">Serveur dédié</a></li>
							<li><a href="#">Serveur Cloud</a></li>
							<li><a href="#">Private Cloud</a></li>
							<li><a href="#">Serveur VPS</a></li>
							<li><a href="#">VPS SSD</a></li>
							<li><a href="#">Serveur dédié Minecraft</a></li>
							<li><a href="#">Serveur dédié Linux</a></li>
							<li><a href="#">Serveur dédié pas cher</a></li>
						</ul>
					</div>
					<div>
						<ul>
							<li><strong>Revendeurs &amp; affiliation</strong></li>
							<li><a href="#">Affiliation &amp; revendeur</a></li>
						</ul>
					</div>

	   			</div>

	   			<div class="col-sm-3">
		   			<div>
		   				<ul>
							<li><strong>Réferencement web</strong></li>
							<li><a href="#">Réferencement de site web</a></li>
							<li><a href="#">Réferencement basic trafic</a></li>
						</ul>
						<ul>
							<li><strong>Sauvegarde en ligne</strong></li>
							<li><a href="#">Sauvegarde en ligne</a></li>
							<li><a href="#">Stockage en ligne</a></li>
						</ul>
						<ul>
							<li><strong>Création de site</strong></li>
							<li><a href="#">Création de site</a></li>
							<li><a href="#">Wordpress Blog</a></li>
							<li><a href="#">Joomla CMS</a></li>
							<li><a href="#">Drupal CMS</a></li>
							<li><a href="#">PHPBB Forum</a></li>
						</ul>
		   			</div>
		   		</div>
		   	</span>
   		</div>
   	</footer>

	<?php
		echo $this->Html->script('//code.jquery.com/jquery-1.10.2.min.js');
		echo $this->Html->script('//code.jquery.com/ui/1.10.4/jquery-ui.min.js');
		echo $this->Html->script('//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js');
		echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js');
		echo $this->fetch('script');
		echo $this->Html->script('testLWS');
		echo $this->Js->writeBuffer();
	?>
	
</body>
</html>