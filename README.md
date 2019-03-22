<b>How to use it</b>
<br>
Create & complete the example datbase. Then copy & paste the php script..
<br><br><br>
The database.

CREATE TABLE `jobs` (<br>
  `id` int(11) NOT NULL,<br>
  `job` varchar(150) NOT NULL<br>
) ENGINE=MyISAM DEFAULT;<br>
<br>
INSERT INTO `jobs` (`id`, `job`) VALUES<br>
(1, 'Freelancer'),<br>
(2, 'web developer'),<br>
(3, 'All your base are belong to us..'),<br>
...<br>

-- Index<br>
ALTER TABLE `jobs`<br>
  ADD PRIMARY KEY (`id`);<br>
<br>
-- AUTO_INCREMENT <br>
ALTER TABLE `jobs`<br>
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;<br>
COMMIT;<br><br>


The script generator..(a randon select on a database)
    
        <?php
                $servername = "localhost";
                $username = "the_user";
                $password = "the_user_pass";
                $dbname = "database_name";
                
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $sql = "SELECT id, job FROM jobs ORDER BY RAND() limit 3";
                $result = $conn->query($sql);
                  
                    while($row = $result->fetch_assoc()) {
                            $btnshare.=$row["job"] ."." ;
                            
                            echo $row["job"] .". " ;
                    }
                
                $conn->close();
                
            ?>

