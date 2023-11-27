<?php
// Cargando la configuración de PrestaShop
require dirname(__FILE__) . '/config/config.inc.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inicializar la variable $marca
$marca = 0;

// Abriendo el archivo CSV
if (($gestor = fopen("products.csv", "r")) !== FALSE) {
    // Omitir la primera línea (encabezados)
    fgetcsv($gestor);

    while (($datos = fgetcsv($gestor, 0, ",")) !== FALSE) {
        // Verificar si el índice 10 existe antes de acceder a él
        $marca = isset($datos[10]) ? (int)$datos[10] : 0; // Si no está definido, se establece como 0

        // Procesando los datos del CSV
        $active = (int)$datos[1]; // Convertir a entero
        $reference = pSQL($datos[3]); // Sanitizar datos para evitar SQL Injection
        $nombre = pSQL($datos[2]); // Sanitizar datos para evitar SQL Injection
        $ean13 = pSQL($datos[4]); // Sanitizar datos para evitar SQL Injection
        $price = (float)$datos[6]; // Convertir a flotante
        $quantity = (int)$datos[8]; // Convertir a entero

        // Ejecutar la inserción de datos directamente utilizando Db::getInstance()->execute()
        $sql = "INSERT INTO " . _DB_PREFIX_ . "product 
                (active, reference, Nombre, ean13, price, quantity) 
                VALUES ('$active', '$reference', '$nombre', '$ean13', '$price', '$quantity')";
	
				if (!Db::getInstance()->execute($sql)) {
					$error = Db::getInstance()->getMsgError();
					echo 'Error al insertar datos: ' . $error;
					break; // Detener el bucle si hay un error
				}
				
    }
		
    fclose($gestor);
    echo 'Proceso completado. Los productos han sido importados correctamente.';
} else {
    echo 'Error al abrir el archivo CSV.';
}
?>
