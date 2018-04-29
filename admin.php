<!DOCTYPE html>
<html>  
    <head>  
        <meta charset="UTF-8">
		<title>Assignment 5</title>

		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/navigation.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    </head>  
	<body>
		<?php

			include "includes/nav.php";
			include "includes/header.php";

		?>

        <div class="container">  
            <br />  
            <br />
			<br />
			<div class="table-responsive">  
				<h3 align="center">Admin</h3><br />
				<span id="result"></span>
				<div id="live_data"></div>                 
			</div>  
		</div>
		
		<?php include "includes/footer.php"; ?>
    </body>  
</html> 
<script>  
$(document).ready(function(){  
    function fetch_data()  
    {  
        $.ajax({  
            url:"admin/select.php",  
            method:"POST",  
            success:function(data){  
				$('#live_data').html(data);  
            }  
        });  
    }  
    fetch_data();  
    $(document).on('click', '#btn_add', function(){  
        var name = $('#name').text();  
        var brand = $('#brand').text(); 
		var computer = $('#computer').text();		
        if(name == '')  
        {  
            alert("Enter Name");  
            return false;  
        }  
        if(brand == '')  
        {  
            alert("Enter Brand");  
            return false;  
        }  
        $.ajax({  
            url:"admin/add.php",  
            method:"POST",  
            data:{name:name, brand:brand, computer:computer},  
            dataType:"text",  
            success:function(data)  
            {  
                alert(data);  
                fetch_data();  
            }  
        })  
    });  
    
	function edit_data(id, text, column_name)  
    {  
        $.ajax({  
            url:"admin/edit.php",  
            method:"POST",  
            data:{id:id, text:text, column_name:column_name},  
            dataType:"text",  
            success:function(data){  
                //alert(data);
				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
            }  
        });  
    }  
    $(document).on('blur', '.name', function(){  
        var id = $(this).data("id1");  
        var name = $(this).text();  
        edit_data(id, name, "name");  
    });  
    $(document).on('blur', '.brand', function(){  
        var id = $(this).data("id2");  
        var brand = $(this).text();  
        edit_data(id,brand, "brand");  
    });  
    $(document).on('click', '.btn_delete', function(){  
        var id=$(this).data("id3");  
        if(confirm("Are you sure you want to delete this?"))  
        {  
            $.ajax({  
                url:"admin/delete.php",  
                method:"POST",  
                data:{id:id},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                    fetch_data();  
                }  
            });  
        }  
    });  
});  
</script>