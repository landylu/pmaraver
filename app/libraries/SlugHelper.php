<?php

class SlugHelper
{
    
    
   public static function  url_slug($str)
  {
      # Convierte todo a minúscula
      $str = strtolower($str);
      
      # Caracteres en español (Aquí en este arreglo incluí muchos que no son del uso
      # en español pero son símbolos que pueden ser sustituidos por vocales o consonantes y cumplir su función)
      $tabla = array(
	  'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'C'=>'C', 'c'=>'c', 'C'=>'C', 'c'=>'c',
	  'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
	  'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
	  'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'S',
	  'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
	  'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
	  'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
	  'ÿ'=>'y', 'R'=>'R', 'r'=>'r', ','=>''
      );
      
      # Reemplazamos lo antes establecido
      $str = strtr($str, $tabla);
      
      # Removemos caracteres especiales que no hayan sido sustituidos anteriormente
      $str = preg_replace('/[^a-zA-Z0-9]/i',' ', $str);
      
      # Removemos si existen espacios en blanco en los extremos 
      $str = trim($str);
      
      # Rellenamos espacios con guiones
      $str = preg_replace('/\s+/', ' ', $str);
      $str = preg_replace('/\s+/', '-', $str);
      
      return $str;
  }
}
