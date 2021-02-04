
  
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
        <a href="./entregaProductos.html"><i class="fas fa-shopping-basket"></i><span>Registro de entrega de productos</span></a>
    </div>
    <!-- sidebar fin  -->
    
    <form className="container-form" style="margin-top:100px; margin-left:420px;
    width: 60%; justify-content: center;">
        <h2 className="title-form" style="text-align: center;"> REGISTRO DE PRODUCTOS</h2>
       
        <fieldset className="contanier-fieldset" style="height: 200px; text-align: center; ">      
            <label for="fechaSolicitud">Fecha de Solicitud</label>
            <input id="fechaSolicitud" className="input-field" placeholder="Fecha de Solicitud"></input>
            <br>
            <label for="area"  type="text" >Area</label>
            <input id="area" className="input-field" placeholder="Area"></input>
            <br>
            <label for="codigoRegional">Codigo Regional</label>
            <input id="codigoRegional" className="input-field" placeholder="Codigo Regional"></input>
            <br>
            <label for="nombreRegional" type="text">Nombre Regional</label>
            <input id="nombreRegional" className="input-field" placeholder="Nombre Regional"></input>
            <br>
            <label for="codigoCentroCostos">Codigo del Centro de Costos</label>
            <input id="codigoCentroCostos" className="input-field"></input>     
            <br>
            <label for="nombreCentroCostos">Nombre del Centro de Costos</label>
            <input id="nombreCentroCostos" className="input-field"></input>   
            <br>
            <label for="coordinadorArea">Coordinador Area</label>
            <input id="coordinadorArea" className="input-field"></input>   
            <br>
            <label for="numeroDocumento">Numero de Documento</label>
            <input id="numeroDocumento" className="input-field"></input>   
            <br>
            <label for="nombreServidorPublico">Nombre del Servidor Publicoo</label>
            <input id="nombreServidorPublico" className="input-field"></input>   
            <br>
            <label for="numeroDocumentoServidor">Numero de Documento del Servidor</label>
            <input id="numeroDocumentoServidor" className="input-field"></input>   
            <br>
            <label for="codigoFichaCaracterizacion">Codigo Ficha de Caracterizacion</label>
            <input id="codigoFichaCaracterizacion" className="input-field"></input>   
            <br>
            <label for="codigoSena">Codigo Sena</label>
            <input id="codigoSena" className="input-field"></input>   
            <br>
            <label for="descripcionBien">Descripcion del Bien</label>
            <input id="descripcionBien" className="input-field"></input>   
            <br>
            <label for="unidadMedida">Unidad de Medida</label>
            <input id="unidadMedida" className="input-field"></input> 
            <br> 
            <label for="cantidadSolicitada">Cantidad Solicitada</label>
            <input id="cantidadSolicitada" className="input-field"></input>   
            <br>
            <label for="cantidadEntregada">Cantidad de Entregada</label>
            <input id="cantidadEntregada" className="input-field"></input>   
            <br>
            <label for="observaciones">Observaciones</label>
            <input id="observaciones" className="input-field"></input>   
            <br>
            <label for="nombre">Nombre</label>
            <input id="nombre" className="input-field"></input>   
            <br>
            <label for="cargo">Cargo</label>
            <input id="cargo" className="input-field"></input> 

        </fieldset>
       
        <div className="form-buttons"> 
          <button className="form-button" style="margin-left: 300px; margin-top: 30px;">Cancelar</button>
          <button className="form-button">Registar</button>
        </div>
        
      </form>
   
    
</body> 
</html>
