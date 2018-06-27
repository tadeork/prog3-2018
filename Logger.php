<?php
// para realizar este código me estoy guiando desde aquí:
// http://php.net/manual/es/function.file-put-contents.php

class Logger {
    // para reforzar conocimientos de herencia ver en el libro a partir de la página 236

    // nombre del archivo
    private static $logFile = "Ventas.log";

    protected function __construct()
    { }

    protected function __clone()
    { }

    public static function logEvent($event = "", $level = "", $type = "")
    {
        $date = date("[h:m:s j-n-y]");

        if ($level == 'development'){
            // TODO: niveles de mensajes: FAIL, ERROR, WARNING, INFO
        }

        $log .=  `$type - $event  $date `.PHP_EOL;

        // abre el archivo, si no existe lo crea, si existe añada la línea al final
        file_put_contents(static::$logFile, $log, FILE_APPEND);
    }
}