<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant de hamburguesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <!-- Sweet Alert 2 -->
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

	<!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <h1>Restaurant de hamburguesas</h1>
    <form action="php/conexion.php" method="post">
        <div>
            <span>Tipo de pan</span>
            <select name="pan">
                <option selected>Escoje una opción</option>
                <option value="artesanal">Pan artesanal</option>
                <option value="brioche">Pan brioche</option>
            </select>
        </div>

        <div>
            <span>Ingredientes de la hamburguesa</span>
            <select name="ingredientes">
                <option selected>Escoje una opción</option>
                <option value="pollo">Pollo</option>
                <option value="res">Res</option>
            <option value="arrachera">Arrachera</option>
        </select>
        </div>

        <div>
            <span>Complementos</span>
            <select name="papas">
                <option selected>Escoje una opción</option>
                <option value="papas_fritas">Papas fritas</option>
                <option value="papas_gajos">Papas en gajos</option>
            </select>
        </div>

        <div>
            <span>Bebidas</span>
            <select name="bebidas">
                <option selected>Escoje una opción</option>
                <option value="refresco">Refresco</option>
                <option value="aguas_frescas">Aguas frescas</option>
            </select>
        </div>

        <div class="boton" id="pedido">
            <button class="btn btn-primary" style=" background-color: #28A745; margin-top:5%;">Finalizar pedido</button>
        </div>

     <div id="totalPedido">
        <p>Total de la compra: $150.00</p>
        <p>Envio: $50.00</p>
        <p>Total por pagar: $200.00</p>
    </div>

    <div id="datosUsuario">

        <div>
            <span>Nombre</span>
            <input type="text" name="nombre" required>
        </div>

        <div>
            <span>Dirección</span>
            <input type="text" name="direccion" required>
        </div>

        <div>
            <span>Teléfono</span>
            <input type="number" name="telefono" required>
        </div>

        <div class="boton" id="compra">
            <button type="submit" value="enviar" class="btn btn-primary" style=" background-color: #28A745; margin-top:5%;">Finalizar compra</button>
        </div>

    </div>   
       

    </form>


</body>
</html>