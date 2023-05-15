<html>
<head>
    <title>PHP MySQL</title>
</head>
<body>
    <?php
        // Step 1 : Creating a DataBase
        $hostname = "127.0.0.1:3307" ;
        $username = "root";
        $password = "";

            //creating the connection
            $connection = new mysqli($hostname,$username,$password);
            //check connection
            if($connection->connect_error){
                die("Connection Failed : ".$connection->connect_error);
            }
            //Create database
            $q1 = "CREATE DATABASE db";

            if($connection->query($q1)===TRUE){
                echo "DataBase created successfully"."<br/>";
            }
            else{
                echo "Error in creating the DataBase.".$connection-> error . "<br/>";
            }

            //remember to close the connection to the server after use
            $connection->close();


        //Step 2 : Creating the Table in the DataBase

            $database = "db";
            $connection = new mysqli($hostname,$username,$password,$database);
            if($connection->connect_error){
                die("There was a error is connecting to the Database");
            }    

            $q2 = "CREATE TABLE students (
                regno VARCHAR(10) PRIMARY KEY,
                fname VARCHAR(20),
                gpa  FLOAT(2),
                email VARCHAR(50)
            )";

            if($connection->query($q2)===TRUE){
                echo "Table students was created successfully" . "<br/>";
            }
            else{
                echo "Error is creating the table students".$connection->error. "<br/>";
            }
            
        
        //Step 3 : Entering the initial Data
            $q3 = "INSERT INTO students (regno,fname,gpa,email) 
            VALUES('20BCE1506','Varun Verma', 8.2, 'varun20@vit.ac.in') ";
            $q4 = "INSERT INTO students (regno,fname,gpa,email) 
            VALUES('20BCE1507','Soma Senpai', 9.8, 'soma20@vit.ac.in') ";
            $q5 = "INSERT INTO students (regno,fname,gpa,email) 
            VALUES('20BCE1508','Demonixx', 8.5, 'demonixx20@vit.ac.in') ";

            if($connection->query($q3)===TRUE && $connection->query($q4)===TRUE && $connection->query($q5)===TRUE){
                echo "<br/>Table records were updated<br/>";
            }
            else{
                echo "Error in updating the table records : ".$connection->error."<br/>";
            }
            


        //Step 4 :  Displaying the Data :
            $q6 = "SELECT regno,fname,gpa,email FROM students
                    WHERE gpa<9.0";
            $results = $connection->query($q6);

            if ($results->num_rows>0) {
                while($row = $results->fetch_assoc()){
                    echo "RegNo : ".$row["regno"]."   Name : ".$row["fname"]."   GPA : ".$row["gpa"]."   Email : ".$row["email"]."<br/>";
                }
            } 
            else {
                echo "0 results found "."<br/>";
            }

        


        //Step 5 : Updating the initial data
            $q7 = "UPDATE students 
                    SET fname = 'Bunny'
                    WHERE regno='20BCE1506'";

            if($connection->query($q7)===TRUE){
                echo "Table Updated Successfully <br/>";
            }
            else{
                echo "Table could not be updated <br/>";
            }



        //Step 6 : Displaying all the Records 
            $q8 = "SELECT * FROM students";
            $result = $connection->query($q8);

            echo "<br/>Showing all the Records of the Table<br/>";
            if($results->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "RegNo : " . $row["regno"] . "   Name : " . $row["fname"] . "   GPA : " . $row["gpa"] . "   Email : " . $row["email"] . "<br/>";
                }
            }
            else{
                echo "0 results found " . "<br/>";
            }

        //Ordering the display : 
            $q9 = "SELECT * FROM students 
                        ORDER BY regno DESC";
            $result = $connection->query($q9);

            echo "<br/>Showing all the Records of the Table in decending order of regno<br/>";
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "RegNo : " . $row["regno"] . "   Name : " . $row["fname"] . "   GPA : " . $row["gpa"] . "   Email : " . $row["email"] . "<br/>";
                }
            }
            
            //closing the connection to the database
            $connection->close();
        
    ?>
    
</body>
</html>