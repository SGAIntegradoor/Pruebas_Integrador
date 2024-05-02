<?php

    require_once "conexion.php";

    class ModeloAlertaAseguradora {
        static public function mdlObtenerAlertas($cotizacion) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM alertas_aseguradoras WHERE cotizacion = :cotizacion");
            $stmt->bindParam(':cotizacion', $cotizacion, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        }
    }
