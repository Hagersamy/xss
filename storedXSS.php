<?php
$servername="localhost";
$dbname="stored_xss";
$username="root";
$pass="";
$conn=new mysqli($servername,$username,$pass,$dbname);
if($conn->connect_error){
    die("connection filled". $conn->connect_error);   
}
echo "connected successfully";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $comment=$_POST['comment'];
    $sql="INSERT INTO comments values(' $comment')";
    $conn->query( $sql);
}
$comments = $conn->query("SELECT comment FROM comments");
?>

<!DOCTYPE html>
<html>
    <body>
        <form method="POST">
            <textarea name="comment"></textarea>
            <button type="submit">Submit</button>
</form>
<h2>Comments:</h2>
    <?php while ($row = $comments->fetch_assoc()) { ?>
        <p><?php echo $row['comment']; ?></p>
    <?php } ?>
</body>
</html>