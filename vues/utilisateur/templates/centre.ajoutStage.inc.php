<script language="JavaScript" type="text/javascript" src="../includes/fonctionsJavascript.inc.js"></script>
<script language="JavaScript" type="text/javascript" src="../includes/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="../includes/ajax.inc.js"></script>

<form method="post" action=".?controleur=utilisateur&action=validationcreerstage" name="creationStage" >

 <h1>Creation d'un stage</h1>
    <fieldset> 
        
        
        <label for="id_etudiant">*Etudiant:</label>
        <select name="id_etudiant">
        <?php
        mysql_connect('localhost', 'root', 'joliverie');
	mysql_select_db('GESTAGE');
        $requete1 = mysql_query('SELECT * FROM PERSONNE WHERE IDROLE=4');
	while ($donnees = mysql_fetch_array($requete1)) // On fait une boucle pour lister les news.
	{
	?>		
        <option value="<?php echo stripslashes($donnees['IDROLE']) ?>"><?php echo stripslashes($donnees['PRENOM']).' '.stripslashes($donnees['NOM']);?></option>
        <?php  
        }
        ?>
        </select><br />
        
        
        
        <legend>Informations inportantes</legend>

        <label for="id_professeur_referant">*Professeur referant:</label>
        <select name="id_professeur_referant" >
        <?php
        $requete2 = mysql_query('SELECT * FROM PERSONNE WHERE IDROLE=3');
	while ($donnees = mysql_fetch_array($requete2)) // On fait une boucle pour lister les news.
	{
	?>		
        <option value="<?php echo stripslashes($donnees['IDROLE']) ?>"><?php echo stripslashes($donnees['PRENOM']).' '.stripslashes($donnees['NOM']);?></option>
        <?php  
        }
        ?>
        </select><br />
        
        
        
        
    </fieldset>

    <fieldset>
        <legend>Date de stage :</legend>
        
        <input type="hidden" name="anneescol" value="<?php echo date("Y"); ?>"></input>
		
        <label for="date_debut">*Date debut : (YYYY-MM-DD )</label>
        <input type="text" name="date_debut" id="date_debut" ></input><br/>
        
        <label for="date_fin">*Date fin : (YYYY-MM-DD )</label>
        <input type="text" name="date_fin" id="date_fin" ></input><br/>
        
        <label for="date_visite">*Date de visite : (YYYY-MM-DD )</label>
        <input type="text" name="date_visite" id="date_visite" ></input><br/>
        
    </fieldset>

    <fieldset>
        <legend>Informations liees a l'entreprise :</legend>
        
        <label for="id_maitre_stage">*Maitre de stage :</label>
        <select name="id_maitre_stage">
        <?php
        $requete3 = mysql_query('SELECT * FROM PERSONNE WHERE IDROLE=5');
	while ($donnees = mysql_fetch_array($requete3)) // On fait une boucle pour lister les news.
	{
	?>		
        <option value="<?php echo stripslashes($donnees['IDROLE']) ?>"><?php echo stripslashes($donnees['PRENOM']).' '.stripslashes($donnees['NOM']);?></option>
        <?php  
        }
        ?>
        </select><br />
        
        <label for="id_entreprise">*Entreprise :</label>
        <select name="id_entreprise">
        <?php
        $requete4 = mysql_query('SELECT * FROM ORGANISATION ORDER BY NOM_ORGANISATION');
	while ($donnees = mysql_fetch_array($requete4)) // On fait une boucle pour lister les news.Entrepr
	{
	?>		
        <option value="<?php echo stripslashes($donnees['IDORGANISATION']) ?>"><?php echo stripslashes($donnees['NOM_ORGANISATION']);?></option>
        <?php  
        }Entrepr
        ?>EntreprEntrepr
        </select><br />
        
        <label for="ville">*Ville :</label>
        <input type="text" name="ville" id="ville" ></input><br/>
        
        <label for="divers">Divers :</label>
        <input type="text" name="divers" ></input><br/>
        
    </fieldset>

     <fieldset>
         
         <legend>Bilan du stage :</legend>
         
        <label for="bilan_travaux">Bilan travaux :</label>
        <textarea rows="4" cols="50" name="bilan_travaux"></textarea> <br/>
        
        <label for="ressources_outils">Ressources outils:</label>
        <textarea rows="4" cols="50" name="ressources_outils"></textarea> <br/>
        
        <label for="commentaires">Commentaires :</label>
        <textarea rows="4" cols="50" name="commentaires"></textarea> <br/>
        
        <label for="participation_ccf">Participation CCF :</label>
        <input type="text" name="participation_ccf" id="participation_ccf" ></input><br/>
        
        </fieldset>
    
     <fieldset>
        <input type="submit" value="Rajouter le stage" onclick="return validerStage()" ></input><br />
        * champs obligatoires
     </fieldset>
</form>
