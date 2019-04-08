<?php

class Appointment
{
    private $fields ;
    private $db_handler ;
    private $data ;
    private $path;
    const SALTO_LINEA = "\n";

     public function __construct()
     {
         $this->dbh = '';
         $this->path = SITE_ROOT . 'db';
         fclose(fopen($this->path ,"a"));
     }

     function open($modo){
       $file = fopen($this->path, $modo);
       if(!$file) die("No se pudo abrir el archivo");
       return $file;
     }

     function close($file){
       fclose($file);
     }

     function add($data){
       //Obtengo el ultimo id del archivo persistor
       $data['id'] = $this->getLastID()+1;
       //Abro el archivo
       $file = $this->open("a");
       //Escribo
       fwrite($file,$this->_serializeData($data));
       $this->close($file);

     }

     function get($id=null){

       $file = $this->open("r");
       $rows = array();
       //Itero sobre el achivo
       $line = fgets($file);
       while(! feof($file))
       {
         //Deserializo la data
         $row = $this->_unserializeData($line);
         if(isset($id))
         //Si busco por id en particular devuelvo la fila
          if($id==$row['id'])
            return $row;
          //Armo array de filas
          $rows[] = $row;
          $line = fgets($file);
       }
       $this->close($file);
       return $rows;
     }

     private function _serializeData($data){
       $line = '';
       $line .= serialize($data);
       $line .= self::SALTO_LINEA;
       return $line;
     }

     private function _unserializeData($line){
       return unserialize($line);
     }


     function getLastID(){
       $datos = $this->get();
       if(!isset($datos) || !is_array($datos))
         return 0;
      //Me quedo con todas las columnas con nombre ID
       $ids = array_column($datos,'id');
       //Mapeo a int para sacar el maximo despues
       $int_ids = array_map('intval',$ids);
       //Devuelvo el maximo
       return max($int_ids);
     }



}
