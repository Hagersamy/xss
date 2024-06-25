<!DOCTYPE html>
<html>
    <body>
        <h1>Reflected XSS</h1>
        <form method="get">
            Enter Your name : 
            <input type="text" name="name"><br>
            <button type="submit">Submit</button>
</form>
<?php
if(isset($_GET['name'])){
    echo "hello " . $_GET['name'];
}
?>
</body>
</html>