<?php
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .ctstyle{
      font-family: Verdana;
      font-size: 14px;
    }
    .itemlist{
      font-size: 12px;
    }
    </style>
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="javascript/blocksdk.js"></script>
  </head>
  <body>
    <p class="ctstyle" align="center">
      <img width="80%" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/6bc4b8b8-19f2-41d3-8081-129b7b5a01c8.png" />
      <br />
      Select an image to from Sitecore CMS
      <br />
      <input type="checkbox" id="scaleFit" onclick="javascript:chosen('')" value="Yes" ><span class="itemlist" style="padding-left: 10px;padding-right: 10px;">Scale to fit</span></input>
      <input type="checkbox" id="alignCenter" onclick="javascript:chosen('')" value="Yes" ><span class="itemlist" style="padding-left: 10px;padding-right: 10px;">Align to Center</span></input>
    </p>
    <div >
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image1')"><image width="20%" id="image1" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/00b79af2-833a-4362-8c1a-81341a9079ce.jpg" /> <span style="padding-left: 20px">Image 1</span></a>
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image2')" ><image width="20%" id="image2" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/2a17ae38-47ad-4e0d-8532-a1895c971bc2.jpg" /><span style="padding-left: 20px">Image 2</span></a>
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image3')"><image width="20%" id="image3" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/3b943978-c1b1-42e9-b7bc-a43ad26c583c.jpg" /> <span style="padding-left: 20px">Image 3</span></a>
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image4')"><image width="20%" id="image4" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/cb4df285-72be-41ea-a4b2-ecf3ce48f4fe.jpg" /> <span style="padding-left: 20px">Image 4</span></a>
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image5')"><image width="20%" id="image5" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/fc895092-8200-4983-b77d-179d2a37d3f6.jpg" /> <span style="padding-left: 20px">Image 5</span></a>
        <a class="list-group-item list-group-item-action ctstyle itemlist" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home" onclick="javascript:chosen('image6')"><image width="20%" id="image6" src="http://image.s4.exct.net/lib/fe8e1574746203787c/m/1/d751bead-2a14-4b3e-8f68-c8274a7a111a.jpg" /> <span style="padding-left: 20px">Image 6</span></a>
      </div>
    </div>
  </div>
  <script>
    var selectedImageId, image;
    function chosen(imgId) {
      var sdk = new window.sfdc.BlockSDK(); //initalize SDK
      sdk.setContent(""); //resets content block
      var fit = document.getElementById("scaleFit").checked;
      var acenter = document.getElementById("alignCenter").checked;

      selectedImageId = imgId;
      if (imgId != "") {
        image = document.getElementById(imgId).src;
      }
      //alert(image); //test
      if (fit) {
        sdk.setContent("<img width='100%' src='" + image + "'/>");
      } else {
        if (acenter) {
          sdk.setContent("<center><img src='" + image + "'/></center>");
        } else {
          sdk.setContent("<img src='" + image + "'/>");
        }
      }
    }
  </script>
</body>
</html>