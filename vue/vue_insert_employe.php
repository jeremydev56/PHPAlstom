<h2> Ajout d'un Employé </h2>


    <form method ="post" action ="index.php?page=2">

        <?php echo ($unEmploye==null)?"":
        // renvoi à l'idEmploye de unEmploye
        "<input type='hidden' name='idemploye' value='".$unEmploye['idemploye']."'>"
        ?>

            <section>
                
                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">
                    <tr><td>Nom : </td><br><td><input type="text" name="nom" id="nom" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unEmploye==null)?"":$unEmploye['nom'];
                    /* inscription du nom dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du nom parmi le unEmploye               
                    */
                        ?>">
                    </td></tr>
                </div>
                
                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">
                    <tr><td>Prénom : </td><br><td><input type="text" name="prenom" id="prenom" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unEmploye==null)?"":$unEmploye['prenom'];/* inscription du prénom dans un td avant l'input
                        la classe form-control pour le css + style
                        le php echo pour le renvoi du nom parmi le unAdmin               
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">
                    <tr><td>Qualification : </td><br><td><input type="text" name="qualification" id="qualification" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unEmploye==null)?"":$unEmploye['qualification'];
                    /* inscription de la qualification dans un td avant l'input
                        la classe form-control pour le css + style
                        le php echo pour le renvoi du nom parmi le unAdmin               
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">
                    <tr><td>Téléphone : </td><br><td><input type="text" name="tel" id="tel" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unEmploye==null)?"":$unEmploye['tel'];
                    /* inscription du téléphone dans un TD avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du nom parmi le unAdmin               
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Ancienneté : </td><br><td><input type="text" name="anciennete" id="anciennete" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unEmploye==null)?"":$unEmploye['anciennete'];
                    /* inscription du téléphone dans un TD avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du nom parmi le unAdmin               
                    */
                        ?>">
                    </td></tr>
                </div>
                
                </section>


    </form>

            <!--
                        CLASSES class (renvoient au fichier CSS) :

                        form-row : la ligne des items
                        form-control : la ligne des input
                        btn-primary : la ligne des boutons

                  
                        TYPE :

                        text style = le style du texte renseigné dans l'input
                        font-size : la taille du texte
                        font-weight : le style de la police
                        color : la couleur du texte
                        background-color : la couleur du fond de l'input
                        text-align : l'alignement du texte dans l'input

                        NAME / ID = renvoyés depuis le label for
                        label for = renvoie à l'input indiqué entre les guillemets
            -->