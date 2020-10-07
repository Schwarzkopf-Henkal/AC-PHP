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
    *{
        padding: 0;
        margin: 0;
    }
</style>
<title>Man of War Np0.1</title>

</head>
<script src="content/pixi.min.js"></script>
<body>
<!-- <h1 class="center textred">index.php</h1> -->
<script type="text/javascript">
    let type="WebGL";
    if(!PIXI.utils.isWebGLSupported()){
        type="canvas";
    }
    PIXI.utils.sayHello(type);
    // console.log(document.body.clientWidth);
    // console.log(document.body.clientHeight);
    let app=new PIXI.Application({width:screen.availWidth-30,height:screen.availHeight-130,antialias:true});
    document.body.appendChild(app.view);
    app.renderer.view.style.position="absolute";
    app.renderer.view.style.display="block";
    app.renderer.autoResize=true;
    app.renderer.resize(window.innerWidth,window.innerHeight);
    let texture=PIXI.utils.TextureCache["content/DG.jpg"];
</script>
</body>
</html>