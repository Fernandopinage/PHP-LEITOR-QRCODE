<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRcode</title>
</head>
<body>
 

<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script> <!-- caminho da leitura da biblioteca -->
<video id="preview"></video> <!-- para iniciar a janera do leitor -->
    
<input type="text" id="textqrcode">
<input type="text" id="textqrcode2">
<div id="conteudo"></div>
<script>

let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        console.log(content);// leitura no console log
        var input1 = document.getElementById('textqrcode').value = content;
        if(input1 != null){
        var input1 = document.getElementById('textqrcode2').value = content;
      }
    
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

     



</script>
</body>
</html>