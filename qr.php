<!DOCTYPE html>
<html>
<head>
  <title>Generador de QR</title>
  <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>
  <div id="qrcode"></div>
  <button id="download">Descargar como PNG</button>
  <script>
    // Crear el código QR
    var qrcode = new QRCode(document.getElementById("qrcode"), {
      text: "https://x-techgt.com/catalogo2/",
      width: 450,
      height: 450
    });

    // Función para descargar el código QR como PNG
    document.getElementById("download").addEventListener("click", function() {
      var canvas = document.querySelector("#qrcode canvas");
      var img = canvas.toDataURL("image/png");

      var link = document.createElement('a');
      link.href = img;
      link.download = 'qrcode.png';
      link.click();
    });
  </script>
</body>
</html>