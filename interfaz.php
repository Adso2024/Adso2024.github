<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Facturación Autolight Colombia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            margin-top: 10px;
            padding: 0;
            background-image: url(imagenes/auto.jpg);
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center;
            height: 100vh; 
            width: 100%;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;

        }

        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
            margin-top: 15px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-around;
        }

        nav li {
            position: relative;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        nav a:hover {
            background-color: silver;
        }

        nav ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #333;
        }

        nav ul li:hover > ul {
            display: inherit;
        }

        nav ul ul li {
            width: 200px;
            float: none;
            display: list-item;
            position: relative;
        }

        nav ul ul ul li {
            position: relative;
            top: -60px;
            left: 200px;
        }

        section {
            padding: 20px;
        }
    </style>
</head>
<body>

    <header>
        <h1>SISTEMA DE FACTURACION AUTOLIGHT COLOMBIA</h1>
    </header>

    <nav>
        <ul>
            <li><a href="prototipo1.html">Clientes</a></li>           
            <li><a href="prototipo2.html">Empresas</a></li>
            <li><a href="prototipo3.html">Facturación</a></li>
            <li><a href="prototipo4.html">Productos</a></li>
            <li><a href="prototipo5.html">Transacciones</a></li>
            <li><a href="cerrar_sesion.php">Cierre de Sesión</a></li>
    </nav>

    <section>
        <!-- Contenido de la página -->
    </section>

</body>
</html>
