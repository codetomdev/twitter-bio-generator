How to use it

1. Database

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `job` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT;

INSERT INTO `jobs` (`id`, `job`) VALUES
(1, 'Freelancer'),
(2, 'web developer'),
(3, 'All your base are belong to us..'),
...

-- Index
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT 
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;


2. copy the generator..(a randon select on a database)
    
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

