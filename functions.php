<?php
$errors_file = [

  1 => "La foto de perfil excede el tamaño permitido",
  2 => "La foto de perfil excede el tamaño permitido en el front",
  3 => "la fot de perfil fue parcialmente subida",
  4 => "no se subio la foto de perfil",
  6 => "falta la carpeta temporal",
  7 => "no se puede escibir el fichero en el disco, verificar permisos de la PC ",
  8 => "otra aplicacion detuvo la subida del archivo , verificar configuaracion del servidor ",


];

$persistence = [
  "name",
  "lastname",
  "username",
  "useremail",
];

$errors;

function doSave($values,$photo){
  validData($values);
  insertInJson($values,$photo);
}

function validData($values){
  global $errors;

  $translate = [
    "name"=>"Nombre",
    "lastname"=>"Apellido",
    "username"=>"Nombre de Usuario",
    "useremail"=>"Correo electronico",
    "pass"=>"contraseña",
    "equals_pass"=>"Repetir contraseña"
  ];

  foreach ($values as $key => $value) {
    if (empty($values[$key]))
      $errors .="El campo $translate[$key] es requerido <br>";
      else
        setcookie($key, $values[$key]);
  }

  if ($errors !="") {
    setcookie('errors', $errors, time()+5);
    Redirect();
  }
}



function insertInJson($user , $photo){
  global $errors;

  $file = "users.json";
  $db=file_get_contents($file);
  $data=json_decode($db,true);

  $pathPhoto=savePhoto($photo);

  if (is_array($pathPhoto)){
    $errors=$pathPhoto['error'];
  }
  var_dump ($data);
  if (array_key_exists($user["useremail"],$data))
    $errors="Email esta en uso";

    if($user["pass"]!=$user["equals_pass"])
    $errors ="las contraseñas no son iguales";

    if ($errors !="") {
      setcookie('errors', $errors, time()+5);
      Redirect();
    }

    $new_user =[
      "name"      =>$user["name"],
      "lastname"  =>$user["lastname"],
      "username"  =>$user["username"],
      "useremail"=>$user["useremail"],
      "pass"     =>md5($user["pass"]),
      "photo"    =>$pathPhoto
    ];

    $data[$user["useremail"]]=$new_user;

    $data=json_encode($data);
    file_put_contents($file,$data);

    setcookie('success', "regitro exitoso", time()+5);
    Redirect("delete_cookies.php");


}
function savePhoto($photo){
    global $errors_file;
    if ($photo["profile_pic"]["error"] == UPLOAD_ERR_OK){
      $name=$photo["profile_pic"]["name"];
      $Picture=$photo["profile_pic"]["tmp_name"];
      $ext=pathinfo($name, PATHINFO_EXTENSION);

      if($ext=="jpg"||$ext=="jpeg"||$ext=="png"){
        $today=new DateTime("now");
        $name_pic=date_format($today,"YmdHis")."_profile.";
        $path_and_name=dirname(__FILE__)."/img/".$name_pic .$ext;
        move_uploaded_file($Picture,$path_and_name);
        return $name_pic . $ext;
      }
      else {
        return[
          'error'=> "El tipo de archivo no es valido (utilizar los predeterminados)"
        ];
      }
    }
 else {
  return[
    'error'=> $errors_file[$photo["profile_pic"]["error"]]
  ];
} }

function Redirect($url = "sign-up.php",$parameters = false){
  header("location: $url", true, $parameters ? 301 : 302);
  exit();
}


 ?>
