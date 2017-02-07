<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- <canvas id="canvas" width="800" height="600" style="background: url('kaos.jpg') no-repeat">
  Your browser does not support the canvas element.
</canvas> -->


<div class="design" id="image" data-design="http://lorempixel.com/technics/200/200/">
  <canvas width="200" height="200" >
  		<img style="z-index:99999;width:100px;height:100px;" src="http://lorempixel.com/technics/200/200/">
  </canvas>
  <p class="name">name</p>
  <p class="asset">asset</p>
</div>

<script type="text/javascript">
	$(document).ready(function() {
  $('.design').each(function() {
    var design = $(this).attr('data-design');
    var id = $(this).attr('id');
    var canvas = $(this).find("canvas")[0];
    var ctx = canvas.getContext("2d");
    var img = new Image;
    img.onload = function() {
      ctx.drawImage(this, 0, 0);
    };
    img.src = design;
  });
});
</script>