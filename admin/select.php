<?php  
 $dbhost = "localhost";
 $dbuser = "urcscon3_cwright";
 $dbpass = "EssLikeNeme";
 $dbname = "urcscon3_newyork5";
 $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 
 $output = '';  
 $sql = "SELECT * FROM survey ORDER BY id";  
 $result = mysqli_query($connection, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%">Id</th>  
                     <th width="30%">Name</th>  
                     <th width="30%">Brand</th>
					 <th width="30%">Computer</th>  
                     <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	  if($rows > 10)
	  {
		  $delete_records = $rows - 10;
		  $delete_sql = "DELETE FROM survey LIMIT $delete_records";
		  mysqli_query($connect, $delete_sql);
	  }
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="name" data-id1="'.$row["id"].'" contenteditable>'.$row["name"].'</td>  
                     <td class="brand" data-id2="'.$row["id"].'" contenteditable>'.$row["brand"].'</td>  
					 <td class="computer" data-id4="'.$row["id"].'" contenteditable>'.$row["computer"].'</td> 
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="name" contenteditable></td>  
                <td id="brand" contenteditable></td>  
				<td id="computer" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					<td id="name" contenteditable></td>  
					<td id="brand" contenteditable></td>  
					<td id="computer" contenteditable></td>  
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>