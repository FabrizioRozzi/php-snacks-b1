<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack-2</title>
</head>
<body>
  <?php 
    $data=$_GET;

    if(strlen($data['name']) <= 2 ){
      echo "nome Accesso negato";
    }elseif(strpos( $data['mail'] , '@' ) === false || strpos( $data['mail'], '.' ) === false){
        echo "email Accesso negato";
      }elseif(!is_numeric($data['age'])){
          echo "anni Accesso negato";
        }else{
          echo "Accesso consentito";
        }
      
      
   

  ?>
</body>
</html>