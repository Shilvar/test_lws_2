<div class="navbar navbar-inverse col-md-12">
  
  <ul class="nav navbar-nav">
    <li data-cible="">
      <?php
         echo $this->Html->link($this->Html->image("./logo/logo.png", ["alt" => "logo"])
                                , '#'
                                , ['escape' => false]);
      ?> 
    </li> 
    <li data-cible="rechercheDomaine" class="hidden-sm hidden-xs">
        <?php
          echo $this->Html->link('RECHERCHE DU DOMAINE', '#');
        ?>
    </li>

    <li data-cible="bloc_meilleur_prix" class="hidden-sm hidden-xs">
        <?php
          echo $this->Html->link('LES SERVICES', '#');
        ?>
    </li>

    <li data-cible="pourquoiChoisir" class="hidden-sm hidden-xs">
        <?php
          echo $this->Html->link('POURQUOI NOUS CHOISIR', '#');
        ?>
    </li>

    <li data-cible="contact" class="hidden-sm hidden-xs">
        <?php
          echo $this->Html->link('CONTACT', '#');
        ?>
    </li>
    
     <li data-cible="etAussi" class="hidden-sm hidden-xs">
        <?php
          echo $this->Html->link('ET AUSSI', '#');
        ?>
    </li>

    <li class="hidden-md hidden-lg affiche_sous_menu">
        <a href="#">
          <?php echo $this->Html->image("./icones/menu.png", ["alt" => "logo"]); ?>
          <span class="hidden-xs">
             MENU PRINCIPAL
          </span>

        </a>
       
    </li>
    
  </ul>

  <ul id="sous-menu" class="masquer">
        <li data-cible="rechercheDomaine" class="">
            <?php
              echo $this->Html->link('RECHERCHE DU DOMAINE', '#');
            ?>
        </li>

        <li data-cible="bloc_meilleur_prix" class="">
            <?php
              echo $this->Html->link('LES SERVICES', '#');
            ?>
        </li>

        <li data-cible="pourquoiChoisir" class="">
            <?php
              echo $this->Html->link('POURQUOI NOUS CHOISIR', '#');
            ?>
        </li>

        <li data-cible="contact" class="">
            <?php
              echo $this->Html->link('CONTACT', '#');
            ?>
        </li>
        
         <li data-cible="etAussi" class="">
            <?php
              echo $this->Html->link('ET AUSSI', '#');
            ?>
        </li>
    </ul>
   

</div>


