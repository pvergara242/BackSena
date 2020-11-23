
  
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
        <h2 className="title-form" style="text-align: center;"> REGISTRO DE COMPRA</h2>
       
        <fieldset className="contanier-fieldset" style="height: 200px; text-align: center; ">      
            <label for="CodigoComprobante" type="number">Codigo Comprobante</label>
            <input id="CodigoComprobante" className="input-field" placeholder="CodigoComprobante"></input>
            <br>
            <label for="numeroFactura"  type="number" >Número de Factura</label>
            <input id="numeroFactura" className="input-field" placeholder="numeroFactura"></input>
            <br>
            <label for="DetalleGeneral">Detalle General</label>
            <input id="DetalleGeneral" className="input-field" placeholder="DetalleGeneral"></input>
            <br>
            <label for="FechaCompra" type="date">Fecha de Compra</label>
            <input id="FechaCompra" className="input-field" placeholder="FechaCompra"></input>
            <br>
            <label for="CodigoTercero">Codigo Tercero</label>
            <input id="CodigoTercero" className="input-field" placeholder="CodigoTercero"></input>   
            <br>
            <label for="nombreTercero">nombre Tercero</label>
            <input id="nombreTercero" className="input-field" placeholder="nombreTercero"></input>   >   
            <br>
            <label for="codigoProducto">codigo Producto</label>
            <input id="codigoProducto" className="input-field" placeholder="codigoProducto"></input>     
            <br>
            <label for="nombreProducto">nombre Producto</label>
            <input id="nombreProducto" className="input-field" placeholder="nombreProducto"></input>   
            <br>
            <label for="Cantidades">Cantidades</label>
            <input id="Cantidades" className="input-field" placeholder="Cantidades"></input>   
            <br>
            <label for="unidadesDisponibles">unidades Disponibles</label>
            <input id="unidadesDisponibles" className="input-field" placeholder="unidadesDisponibles"></input>   
            <br>
            <label for="CostoUnitarioCompra">Costo Unitario de la Compra</label>
            <input id="CostoUnitarioCompra" className="input-field"placeholder="CostoUnitarioCompra"></input>   
            <br>
            <label for="CostoTotalCompra">Costo TotalC ompra</label>
            <input id="CostoTotalCompra" className="input-field"placeholder="CostoTotalCompra"></input>   
            <br>
            <label for="Referencia">Referencia</label>
            <input id="Referencia" className="input-field"placeholder="Referencia"></input>   
            <br>
            <label for="Impuestos">Impuestos</label>
            <input id="Impuestos" className="input-field" placeholder="Impuestos"></input> 
            <br>
            <label for="Porcentajeimpuesto">Porcentaje impuesto</label>
            <input id="Porcentajeimpuesto" className="input-field"placeholder="Porcentajeimpuesto"></input>   
            <br>
            <label for="TotalImpuestos">TotalImpuestos</label>
            <input id="TotalImpuestos" className="input-field"placeholder="TotalImpuestos"></input>   
            <br>
            <label for="RetencionFuente">Retencion Fuente</label>
            <input id="RetencionFuente" className="input-field"placeholder="RetencionFuente"></input>   
            <br>
            <label for="TiempoReposicion">Tiempo Reposicion</label>
            <input id="TiempoReposicion" className="input-field"placeholder="TiempoReposicion"></input>   
            <br>
            <label for="PorcentajeRetefte">Porcentaje Retefte</label>
            <input id="PorcentajeRetefte" className="input-field"placeholder="Porcentaje Retefte"></input>   
            <br>
            <label for="TotalRetenciónFuente">Total Retención de la Fuente</label>
            <input id="TotalRetenciónFuente" className="input-field"placeholder="Total Retención de la Fuente"></input>   
        </fieldset>
       
        <div className="form-buttons"> 
          <button className="form-button" style="margin-left: 300px; margin-top: 30px;">Cancelar</button>
          <button className="form-button">Registar</button>
        </div>
        
      </form>
   
    
</body> 
</html>
