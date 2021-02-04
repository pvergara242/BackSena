
  
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
        <a href="./entregaProductos.html"><i class="fas fa-shopping-basket"></i><span>Registro de productos</span></a>
    </div>
    <!-- sidebar fin  -->
    
    <form className="container-form" style="margin-top:100px; margin-left:420px;
    width: 60%; justify-content: center;">
        <h2 className="title-form" style="text-align: center;"> REGISTRO DE PRODUCTOS</h2>
       
        <fieldset className="contanier-fieldset" style="height: 200px; text-align: center; ">      
            <label for="CodigoProducto">Codigo Producto</label>
            <input id="CodigoProducto" className="input-field" placeholder="CodigoProducto"></input>
            <br>
            <label for="nombreProducto"  type="text" >nombre Producto</label>
            <input id="nombreProducto" className="input-field" placeholder="nombreProducto"></input>
            <br>
            <label for="CantidadProducto">Cantidad Producto</label>
            <input id="CantidadProducto" className="input-field" placeholder="Cantidad Producto"></input>
            <br>
            <label for="consumo" type="text">consumo</label>
            <input id="consumo" className="input-field" placeholder="consumo"></input>
            <br>
            <label for="MercanciaVenta">Mercancia Venta</label>
            <input id="MercanciaVenta" className="input-field"></input>     
            <br>
            <label for="produccionInterna">produccion Interna</label>
            <input id="produccionInterna" className="input-field"></input>   
            <br>
            <label for="ManejaLotes">Maneja Lotes?</label>
            <input id="ManejaLotes" className="input-field"></input>   
            <br>
            <label for="esServicio">es Servicio?</label>
            <input id="esServicio" className="input-field"></input>   
            <br>
            <label for="productoActivo">producto Activo</label>
            <input id="productoActivo" className="input-field"></input>   
            <br>
            <label for="DatosFabricante">Datos Fabricante</label>
            <input id="DatosFabricante" className="input-field"></input>   
            <br>
            <label for="Medidas">Medidas</label>
            <input id="Medidas" className="input-field"></input>   
            <br>
            <label for="UbicacionFisica">Ubicacion Fisica</label>
            <input id="UbicacionFisica" className="input-field"></input>   
            <br>
            <label for="Referencia">Referencia</label>
            <input id="Referencia" className="input-field"></input>   
            <br>
            <label for="Presentacion">Presentacion</label>
            <input id="Presentacion" className="input-field"></input> 
            <br>
            <label for="ProductoEquivalente">Producto Equivalente</label>
            <input id="ProductoEquivalente" className="input-field"></input>   
            <br>
            <label for="StockMinimo">Stock Minimo</label>
            <input id="StockMinimo" className="input-field"></input>   
            <br>
            <label for="StockMaximo">Stock Maximo</label>
            <input id="StockMaximo" className="input-field"></input>   
            <br>
            <label for="TiempoReposicion">Tiempo Reposicion</label>
            <input id="TiempoReposicion" className="input-field"></input>   
            <br>
            <label for="CuentaInventarios">Cuenta Inventarios</label>
            <input id="CuentaInventarios" className="input-field"></input> 
            <br>
            <label for="CuentaContableIngreso">Cuenta Contable Ingreso</label>
            <input id="CuentaContableIngreso" className="input-field"></input>   
            <br>
            <label for="CuentaContableIngresoAjuste">Cuenta Contable Ingreso Ajuste</label>
            <input id="CuentaContableIngresoAjuste" className="input-field"></input>   
            <br>
            <label for="CuentaContableGastoAjuste">Cuenta Contable Gasto Ajuste</label>
            <input id="CuentaContableGastoAjuste" className="input-field"></input>   
            <br>
            <label for="ImpuestoCompras">Impuesto Compras</label>
            <input id="ImpuestoCompras" className="input-field"></input>   
            <br>
            <label for="ImpuestoVentas">Impuesto Ventas</label>
            <input id="ImpuestoVentas" className="input-field"></input> 

        </fieldset>
       
        <div className="form-buttons"> 
          <button className="form-button" style="margin-left: 300px; margin-top: 30px;">Cancelar</button>
          <button className="form-button">Registar</button>
        </div>
        
      </form>
   
    
</body> 
</html>
