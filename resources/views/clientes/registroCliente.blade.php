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
            <h3>CD  <span>MC</span></h3>
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
    
    <form className="container-form" style="margin-top:100px; margin-left:420px;
    width: 60%; justify-content: center;">
        <h2 className="title-form" style="text-align: center;"> REGISTRO DE CLIENTES</h2>
       
        <fieldset className="contanier-fieldset" style="height: 200px; text-align: center; ">      
            <label for="documento">Tipo de documento</label>
            <input id="documento" className="input-field" placeholder="documento"></input>
            <br>
            <label for="numero"  type="number" >Número de documento</label>
            <input id="numero" className="input-field" placeholder="Ingrese # documento"></input>
            <br>
            <label for="nombre">Nombre</label>
            <input id="nombre" className="input-field" placeholder="Nombre"></input>
            <br>
            <label for="telefono" type="number">Telefono</label>
            <input id="telefono" className="input-field" placeholder="Telefono"></input>
            <br>
            <label for="direccion">Dirección</label>
            <input id="direccion" className="input-field"></input>        
        </fieldset>
       
        <div className="form-buttons"> 
          <button className="form-button" style="margin-left: 300px; margin-top: 30px;">Cancelar</button>
          <button className="form-button">Registar</button>
        </div>
        
      </form>
   
    
</body> 
</html>