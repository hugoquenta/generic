//-- This code returns the dimensions of an image based on a parameter as a limit, for example if we do not want the image to measure more than 300 px in both dimensions, the width, height and the parameter are sent.
//-- Este codigo devuelve las dimensiones de una imagen en base a un parametro como limite, ejemplo si no queremos que la imagen mida mas de 300 px en ambas dimensiones, se envia  el ancho, alto y el parametro. 
public function val_area($ancho_o,$alto_o,$param)
    { $resp = "";
      $ancho_n = 0;
      $alto_n = 0;
      if($ancho_o>$param || $alto_o>$param)
        { if($ancho_o > $alto_o)
            { $ancho_n = $param;
              //$alto_n = (int)($alto_o * ((float)$param / (float)$ancho_o));
              $alto_n =ceil($alto_o * ($param /$ancho_o));
            }
          else
            { $alto_n = $param;
              $ancho_n = ceil($ancho_o*($param/$alto_o));
            }
          $resp = "" . $ancho_n . "|" . $alto_n;
        }
      else
        { $resp = "" . $ancho_o . "|" . $alto_o;
        }
      return $resp;
    }
