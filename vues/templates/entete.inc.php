<div id="entete">

    <h1 id="Titreappli">GestStage <b style="font-size:10px;" >Version 2.0</b></h1>

     <?php
    if (isset($this->loginAuthentification)){  
        echo '<span class="deconnexion" >
            <a href=".?controleur=accueil&action=seDeconnecter">
            <img src="../vues/images/exit.png" style="width:25px; height:25px;" alt="" />
            </a>
            </span>';
    }
    ?>

</div>