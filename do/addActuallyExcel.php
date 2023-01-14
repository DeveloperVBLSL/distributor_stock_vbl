<?php  
    if(isset($_POST['ins']))
    {
        $c = mysqli_connect("localhost","root","","stock");

        $n=147;
        for($i=1;$i<=$n;$i++)
        {
            $item=$_POST[$i."item"];
			$pack=$_POST[$i."pack"];
			$brand=$_POST[$i."brand"];
			$nm=$_POST[$i."nm"];
			$date=$_POST['date'];
            $area=$_POST['area'];
            mysqli_query($c,"insert into actualStock (item,pack,brand,amount,updateDate,area) values('$item','$pack','$brand','$nm','$date','$area')");
			

        }
        echo "Data added successfully...";
		header("location:index.php");
		
    }
?>