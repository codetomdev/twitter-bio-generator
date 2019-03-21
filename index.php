

  <!-- start section header -->
  <div id="header" class="home" style="background-image: linear-gradient(#dcfc67,#67ccfc);">

    <div class="container" >
      <div class="header-content" >
        <h1> 
        
        <?php
                $servername = "localhost";
                $username = "the_user";
                $password = "the_user_pass";
                $dbname = "database_name";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                
                //the select. the [limit] is just how much data you want
                $sql = "SELECT id, job FROM jobs ORDER BY RAND() limit 3";
                $result = $conn->query($sql);
                  
                    // output data 
                    while($row = $result->fetch_assoc()) {
                            $btnshare.=$row["job"] ."." ;
                            
                            echo $row["job"] .". " ;
                    }
                
                $conn->close();
                
            ?>
        </h1>
    
        <p> Twitter bio  <a href="index.php">generator</a>
         <div onclick="copyDivToClipboard()"> Click to copy </div>
         
         </p>
    <?php echo "<div id=a style=font-size:0px;> $btnshare </div>"; ?>
    <script>
    //function to copy the $btnshare. Its a copy of $row["job"], but invisible.
    //just to copy & paste 
        function copyDivToClipboard() {
             var range = document.createRange();
             range.selectNode(document.getElementById("a"));
             window.getSelection().removeAllRanges();
             window.getSelection().addRange(range);
             document.execCommand("copy")
        }
    </script>
        
      </div>
    </div>
  </div>
