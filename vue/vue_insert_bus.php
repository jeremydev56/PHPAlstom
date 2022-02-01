<h2> Ajout d'un Bus </h2>

    <form method ="post" action ="index.php?page=3">

        <?php echo ($unBus==null)?"":
        // renvoi à l'idBus de unBus
        "<input type='hidden' name='idbus' value='".$unBus['idbus']."'>"
        ?>

            <section>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Matricule : </td><br><td><input type="text" name="matricule" id="matricule" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['matricule'];
                    /* inscription du matricule dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du matricule              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Marque : </td><br><td><input type="text" name="marque" id="marque" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['marque'];
                    /* inscription de la marque dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de la marque              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Kilométrage : </td><br><td><input type="text" name="nbkm" id="nbkm" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['nbkm'];
                    /* inscription du kilométrage dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi du kilométrage              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Énergie : </td><br><td><input type="text" name="energie" id="energie" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['energie'];
                    /* inscription de l'énergie dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de l'énergie              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Ancienneté : </td><br><td><input type="text" name="anciennete" id="anciennete" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['anciennete'];
                    /* inscription de l'ancienneté dans un td avant l'input
                        la CLASS form-control pour le css + style
                        le PHP ECHO pour le renvoi de l'ancienneté              
                    */
                        ?>">
                    </td></tr>
                </div>

                <div class="form-row" style="float: left; margin-right: 60px; margin-left: 65px">

                    <tr><td>Illustration : </td><br><td><input type="text" name="illustration" id="illustration" class="form-control" style="font-size : 20px; font-weight: bold; color : #FFE4C4; background-color : #778899; text-align: center;" value="<?php echo ($unBus==null)?"":$unBus['illustration'];
                    /* inscription de l'illustration dans un td avant l'input
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