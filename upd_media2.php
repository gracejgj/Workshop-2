<?php
    
require 'inc/config.php';
	$conn = Connect();
 
    if(isset($_POST['submit'])){
      echo "<pre>";
      var_dump($_FILES['file']);
      $maxsize = 31457280;;
 
        $p_id = $_GET['pid'];
       $name = $_FILES['file']['name']; 
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];
        $description = $_POST['description'];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","mp3","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 30MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              
               $query = "UPDATE customer_review SET name = '".$name."', location = '".$target_file."', description = '".$description."', timeIN = NOW() where customer_review = '$p_id'";
               
              $result = mysqli_query($conn,$query);


if($result)
          {
      ?>
      <script>
        alert("Media has been updated.");
        window.location.href = "media.php";
      </script>
      <?php
    
  }
  else
  {
    ?>
    <script>
      alert("Fail to update.");
      window.location.href = "add_media.php";
    </script>
    <?php
  }
      }    
  }

  }
} ?>