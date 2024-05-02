<?php

require_once "modelos/conexion.php";

function retrieveQuotation($quotation) {
    try {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM `cotizaciones` WHERE `id_cotizacion` = :valor");
        $stmt->bindParam(":valor", $quotation, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Imprimir mensaje de error en caso de error en la consulta
        echo "Error en la consulta: " . $e->getMessage();
        return false; // Devolver false en caso de error
    }
}
?>