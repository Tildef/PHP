<p> Du har slagit alla slagen. Dina tärningar visar:<br>
    <?php
    foreach($tarning as $key=>$value){
        echo "<div class='tarningarna'><img src='Bilder/Tärning $value.jpg' alt='Tärning'_$value' height =15> <br> </div>";
        
    }
    ?>
    <br>
    Du fick ett <?= $resultat['resultat']; ?> med värdet <?= $resultat['varde']; ?>
<form method="POST">
    <input type="submit" name="submit" value="Spela igen">
    <input type="submit" name="submit" value="Göra något tråkigt">
</form>