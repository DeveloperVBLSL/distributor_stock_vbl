<?php include('header.php');

?>

<div class="w3-right w3-padding-32" style="margin-right: 30px;">
<a style="background-color: black; color: white;  padding: 5px 10px;text-align: center;text-decoration: none;display: inline-block;"  href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Upload</a>
</div>
<div class="w3-center w3-padding-32" style="margin-right: 30px;">
<div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
			<input type='date'  value='' name="dateForm" required/>
            <input type="file" name="file" required/>
            <input style="background-color:aqua" type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
</br>
		<p style="color:blue;">sample of excel sheet <a style="color:red;" href="../download/sample-csv-products.csv" download>Download</a></p>
    </div>
</div>
      
   
<div class="w3-padding-large w3-padding-32 w3-margin-top" id="contact">


<form action="addTempory.php" method="POST">
<input style="border: none; outline:none;" type='date' id='hasta' value='' name="date" required>
<input type="hidden" name="area" value="<?php echo $_SESSION["uname"];  ?>" />

<center>

<table id="customers">
	<thead style="font-size: small;">
		<th></th>
		<th>Pepsi</th>
		<th>Pepsi Black</th>
		<th>Mirinda Orange </th>
		<th>7 Up</th>
		<th>7UP Lite</th>
		<th>Mountain Dew</th>
		<th>STING</th>
		<th>Cream Soda</th>
		<th>Ginger Beer</th>
		<th>Zingo</th>
		<th>Evervess Soda</th>
		<th>Ole Soda</th>
		<th>Duke Soda</th>
		<th>Aquafina</th>
	
		
	</thead>

	<tbody style="font-size: x-small;">



		<tr>
			<td>200ml</td>


			<td>
			<?php

						$i = 1;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 2;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 3;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 4;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 5;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 6;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 7;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 8;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 9;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 10;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 11;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 12;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 13;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 14;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="200ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>
			

									
		</tr>



		<tr>
			<td>207ml</td>

			<td>
			<?php

						$i = 15;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 16;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 17;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 18;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 19;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 20;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 21;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 22;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 23;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 24;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 25;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 26;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 27;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 28;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="207ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>



		</tr>
		<tr>
			<td>250ml</td>

			<td>
			<?php

						$i = 29;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 30;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 31;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 32;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 33;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 34;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 35;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 36;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 37;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 38;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 39;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 40;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 41;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 42;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>250ml - CANS</td>

			<td>
			<?php

						$i = 43;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 44;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 45;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 46;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 47;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 48;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 49;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 50;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 51;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 52;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 53;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 54;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 55;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 56;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="250ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>300ml</td>

			<td>
			<?php

						$i = 57;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 58;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 59;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 60;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 61;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 62;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 63;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 64;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 65;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 66;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 67;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 68;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 69;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 70;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="300ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>330ml</td>

			<td>
			<?php

						$i = 71;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 72;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 73;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 74;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 75;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 76;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 77;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 78;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 79;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 80;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 81;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 82;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 83;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 84;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>330ml - CANS</td>

			<td>
			<?php

						$i = 85;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 86;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 87;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 88;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 89;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 90;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 91;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 92;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 93;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 94;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 95;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 96;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 97;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 98;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="330ml - CANS">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>345ml</td>

			<td>
			<?php

						$i = 99;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 100;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 101;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 102;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 103;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 104;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 105;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 106;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 107;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 108;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 109;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 110;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 111;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 112;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="345ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>400ml</td>

			<td>
			<?php

						$i = 113;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 114;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 115;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 116;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 117;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 118;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 119;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 120;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 121;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 122;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 123;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 124;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 125;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 126;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="400ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>500ml</td>

			<td>
			<?php

						$i = 127;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 128;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 129;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 130;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 131;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 132;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 133;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 134;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 135;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 136;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 137;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 138;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 139;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 140;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>750ml</td>

			<td>
			<?php

						$i = 141;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 142;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 143;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 144;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 145;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 146;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 147;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 148;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 149;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 150;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 151;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 152;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 153;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 154;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="750ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>1000ml</td>
			<td>
			<?php

						$i = 155;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 156;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 157;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 158;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 159;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 160;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 161;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 162;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 163;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 164;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 165;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 166;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 167;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 168;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>1500ml</td>

			<td>
			<?php

						$i = 169;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 170;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 171;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 172;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 173;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 174;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 175;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 176;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 177;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 178;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 179;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 180;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 181;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 182;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="1500ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>2000ml</td>

			<td>
			<?php

						$i = 183;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 184;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 185;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 186;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 187;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 188;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 189;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 190;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 191;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 192;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 193;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 194;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 195;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 196;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

		</tr>
		<tr>
			<td>2250ml</td>

			<td>
			<?php

						$i = 197;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 198;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 199;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 200;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 201;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 202;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 203;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 204;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 205;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 206;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 207;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 208;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 209;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 210;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="2250ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>20000ml</td>

			<td>
			<?php

						$i = 211;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 212;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 213;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 214;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 215;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 216;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 217;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 218;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 219;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 220;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 221;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 222;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 223;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 224;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="20000ml">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 05</td>

			<td>
			<?php

						$i = 225;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 226;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 227;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 228;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 229;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 230;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 231;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 232;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 233;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 234;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 235;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 236;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 237;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 238;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 05">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 10</td>

			<td>
			<?php

						$i = 239;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 240;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 241;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 242;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 243;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 244;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 245;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 246;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 247;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 248;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 249;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 250;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 251;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 252;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 10">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>BIB - 20</td>

			<td>
			<?php

						$i = 253;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 254;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 255;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 256;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 257;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 258;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 259;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 260;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 261;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 262;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 263;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 264;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 265;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 266;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="BIB - 20">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>
		<tr>
			<td>PMX</td>

			<td>
			<?php

						$i = 267;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 268;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Pepsi Black">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
			<?php

						$i = 269;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mirinda Orange ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 270;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7 Up ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 271;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="7UP Lite ">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 272;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Mountain Dew">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 273;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="STING">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

			
				<td>
				<?php

						$i = 274;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Cream Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 275;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ginger Beer">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


				<td>
				<?php

						$i = 276;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Zingo">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 277;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Evervess Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 278;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Ole Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 279;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Duke Soda">
				<input style="width: 100%; " type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>

				<td>
				<?php

						$i = 280;
						
			?>

				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'pack';  ?>"  value="PMX">
				<input style="width: 100%; border: none; outline:none;" type="hidden" name="<?php echo $i.'brand';  ?>"  value="Aquafina">
				<input style="width: 100%;" type="text" name="<?php echo $i.'nm';  ?>"/>
				</td>


		</tr>

	</tbody>
</table>

</br>

<input style="background-color: blue; color:aliceblue;" type="submit" name="ins" value=" SAVE " />
</form>
</center>

</div>


<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>


</body>
</html>
