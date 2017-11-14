<div id="page">
    <div id="content">
        <div class="box">
            <h2>Liste des praticiens</h2>
            <section>
            <?php       
            If (!empty( $_SESSION['connexion'])) // si quelqu'un est connecté
            { ?>
                <a class="btn" href='index.php?uc=Praticiens&action=ajouter'>Ajouter un praticien</a>
            <?php } ?>
            <table><tr><th>Numéro</th><th>Nom</th><th>Actions</th></tr>
            <script>
            function supprPraticien(id) 
            {
                if(confirm("Voulez vous vraimer supprimer ce praticien. Attention la suppression du praticien entrainera la suppression de tous ses albums ?"))
                {
                    location.href='index.php?uc=Praticiens&action=supprimer&numprat='+id;
                }
                else {
                    alert("Le praticien n'a pas été supprimé.");
                }
            }
            </script>
            <?php
            foreach($lesPraticiens as $praticien) //parcours du tableau d'objets récupérés
            {   
                $idPrat=$praticien->getId();           
                $nom=$praticien ->getNom();?>
            <tr>
            <td width=5%><?php echo $idArt?></td><td width=80%><?php echo $nom?></a></td><!--affichage dans des liens-->
            <td class='action' width=15%>
                <a href='index.php?uc=Praticiens&action=praticien&numprat=<?php echo $idprat ?>' class="imageRechercher" title='Voir la liste des spécialités'></a> 
                <?php       
                If (!empty( $_SESSION['connexion']))  
                { ?>    
                    <a href='index.php?uc=Praticiens&action=modifier&numprat=<?php echo $idprat; ?>' class="imageModifier" title="modifier un praticien"></a>
                    <span class="imageSupprimer" onclick="javascript:supprArtiste('<?php echo $idprat; ?>')" title="supprimer un praticien" ></span> <!-- on met un span pour pouvoir invoquer le on click -->
                <?php } ?>
            </td>
            </tr>

            <?php
                }
            ?>
            </table>
            </section>
        </div>
    </div>
    <br class="clearfix" />
</div>

