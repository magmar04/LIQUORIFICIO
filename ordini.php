<?php include './template-parts/header.php' ?>
<head>
<?php
        session_start();
        if(!isset($_SESSION['mail'])){
            header('location: login.php');
        }
        $mail = $_SESSION["mail"];
		$servername = $_SESSION["servername"];
		$db_name = $_SESSION["db_name"];
		$db_username = $_SESSION["db_username"];
		$db_password = $_SESSION["db_password"];
		$conn = new mysqli($servername,$db_username,$db_password,$db_name);
		if($conn->connect_error){
			die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
		}
    ?>

    <style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    /* tr:nth-child(even) {
    background-color: #dddddd;
    } */
    </style>
</head>
<body>
<div class="container">
    <br>
    <br>
    <br>
    

    <h2>I MIEI ORDINI</h2>

    <table>
    <tr>
        <th>Prodotto</th>
        <th>Quantita</th>
        <th>Data dell'ordine</th>
    </tr>
    <?php
            $sql="SELECT nome, quantita, DATE_FORMAT(data, '%d/%m/%Y') as data 
                    FROM compra JOIN prodotto 
                    ON compra.codice = prodotto.codice
                    WHERE mail = '".$mail."'
                    ORDER BY DATE_FORMAT(data, '%Y/%m/%d') DESC";
            $ris = $conn->query($sql) or die("<p>Query fallita! ".$conn->error."</p>");
            if ($ris->num_rows > 0){
                while($row = $ris->fetch_assoc()){
                    echo"
                    <tr>
                        <td>".$row["nome"]."</td>
                        <td>".$row["quantita"]."</td>
                        <td>".$row["data"]."</td>
                    </tr>
                    ";
                }
            }
        ?>
    </table>

</div>

</body>
    <br>
    <br>
    <br>

<?php include './template-parts/footer.php' ?>



