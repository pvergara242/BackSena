<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('roles')->insert([
            'name' => 'superAdmin',
            'description' => 'Administrador general del sistema',
            'created_at' => '2020-10-09 13:42:02',
            'updated_at' => '2020-10-09 13:42:08',
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'admin del sistema',
            'created_at' => '2020-10-09 13:42:10',
            'updated_at' => '2020-10-09 13:42:14',
        ]);
        DB::table('roles')->insert([
            'name' => 'usuario',
            'description' => 'Usuario',
            'created_at' => '2020-10-09 13:42:18',
            'updated_at' => '2020-10-09 13:42:22',
        ]);
        DB::table('roles')->insert([
            'name' => 'gerente',
            'description' => 'Jefe de recursos',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3423jhgs',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@mail.com',
            'email_verified_at' => '2020-10-09 13:52:57',         
            'password' => bcrypt('123456'),
            'remember_token' => 'srsntr3fr423jhgs',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);

        DB::table('products')->insert([
            'CodigoProducto'            => 'fdsa',
            'nombreProducto'            => 'Tangas rojas',
            'CantidadProducto'          => '3',
            'consumo'                   => '1',
            'MercanciaVenta'            => '32',
            'produccionInterna'         => '3',
            'ManejaLotes'               => '3',
            'esServicio'                => '3',
            'productoActivo'            => '2',
            'DatosFabricante'           => 'De caucho',
            'Medidas'                   => 'XXXXXXX',
            'UbicacionFisica'           => 'los montes',
            'Referencia'                => 'debajo del palo de mango',
            'Presentacion'              => 'unica',
            'ProductoEquivalente'       => 'we',
            'StockMinimo'               => 'we',
            'StockMaximo'               => 'we',
            'TiempoReposicion'          => 'we',
            'CuentaInventarios'         => 'we',
            'CuentaContableIngreso'     => 'we',
            'CuentaContableIngresoAjuste' => 'we',
            'DevolucionVentas'          => 'we2',
            'DevolucionCompras'         => 'we2',
            'CuentaContableGasto'       => 'we',
            'CuentaContableGastoAjuste' => 'we',
            'ImpuestoCompras'           => 'we',
            'ImpuestoVentas'            => 'we',
        ]);

        DB::table('clients')->insert([
            'document' => '6634355454',
            'name' => 'Mercedes',
            'last_name' => 'Maria',
            'surname' => 'Perez',
            'last_surname' => 'Trujillo',
            'type' => '1',
            'razon_social' => 'Me llamo yo',
            'pais_code' => '+57',
            'departamento_code' => '1',
            'municipio_code' => '021',
            'address' => 'Cll de los amores con tristezas',
            'phone' => '316 423 8967',
            'email' => 'cliente@cliente.com',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);
        
        // DB::table('compras')->insert([
        //     'CodigoComprobante' => '001',
        //     'numeroFactura' => '001',
        //     'DetalleGeneral' => 'sdfghfdf',         
        //     'FechaCompra' => '20/11/2020',
        //     'CodigoTercero' => '003',
        //     'nombreTercero' => 'paola',
        //     'codigoProducto' => '2020',
        //     'nombreProducto' => 'argolla niquel',
        //     'Cantidades' => '1234567645',
        //     'unidadesDisponibles' => '1234556754',
        //     'CostoUnitarioCompra' => '123456763',
        //     'CostoTotalCompra' => '234567653',
        //     'Referencia' => 'pr345',
        //     'Presentacion' => 'asdfghhtrgdf',
        //     'Impuestos' => '1923456787545',
        //     'Porcentajeimpuesto' => '12345677632',
        //     'TotalImpuestos' => '1256743',
        //     'RetencionFuente' => 'sdfbjhre',
        //     'TiempoReposicion' => '12345675665',
        //     'PorcentajeRetefte' => '1234567754635',
        //     'TotalRetenciónFuente' => '1234567432',
        // ]);
        
<<<<<<< HEAD
        // DB::table('salidaProducto')->insert([
        //     'fechaSolicitud' => '6634355454',
        //     'area' => 'Mercedes',
            // 'codigoRegional' => 'Maria',
            // 'nombreRegional' => 'Perez',
            // 'codigoCentroCostos' => 'Trujillo',
            // 'nombreCentroCostos' => '1',
            // 'cordinadorArea' => 'Me llamo yo',
            // 'numeroDocumento' => '+57',
            // 'nombreServidorPublico' => '1',
            // 'numeroDocumentoServidor' => '021',
            // 'codigoFichaCaracterizacion' => 'Cll de los amores con tristezas',
            // 'codigoSena' => '316 423 8967',
            // 'descripcionBien' => 'cliente@cliente.com',
            // 'unidadMedida' => 'cliente@cliente.com',
            // 'cantidadSolicitada' => 'cliente@cliente.com',
            // 'observaciones' => 'cliente@cliente.com',
            // 'nombre' => 'cliente@cliente.com',
            // 'cargo' => 'cliente@cliente.com',
            // 'created_at' => '2020-10-09 13:42:26',
            // 'updated_at' => '2020-10-09 13:42:32',
        // ]);
=======
        DB::table('EntregaProducts')->insert([
            'fechaSolicitud' => '6634355454',
            'area' => 'Mercedes',
            'codigoRegional' => 'Maria',
            'nombreRegional' => 'Perez',
            'codigoCentroCostos' => 'Trujillo',
            'nombreCentroCostos' => '1',
            'cordinadorArea' => 'Me llamo yo',
            'numeroDocumento' => '+57',
            'nombreServidorPublico' => '1',
            'numeroDocumentoServidor' => '021',
            'codigoFichaCaracterizacion' => 'Cll de los amores con tristezas',
            'codigoSena' => '316 423 8967',
            'descripcionBien' => 'cliente@cliente.com',
            'unidadMedida' => 'cliente@cliente.com',
            'cantidadSolicitada' => 'cliente@cliente.com',
            'observaciones' => 'cliente@cliente.com',
            'nombre' => 'cliente@cliente.com',
            'cargo' => 'cliente@cliente.com',
            'created_at' => '2020-10-09 13:42:26',
            'updated_at' => '2020-10-09 13:42:32',
        ]);
>>>>>>> 04321013072fd6929ced6e3887ad637107003c8e
    }
}
