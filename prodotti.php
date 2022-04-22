<?php include './template-parts/header.php' ?>
<head>
    <?php
        session_start();
		$servername = "localhost";
        $db_name = "liquori_mariani";
        $db_username = "root";
        $db_password = "";
		$conn = new mysqli($servername,$db_username,$db_password,$db_name);
		if($conn->connect_error){
			die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
		}
    ?>
</head>

    <div id="main" class="container" style="margin-top:100px; display: flex; justify-content: space-around; flex-wrap: wrap;">

        <?php
            $sql="SELECT codice, nome, descrizione, costo 
                    FROM prodotto 
                    ORDER BY costo";
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
                        <form action='prodotti.php' method='post'>
                            <input style='display: none' type='text' name='cod' value=".$row["codice"].">
                            <button type='submit' class='btn btn-primary'>Aggiungi al carrello</button>
                        </form>
                    </div>
                    </div>";
                }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if(isset($_SESSION['mail'])){
                    $mail = $_SESSION["mail"];
                    $sql = "SELECT mail, codicep, quantita
                            FROM carrello
                            WHERE mail = '$mail' AND codicep ='".$_POST['cod']."'";
                    $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                    if ($ris->num_rows == 0){
                        $sql="INSERT INTO carrello (mail, codicep, quantita)
                                VALUES ('".$mail."', '".$_POST['cod']."', '1')";
                        $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                    } else {
                        $row = $ris->fetch_assoc();
                        $tmp = $row["quantita"] + 1;
                        $sql="UPDATE carrello
                                SET quantita = '$tmp'
                                WHERE codicep ='".$_POST["cod"]."'";
                        $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
                    }
                    
                } else {
                    header('location: login.php');
                }
            }
        ?>


            <!-- <?php include './template-parts/sidebar.php' ?> -->
            
        
    </div>
        
<?php include './template-parts/footer.php' ?>