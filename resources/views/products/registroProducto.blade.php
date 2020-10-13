<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTABILIDAD SENA</title>
    <link rel="stylesheet" href="./assets//css/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check" >
    <!-- header inicio -->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>CD<span>MC</span></h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!-- header fin  -->
    <!-- sidebar inicio -->
    <div class="sidebar">
        <center>
            <img src="./assets/images/logo.jpg" class="profile_image" alt="">
            <h4>CONTABILIDAD SENA</h4>
        </center>
        <a href="./Ventas.html"><i class="fas fa-shopping-cart"></i><span>Ventas</span></a>
        <a href="./RegistroClientes.html"><i class="fas fa-users"></i><span>Registro clientes</span></a>
        <a href="./RegistroInventario.html"><i class="fas fa-dolly-flatbed"></i><span>Registro inventario</span></a>
        <a href="./Compras.html"><i class="fas fa-shopping-basket"></i><span>Compras</span></a>
        <a href="./Productos.html"><i class="fas fa-shopping-basket"></i><span>Registro de productos</span></a>
    </div>
    <!-- sidebar fin  -->
    
    <form className="container-form"style="margin-top:100px; margin-left:420px;
    width: 60%; justify-content: center;">
        <h2 className="title-form" style="text-align: center;"> REGISTRO DE PRODUCTOS</h2>
        <fieldset className="contanier-fieldset">
          <label for="codigo">Código</label>
          <input id="codigo" className="input-field" type="text" placeholder="Código"></input>
          <label for="unidad">Unidad</label>
          <input id="unidad" className="input-field" placeholder="Unidad" style="width: 55%;"></input>
          <br>
          <br>
          <label for="nombre"></label>Nombre del producto</label>
          <input id="nombre" className="input-field" placeholder="Nombre" style="width: 70%;"></input>
        
        </fieldset>
        <fieldset className="contanier-fieldset" style="height: 140px;">      
            <label for="tipo">Tipo de inventario</label>
            <input id="tipo" className="input-field" placeholder="Tipo"  style="margin-left: 240px; width: 40%;"></input>
            <br>
            <label for="description" >Descripción</label>
            <input id="description" className="input-field" placeholder="Escriba la descripción del producto "  style="margin-left: 280px;width: 40%;"></input>
            <br>
            <label for="especificacion">Especificaciones</label>
            <input id="especificacion" className="input-field" placeholder="Escriba espacificaciones del producto "  style="margin-left: 245px;width: 40%;"></input>
            <br>
            <label for="cantidad" type="text">Cantidad</label>
            <input id="cantidad" className="input-field" placeholder="Cantidad" style="margin-left: 300px;width: 40%;"></input>
            <br>
            <label for="equivalente">Productos equivalentes</label>
            <input id="equivalente" className="input-field" style="margin-left: 200px;width: 40%;"></input>        
        </fieldset>
       
        <div className="form-buttons" style="margin-left: 300px; margin-top: 30px;"> 
          <button className="form-button">Cancelar</button>
          <button className="form-button">Registrar</button>
        </div>
        
      </form>
    
</body> 
</html>