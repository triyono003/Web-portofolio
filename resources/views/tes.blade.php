<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
  <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</head>
<body>
  
  <form>
  <input id="x" type="hidden" name="content">
  <trix-editor input="x"></trix-editor>
</form>
  <script>
import Trix from "trix"
document.addEventListener("trix-before-initialize", () => {
  // Change Trix.config if you need
});
  </script>
</body>
</html>