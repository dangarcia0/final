<!DOCTYPE html>
<html>
<?php

include 'head.php';

require_once 'conexion.php';



        $var_total = $_REQUEST["precio"];
        $var_producto = $_REQUEST["producto"];
        $var_cantidad = $_REQUEST["cantidad"];
        $id_cliente = rand(1,10);



?>



<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $producto = $_POST['producto'];

    $cantidad = $_POST['cantidad'];
  
    $precio = $_POST['precio'];
    
    $id_cliente = rand(1,10);
  


    $stmt = $conn->prepare("INSERT INTO ventas (producto, cantidad, total, cliente) VALUES (:producto, :cantidad, :total, :cliente)");

    $stmt->bindParam(':producto', $producto);

    $stmt->bindParam(':cantidad', $cantidad);

    $stmt->bindParam(':total', $precio);

    $stmt->bindParam(':cliente', $id_cliente);

    $stmt->execute();

}

    ?>


<head>
    <title>Pago con tarjeta</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        
        <hr>

        
  <div class="awacontainer">

    <h1 class="text-center">Metodo de pago: tarjeta</h1>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form action="tarjeta.php" method="POST">

                <input type="hidden" id="precio" name="precio"  value= <?= $var_total; ?> >
                <input type="hidden" id="cantidad" name="cantidad"  value= <?= $var_cantidad; ?> >
                <input type="hidden" id="producto" name="producto"  value= <?= $var_producto; ?> >
                
        <hr>

        <div class="text-right">
            <h5>Total: $<span id="total"> <?= $var_total; ?> </span></h5>
            
        </div>
        
        <div class="grupo">
				<label for="inputNumero">Número Tarjeta</label>
				<input type="number" id="numerot" name="numerot" maxlength="16" autocomplete="off" required >


			</div>
			<div class="grupo">
				<label for="inputNombre">Nombre</label>
                
				<input type="text" id="titular" name="titular" maxlength="35" autocomplete="off" pattern="[a-z]{1,35}" required>
			</div>
			<div class="flexbox">
				<div class="grupo expira">
					<label for="selectMes">Fecha de expiracion</label>
					<div class="flexbox">
						<div class="grupo-select">
							<select name="mes" id="selectMes" required>
								<option disabled selected>Mes</option>
                                <option  >1</option>
                                <option  >2</option>
                                <option  >3</option>
                                <option  >4</option>
                                <option >5</option>
                                <option >6</option>
                                <option >7</option>
                                <option >8</option>
                                <option >9</option>
                                <option >10</option>
                                <option >11</option>
                                <option >12</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
						<div class="grupo-select">
							<select name="year" id="selectYear" required>
								<option disabled selected>Año</option>
                                <option >23</option>
                                <option >24</option>
                                <option >25</option>
                                <option >26</option>
                                <option >27</option>
							</select>
							<i class="fas fa-angle-down"></i>
						</div>
					</div>
				</div>

				<div class="grupo ccv">
					<label for="inputCCV">CCV</label>
					<input type="number" id="ccv" name="ccv" maxlength="3" required>
				</div>
			</div>

          <button type="submit" class="btn btn-primary btn-block">Pagar</button>
        </form>

        <?php if (isset($error)): ?>
          <div class="alert alert-danger mt-3" role="alert">
            <?php echo $error; ?>
          </div>
        <?php endif; ?>
        <hr>
        
      </div>
    </div>
  </div>


        
    </div>
    


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    






       

<?php

include 'foot.php';
?>
</body>
</html>
