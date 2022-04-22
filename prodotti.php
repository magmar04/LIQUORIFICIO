<?php include './template-parts/header.php' ?>

    <div id="main" class="container" style="margin-top:100px; display: flex; justify-content: space-around; flex-wrap: wrap;">

        <?php
            $sql="SELECT codice, nome, descrizione, costo FROM prodotto ORDER BY costo";
            $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            if ($ris->num_rows > 0){
                while($row = $ris->fetch_assoc()){
                    echo"
                    <div class='card' style='width: 18rem; margin: 10px 0px;'>
                    <img src='foto/".$row["nome"].".jpg' class='card-img-top' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$row["nome"]."</h5>
                        <h6 class='card-subtitle mb-2 text-muted'>".number_format($row["costo"], 2, '.', ',')." €</h6>
                        <p class='card-text'>".$row["descrizione"]."</p>
                        <a href='#' class='btn btn-primary'>Aggiungi al carrello</a>
                    </div>
                    </div>";
                }
            }
        ?>
            
    </div>
        
<?php include './template-parts/footer.php' ?>