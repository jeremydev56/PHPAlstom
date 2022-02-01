<h2> Ajout d'un TGV </h2>

    <form method ="post" action ="index.php?page=5">

        <?php echo ($unTgv==null)?"":
        // renvoi à l'idTgv de unTgv
        "<input type='hidden' name='idtgv' value='".$unTgv['idtgv']."'>"
        ?>

            <section>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Matricule : </td><br><td><input type="text" name="matricule" id="matricule" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unTgv==null)?"":$unTgv['matricule'];
                    /* inscription du matricule dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du matricule              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Marque : </td><br><td><input type="text" name="marque" id="marque" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unTgv==null)?"":$unTgv['marque'];
                    /* inscription de la marque dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de la marque              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Kilométrage : </td><br><td><input type="text" name="nbkm" id="nbkm" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unTgv==null)?"":$unTgv['nbkm'];
                    /* inscription du kilométrage dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du kilométrage              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Énergie : </td><br><td><input type="text" name="energie" id="energie" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unTgv==null)?"":$unTgv['energie'];
                    /* inscription de l'énergie dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de l'énergie              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Ancienneté : </td><br><td><input type="text" name="anciennete" id="anciennete" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unTgv==null)?"":$unTgv['anciennete'];
                    /* inscription de l'ancienneté dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de l'ancienneté              
                    */
                        ?>">
                    </td></tr>
                </div>
            </section>

    </form>

             <!--

                        form-row : la ligne des items
                        label for = renvoie à l'input indiqué entre les guillemets

                        form-row-row : chaque label présent sur la ligne form-row
                  
                        TYPE :
                        text style = le style du texte renseigné dans l'input
                        font-size : la taille du texte
                        font-weight : le style de la police
                        color : la couleur du texte
                        background-color : la couleur du fond de l'input
                        text-align : l'alignement du texte dans l'input

                        NAME / ID = renvoyés depuis le label for

                        CLASS = renvoie à la classe css
                    -->