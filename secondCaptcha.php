

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
                <form  id="form">
                    <h2 id="text">Ingresa el contenido del captcha</h2>
                    <input id="input2" class="border-black border-2" type="text" name="" id="">
                    <h2 id="msj" class="hidden text-center text-red-500">Ingresa el captcha correctamente, el captcha es case Sensitive</h2>
                    <div id="div">
                        <div>
                            
                        </div>
                    </div>
                    <input id="input" type="submit" name="submit" value="Avanzar" class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear rounded-lg shadow outline-none bg-green-400 hover:bg-green-600 hover:shadow-lg focus:outline-none">
                </form>
            </div>
    </div>
    <script>
        const titulo = document.getElementById("text");
        const parentForm = document.getElementById("form");
        const div = document.getElementById("div");
        const input = document.getElementById("input");
        const msj = document.getElementById("msj");
        

        input.addEventListener("click", (e)=>{
            e.preventDefault();
            let valor = String(input2.value);
            console.log(valor)
            if (returnResponse(arr,valor,numRandom)) {
                window.location.href = "complete.html";
            } else {
                setTimeout(() => {
                    msj.classList.toggle("hidden");
                }, 1500);
            }
        })

        function randomInteger(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        var numRandom = randomInteger(0,1);
        var img = document.createElement("img");
        img.src = `assets/${numRandom}.png`;
        div.appendChild(img)

        let valor = String(input2.value);
        console.log(valor)



        const arr = ["UTDLYD", "HLDZSRE"];

        
        function returnResponse(arr, value, numRandom) {
            console.log(arr[numRandom])
            if(arr[numRandom] == value) {
                return true;
            }else{
                return false;
            }
        }
        
        
        


/* 
        var img = document.createElement("img");
        img.src = "http://www.google.com/intl/en_com/images/logo_plain.png";
        var src = document.getElementById("header");
        src.appendChild(img);
        <div id="header"></div>  */

    </script>
</body>


</html>