<!DOCTYPE html>
<html>
<head>
<style>   
</style>   
</head>
<body>
<form method="post">
<h2>CHÀO THEO GIỜ</h2>
<input type="Number" name="txtGio">
<br>
<?php
    if (isset($_POST['txtGio']))
    {
        $gio = $_POST["txtGio"];
        
        if ($gio <12 )
             $chao = "chào buổi sáng";
        else if ($gio <17)
            $chao = "chào buổi chiều";
        else 
             $chao = "Chào buổi tối";
        echo $chao;
    }
?>
<br>
<button type="submit">CHÀO</button>
</form>



</body>
</html>

