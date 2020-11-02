<?php
 require 'inc/config.php';
	$conn = Connect();
 
    if(isset($_POST['submit'])){   
    	$maxsize = 31457280; 
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/".$name;
       $target_file = $target_dir . $_FILES["file"]["name"];
       $description = $_POST['description'];
       

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 30MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO customer_review(name,location,description,timeIN) VALUES('".$name."','".$target_file."','".$description."',NOW())";

              $result = mysqli_query($conn,$query);


if($result)
          {
      ?>
      <script>
        alert("Media has been uploaded.");
        window.location.href = "media.php";
      </script>
      <?php
    
  }
  else
  {
    ?>
    <script>
      alert("Fail to uploadS.");
      window.location.href = "add_media.php";
    </script>
    <?php
  }
      }    
  }

  }
} ?>