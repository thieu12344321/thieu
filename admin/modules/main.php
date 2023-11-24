<div class="clear"></div>
<div class="main">

	<?php

				if(isset($_GET['action']) && $_GET['query']){
					$tam = $_GET['action'];
					$query = $_GET['query'];
				}else{
					$tam = '';
					$query = '';
				}
				if($tam=='khong cần quan tâm' && $query=='nháp'){
					 

				}
				
				else{
					include("modules/dashboard.php");
				}
	?> 
	
</div>