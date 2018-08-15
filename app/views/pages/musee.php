
<style type="text/css">
    body {
        font-family: Esmeralda Pro;
        background-color: black;
    }

    /*!*.showcase {*!*/
        /*!*height: 570px;*!*/
        /*!*width: 100%;*!*/
        /*!*background-image: url("images/WrightTea_Bar.png");*!*/
        /*!*background-position: bottom;*!*/
    /*!*}*!*/

    /*.title {*/
        /*font-size: 50px;*/
        /*color: #fff;*/
        /*margin-bottom: 0;*/
        /*text-transform: uppercase;*/
        /*letter-spacing: 6px;*/
    /*}*/

    /*.title span {*/
        /*display: inline-block;*/
        /*position: relative;*/
    /*}*/

    /*.title span:before {*/
        /*content: "";*/
        /*position: absolute;*/
        /*height: 0px;*/
        /*border-top: 2px solid #D2BC76;*/
        /*top: 58px;*/
        /*width: 100px;*/
        /*right: 100% !important;*/
        /*margin-right: 7px;*/
    /*}*/

    /*.subtitle {*/
        /*font-size: 20px;*/
        /*color: #D2BC76;*/
        /*float: left;*/
    /*}*/
    .musee{
        height: 675px;
        background-color: white;
        margin-bottom: 100px;
    }
</style>
<div class="showcase d-flex align-items-center justify-content-center">
    <div class="col-md-6 offset-md-3">
        <h1 class="h-zantit color-white noselect"><?= OUR_ROOMS_TITLE ?></h1>
        <div class="sub-title noselect"><?= OUR_ROOMS_SUB_TITLE ?></div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 musee multiple-scenes">
        	<div id="pano"></div>
        	<div id="sceneList">
  <ul class="scenes">
    
      <a href="#" class="scene" data-id="0-33050969414_980e027dcf_k">
        <li class="text">33050969414_980e027dcf_k</li>
      </a>
    
      <a href="#" class="scene" data-id="1-360image-1024x512">
        <li class="text">360image-1024x512</li>
      </a>
    
  </ul>
</div>
<div id="titleBar">
  <h1 class="sceneName"></h1>
</div>

<a href="#" id="autorotateToggle">
  <img class="icon off" src="img/play.png">
  <img class="icon on" src="img/pause.png">
</a>

<a href="#" id="fullscreenToggle">
  <img class="icon off" src="img/fullscreen.png">
  <img class="icon on" src="img/windowed.png">
</a>

<a href="#" id="sceneListToggle">
  <img class="icon off" src="img/expand.png">
  <img class="icon on" src="img/collapse.png">
</a>

<a href="#" id="viewUp" class="viewControlButton viewControlButton-1">
  <img class="icon" src="img/up.png">
</a>
<a href="#" id="viewDown" class="viewControlButton viewControlButton-2">
  <img class="icon" src="img/down.png">
</a>
<a href="#" id="viewLeft" class="viewControlButton viewControlButton-3">
  <img class="icon" src="img/left.png">
</a>
<a href="#" id="viewRight" class="viewControlButton viewControlButton-4">
  <img class="icon" src="img/right.png">
</a>
<a href="#" id="viewIn" class="viewControlButton viewControlButton-5">
  <img class="icon" src="img/plus.png">
</a>
<a href="#" id="viewOut" class="viewControlButton viewControlButton-6">
  <img class="icon" src="img/minus.png">
</a>



        </div>
    </div>
</div>
<script src="vendor/es5-shim.js"></script>
<script src="vendor/eventShim.js"></script>
<script src="vendor/classList.js"></script>
<script src="vendor/requestAnimationFrame.js" ></script>
<script src="vendor/screenfull.min.js" ></script>
<script src="vendor/bowser.min.js" ></script>
<script src="vendor/marzipano.js" ></script>

<script src="data.js"></script>
<script src="index.js"></script>
