<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["userfile"])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["userfile"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["userfile"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
      if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["userfile"]["name"]). " has been uploaded.";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
  }
}
?>
<html>
 <head>
  <title>File Upload Progress Bar</title>
  <!--<link rel="stylesheet" type="text/css" href="style.css">-->
  <style type="text/css">
    #bar_blank {
      border: solid 1px #000;
      height: 20px;
      width: 300px;
    }

    #bar_color {
      background-color: #006666;
      height: 20px;
      width: 0px;
    }

    #bar_blank, #hidden_iframe {
      display: none;
    }
  </style>
 </head>
 <body>
  <div id="bar_blank">
   <div id="bar_color"></div>
  </div>
  <div id="status"></div>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" 
   id="myForm" enctype="multipart/form-data" target="hidden_iframe">
   <input type="hidden" value="myForm"
    name="<?php echo ini_get("session.upload_progress.name"); ?>">
   <input type="file" name="userfile"><br>
   <input type="submit" value="Start Upload">
  </form>
  <iframe id="hidden_iframe" name="hidden_iframe" src="about:blank"></iframe>
  <!--<script type="text/javascript" src="script.js"></script>-->
  <script type="text/javascript">
    function toggleBarVisibility() {
        var e = document.getElementById("bar_blank");
        e.style.display = (e.style.display == "block") ? "none" : "block";
    }

    function createRequestObject() {
        var http;
        if (navigator.appName == "Microsoft Internet Explorer") {
            http = new ActiveXObject("Microsoft.XMLHTTP");
        }
        else {
            http = new XMLHttpRequest();
        }
        return http;
    }

    function sendRequest() {
        var http = createRequestObject();
        http.open("GET", "progress.php");
        http.onreadystatechange = function () { handleResponse(http); };
        http.send(null);
    }

    function handleResponse(http) {
        var response;
        if (http.readyState == 4) {
            response = http.responseText;
            document.getElementById("bar_color").style.width = response + "%";
            document.getElementById("status").innerHTML = response + "%";

            if (response < 100) {
                setTimeout("sendRequest()", 1000);
            }
            else {
                toggleBarVisibility();
                document.getElementById("status").innerHTML = "Done.";
            }
        }
    }

    function startUpload() {
        toggleBarVisibility();
        setTimeout("sendRequest()", 1000);
    }

    (function () {
        document.getElementById("myForm").onsubmit = startUpload;
    })();
  </script>
 </body>
</html>