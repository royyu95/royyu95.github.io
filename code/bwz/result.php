
  
<html>
    <head>
<style type="text/css">
      body{font-family:Arial;text-align:center;margin-left:auto;margin-right:auto;}
    .bgDiv{width:70%;height:100%;
	       border:1px solid #808080;
		   		   text-align:center;margin-left:auto;margin-right:auto;
				   background-color:#F0F8FF;
				   margin-top:20px;
		  }
	.topDiv{width:90%;height:100px;text-align:center;margin-left:auto;margin-right:auto;
	        border:0px solid #808080;
			border-bottom-width:0px;
			margin-top:5px;
	}
	.seqDiv{width:800;text-align:center;margin-left:auto;margin-right:auto;border:1px solid #808080;}
	.batchDiv{width:800;text-align:center;margin-left:auto;margin-right:auto;border:1px solid #808080;}
	.footDiv{width:80%;height:40px;padding-top:10px;text-align:center;margin-left:auto;margin-right:auto;}
	.blankDiv{width:100%;height:20px;background-color:white;}

     span{display:block;font-size:16pt;text-align:left;padding-left:8px;}
	 </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> 
		    iSNO-PseAAC Result
		</title>
		
    </head>

    <body bgcolor="#99CCCC">
	<?php
	$length= $_POST["length"];
    $ans= $_POST["ans"]; 
	$seqe=str_replace("\r\n","?", $_POST["Seqe"]);
    $seqe=str_replace(">","~",$seqe);	
	
    exec ("D:\python3.7\python test123.py  $length $ans $seqe ",$Array,$ret );
	if (empty($Array)){
	echo "data error";
	}
	else { 
    print_r($Array[0]);}?><br>
	<?php if (isset($Array[1])) print_r($Array[1]);?><br>
	<?php if (isset($Array[2])) print_r($Array[2]);?><br>
	<?php if (isset($Array[3])) print_r($Array[3]);?><br>
	<?php if (isset($Array[4])) print_r($Array[4]);?>
	
	
</body>  
</html> 
