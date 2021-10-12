<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
 #convert span {
    position: absolute;
    font-size: 29px;
    color: white;
    font-weight: 800;
    margin: 79px 0 0 -88px;
}

    .desc {
      text-align: center;
    }
    .outer, .wrap, #html2canvas, .image_text {
      display: inline-block;
      vertical-align: top;
    }
    .wrap {
      text-align: center;
    }
    #imagewrap {
      background-color: white;
    }
    #wow {
      color: red;
      display: block;
      transform: translate(0px, -12px) rotate(-10deg);
    }
  </style>
  <script src="./canvas.min.js"></script>

</head>
<body>
  <div id="convert">
    <p>
      jkbsdfksbd sdkjfbsdjf kjsbdfs khsdf sdfs ksdfs sfs fs sdf sdf sd sdfsd sd sdf sdfsd fs fsdf s df sf sd f sd f sf  sd fsd f s s fs df sd f s fs df sd f sd f s fs f s  f fs  s df sf s df sf s d fs dfsd f s f  fw rw e  gsdfgdf g dg dfjb jhj
    </p>
    <img src="http://localhost/can/dekstop/ra.jpg" widht="150px" height="150px">
    <span> Rakul g</span>
  </div>
  <div id="result"></div>
  <a href="" class="a">Download</a>
</body>
<script type="text/javascript">
  const element = document.getElementById("convert");
  // alert(element);
  const resultElement = document.getElementById("result");

  html2canvas(element, {backgroundColor:"red"}).then(function(canvas) {
      resultElement.appendChild(canvas);
      let cvs = document.querySelector("canvas");
      let a = document.querySelector(".a");
      a.href = cvs.toDataURL("image/jpg");
      a.download = "html2canvas.jpg";
  });
</script>
</html>