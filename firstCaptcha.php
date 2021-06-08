<?php 



   if(isset($_POST['submit'])){
      $secretKey = "6LdbtRgbAAAAAKLNJ1tlZdH6CZXRyliqjvJAPXTA";
      $responseKey = $_POST["g-recaptcha-response"];
      $userIP = $_SERVER['REMOTE_ADDR'];

      $url = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$responseKey}&remoteip={$userIP}";
      $response = file_get_contents($url);
      $response = json_decode($response);
      if ($response->success) {
          echo $response->challenge_ts;
            header("Location: card/formulario-tarjeta-credito-3d/index.php"); 
         exit;
      }else{
         echo "Debes marcar el captcha, tienes 10 segundos";
      }
   } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://www.google.com/recaptcha/api.js?hl=es'></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="tailwind.css">
    <link rel="stylesheet" href="styles/custom.css">
    <title>Captcha 1</title>
</head>
<body class="bg-white">
    <div class="min-h-screen bg-gray-100 p-0 sm:p-12">
            <div class="mx-auto max-w-md px-6 py-12 bg-white border-0 shadow-lg sm:rounded-3xl">
                <h1 class="text-2xl font-bold mb-8">Cobros/Depósitos de Pagos Ántrax S.A. de C.V.</h1>
                <form action="" method="post">
                    <div class="g-recaptcha" data-sitekey="6LdbtRgbAAAAAOYzV5cB-O8FzVN_l2F077VvxEuZ"></div>
                    <input type="submit" name="submit" value="Avanzar" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-green-400 hover:bg-green-600 hover:shadow-lg focus:outline-none">
                </form>
            </div>
    </div>
</body>
</html>