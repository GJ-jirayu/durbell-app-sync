
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Promotion Step</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="../bootstrap-3.1.1/css/blog.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../bootstrap-3.1.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../bootstrap-3.1.1/css/doc.css">

<!-- Latest compiled and minified JavaScript -->
<script src="../bootstrap-3.1.1/js/jquery-2.1.1.min.js"></script>
<script src="../bootstrap-3.1.1/js/bootstrap.min.js"></script>


<style>



.navbar-nav>li.active a {
color:white;
}
/*
.navbar-nav>li>a:hover {
background:#428bca;
}
.nav .open>a, .nav .open>a:hover, .nav .open>a:focus {
background-color: #428bca; 
border-color: #428bca;
}
*/
</style>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <ul class="nav navbar-nav bg-primary">
	        <li ><a href="1-1-prod-group-for-prom.html">Product Group for Promotion</a></li>
	        <li class="dropdown active">
	          <a href="1-1-prod-group-for-prom.html"class="dropdown-toggle" data-toggle="dropdown">Discount Promotion <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="2-1-setup-discount-prom-by-item.html">Discount Promotion by Item</a></li>
	            <li><a href="3-1-setup-discount-prom-by-group.html">Discount Promotion by Group</a></li>
	            <li><a href="3-1-bundle-setup-discount-prom-by-group.html">Discount Promotion by Bundle</a></li>
	          </ul>
	        </li>
	         <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Free Item Promotion <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="4-1-setup-free-item-prom-by-item.html">Free Item Promotion by Item</a></li>
	            <li><a href="5-1-setup-free-item-prom-by-group.html">Free Item Promotion by Group</a></li>
	            <li><a href="5-1-bundle-setup-free-item-prom-by-group.html">Free Item Promotion by Bundle</a></li>
	          </ul>
	        </li>
	      </ul>
        </nav>
      </div>
    </div>

    <div class="container">
<h2>Promotion Step</h2>
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered">
				<tr>
					<td>Prom No</td>
					<td>
						
						<input text="text" name="promotionNo"  value="DI520301"/>
						&nbsp;
						<input text="text" name="promotionName" value="Tea & Star Promo"/>
					</td>
				</tr>
				<tr>
					<td>
						Prom Code
					</td>
					<td>
						<input type="text" name="itemCode" value="G03001">
						&nbsp;
						<input type="text" name="itemName" value="ColaBottle">
						/*เลือก PromCode*/
					</td>
				</tr>
			
				
				<tr>
					<td>Break By</td>
					<td>
						Q
							
					
						(Q-Quantity  A-Amonut LQ-Loop Quantity  LA-Loop Amonut)
					</td>
				</tr>
				<tr>
					<td>
						Discount For
					</td>
					<td>
							
					B
						(B-Baht P-Percent LB-Loop Baht LP-Loop Percent)
						
					</td>
				</tr>
				<tr>
					<td>
						Step
					</td>
					<td>
					
						<input type="text" >	
					
					</td>
				</tr>
				<tr>
					<td>
						Promotion Step Note
					</td>
					<td>
					
						<textarea></textarea>	
					
					</td>
				</tr>
				
				<tr>
					<td>
						Minimum SKU
					</td>
					<td>
					
						<input type="text" >	
					
					</td>
				</tr>
				
				
			</table>
			
		</div>
		
	</div>
<h3>Break By</h3>
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered">
				<tr>
			<td>Break Quantity</td>
			<td>
			<input type="text">
			</td>
			<td>
			Unit
			
			</td>
			<td>
			<select>
				<option>
				Pack
				</option>
				<option>
				Piece
				</option>
				
			</select>
			
			</td>
			
			<td>Unit Factor</td>
			<td>
			<input type="text" style="background:#cccccc">
			</td>
			
			
		</tr>
				<tr style="display:none">
					<td>Break Amount</td>
					<td>
					<input type="text" value="0.00">
					</td>
				</tr>
			</table >
		</div>
	</div>
	
	
	<table>
		<tr>
			<td>
				<a href="3-1-bundle-setup-discount-prom-by-group.html">
				<button type="button" class="btn btn-primary btn-xs">back </button>
				</a>
				<button type="button" class="btn btn-primary btn-xs">Add </button>
		    	<button type="button" class="btn btn-danger btn-xs">Cancle </button>
			</td>
			
		</tr>
	</table>
	

	<hr>
	
	
	<h2>List of Step Free Item</h2>
	
	
	<table class="table">
		<thead>
			<tr>
				<th>Promotion No</th>
				<th>Promotion Description</th>
				<th>Promotion Code</th>
				<th>Description</th>
				<th>Break Qty</th>
				<th>Unit</th>
				<th>Break Amount</th>
				<th>Manage</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				
				<td>
				DI520301
				</td>
				<td>
				Tea & Star Promo
				</td>
				<td>
				G03001
				</td>
				<td>
				ColaBottle
				</td>
				<td>
				1
				</td>
				
				<td>
				Pack
				</td>
				<td></td>
				<td>
					<button type="button" class="btn btn-primary btn-xs">Edit </button>
					<button type="button" class="btn btn-danger btn-xs">Delete </button>
					
				</td>
			</tr>
			<tr>
				
				<td>
				DI520301
				</td>
				<td>
				Tea & Star Promo
				</td>
				
				<td>
				G03002
				</td>
				<td>
				ColaBottle2
				</td>
				<td>
				1
				</td>
				
				<td>
				Pack
				</td>
				<td></td>
				<td>
					<button type="button" class="btn btn-primary btn-xs">Edit </button>
					<button type="button" class="btn btn-danger btn-xs">Delete </button>
					
				</td>
			</tr>
			
			
		</tbody>
	</table>
	
	
	
	
	
	
	
	
	
<!-- Start Large modal -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title" id="myLargeModalLabel">Free Item </h4>
        </div>
        <div class="bs-callout bs-callout-info">
				    <h4>Detail Promotion</h4>
				    <table class="table">
				    	<thead>
				    		<tr>
				    			<th>Prom Group code</th>
				    			<th>Prom Group Desc</th>
				    			<th>Product Group Code</th>
				    			<th>Product Group Desc</th>
				    			<th>Break By</th>
				    			<th>Discount For</th>
				    		</tr>
				    	</thead>
				    	<tbody>
					    	<tr>
					    		<td>DG0908</td>
					    		<td>Colo KRMC</td>
					    		<td>G03001</td>
					    		<td>ColaBottle</td>
					    		<td>B</td>
					    		<td>B</td>
					    	</tr>
					    	
				    	</tbody>
				    	
				    </table>
				    
			</div>
			
        <div class="modal-body">
        	<h2>Add Free Item</h2>
        <div class="row">
        		  
        	<div class="col-md-6">
        		 
		          <table class="table">
		          	<tr>
		          		<td>Brand Product</td>
		          		<td>
		          			<select>
		          				<option>Brand01</option>
		          				<option>Brand02</option>
		          			</select>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>Free Item Code</td>
		          		<td>
		          			<input type="text">
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>Discription</td>
		          		<td>
		          			<textarea></textarea>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>Free Qty</td>
		          		<td>
		          			<input type="text">
		          		</td>
		          	</tr>
		          	
		          	<tr>
		          		<td>Unit </td>
		          		<td>
		          			<select>
		          				<option>Picece</option>
		          				<option>Pack</option>
		          			</select>
		          		</td>
		          	</tr>
		          	<tr>
		          		<td>GL Account</td>
		          		<td>
		          			<input type="text">
		          		</td>
		          	</tr>
		          </table>
	          </div>
          </div>
            <button type="button" class="btn btn-primary btn-xs">Add </button>
			<button type="button" class="btn btn-danger btn-xs">Cancle </button>
          <hr>
          <h2>Detail Free Item</h2>
          <table class="table">
          	<thead>
	          	<tr>
	          		
	          		
	          		<th>Free Item Code</th>
	          		<th>Description</th>
	          		<th>Free Qty</th>
	          		<th>Unit</th>
	          		<th>Gl Account</th>
	          		<th>Manage</th>
	          		
	          	</tr>
          	</thead>
          	<tbod>
          		<tr>
          			
          			<td>01010006</td>
          			<td>กระทิงแดง150มล.</td>
          			<td>1</td>
          			<td>Piece</td>
          			<td></td>
          			<td>
          					<button type="button" class="btn btn-primary btn-xs btn-xs">Edit </button>
							<button type="button" class="btn btn-danger btn-xs btn-xs">Delete </button>
          			</td>
          		</tr>
          		<tr>
          		
          			<td>01010007</td>
          			<td>กระทิงแดง150มล.(พ)</td>
          			<td>1</td>
          			<td>Piece</td>
          			<td></td>
          			<td>
          					<button type="button" class="btn btn-primary btn-xs ">Edit </button>
							<button type="button" class="btn btn-danger btn-xs ">Delete </button>
          			</td>
          		</tr>
          		<tr>
          			
          			<td>01010008</td>
          			<td>เรดดิ้โกจิ</td>
          			<td>1</td>
          			<td>Piece</td>
          			<td></td>
          			<td>
          					<button type="button" class="btn btn-primary btn-xs ">Edit </button>
							<button type="button" class="btn btn-danger btn-xs ">Delete </button>
          			</td>
          		</tr>
          	</tbod>
          </table>
          
        </div>
    </div>
   
  </div>
</div>

<!-- End Large modal -->




</div>
    
    	<div class="blog-footer">
	      <p>Smart Van BackOffice</p>
	      <p>
	        <a href="#">Back to top</a>
	      </p>
	    </div>

   
  </body>
</html>
