<!DOCTYPE html>
<html>
<head>
<style>
    .center{
        text-align: center;
    }
    .textred{
        color: red;
    }
</style>
<script src="content/pixi.min.js"></script>
<title>Man of War Np0.1</title>

</head>
<body>
<h1 class="center textred">index.php</h1>
<script>
    let type="WebGL";
    if(!PIXI.utils.isWebGLSupported()){
        type="canvas";
    }
    PIXI.utils.sayHello(type);
</script>
</body>
<footer>

</footer>
</html>