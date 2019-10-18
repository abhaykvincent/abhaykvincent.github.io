<?php

            $title = $_GET['title'];
            $titleSub = $_GET['titleSub'];
            $content = $_GET['content'];
            $placeName = $_GET['placeName'];
            $contentSub = $_GET['contentSub'];
            $imageCaption = $_GET['imageCaption'];
        


        $image =   $_GET['image'];
        
       $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "abhay"; 


/*         $servername = "localhost";
        $dbusername = "u994976610_abhay";
        $dbpassword = ".Abhay.98";
        $dbname = "u994976610_abhay"; */
        

        // Create connection
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 




        $select = "SELECT content_text FROM post WHERE post_id='2'" ;
        $result = $conn->query($select);
        /* 
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "title: " . $row["content_text"];
            }
        } else {
            echo "0 results";
        }
 */



       $sql =  " INSERT INTO post ( title_main , title_sub, content_text, content_text_sub,place,date, content_image,image_caption ) VALUES
                ( '$title', '$titleSub','$content','$contentSub','$placeName',CURRENT_TIMESTAMP(),'$image','$imageCaption' )";

        if ($conn->query($sql) === TRUE) {
            echo "Thought Posted <i class='fas fa-check'></i> ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 
        
        
        

        $conn->close();
?>