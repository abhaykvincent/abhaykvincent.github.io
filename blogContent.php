<?php



/* $servername = "localhost";
$dbusername = "u994976610_abhay";
$dbpassword = ".Abhay.98";
$dbname = "u994976610_abhay"; */

        $servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "abhay";



// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM post";
$retval = mysqli_query(  $conn ,$sql);

if(! $retval ) {
die('Could not get data: ' . mysql_error());
}

    while($row=mysqli_fetch_row($retval))
    {
        $title= $row[2];
        $titleSub=$row[3];
        $date= $row[4];
        $placeName= $row[5];
        $textContent= $row[6];
        $textContentSub= $row[9];

        $imageData=  $row[7];


        echo '
            <section class="post">
                <div class="title">
                    <h3>'.$title.'</h3>
                    <h4>'.$titleSub.'</h4>
                </div>
                <div class="details">
                    <div class="date">'.$date.'</div>
                    <div class="place">'.$placeName.'</div>
                </div>
                <div class="content">
                '.$textContent.'<br>
                '.$textContentSub.'
                </div>
                
            </section>
            <hr>';
            

    }

$conn->close();




        ?>