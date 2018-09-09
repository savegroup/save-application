
<!-- page content --> 
<!-- left col --> 
<div class="col-md-2 col-xs-12" style="min-height:95%;color:white">
      <section >
        <div class="panel-body">
           <h3>Select the Industry</h3>
          <br>
          <form action="<?php echo base_url(); ?>" method="post" id="registration"
                  class="form-horizontal" enctype="multipart/form-data" accept-charset="utf-8">
                <div class="form-group">
                    <div class="col-md-12">
                        <select class="form-control col-md-12">
								<option value="Plastic">Plastic</option>
								<option value="Iron">Iron</option>
								<option value="Cement">Cement</option>
						</select>
                    </div>
                </div>


			  <div class="form-group">
				<div class="col-md-12">
				  <input type="submit" name="frmbtn" class="btn btn-success btn-block" value="Show"/>
				</div>
			  </div>

			</form>
        </div>
        
      </section>
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
        </div>
    </div>

</div>
<!-- left col -->

<!-- right col -->
<div class="col-md-10 col-xs-12 condiv" role="main" style="min-height:95%;">
	
	<div class="page-title">
	  <div class="title_left">
		<h3>Estimations</h3>
	  </div>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel" style="min-height:500px;">
            <table class="table table-striped table-bordered color-table success-table">
                <?php
                    $file = fopen("datasets/historic.csv","r");
					$firstcol;
					$secondcol;
                    while(! feof($file)){
                        //echo "<tr>";
                        $a = fgetcsv($file);
						//echo "<td>".$a[0]."</td>";
						$firstcol[]=$a[0];
						//echo "<td>".$a[1]."</td>";
						$secondcol[]=$a[1];
                        //echo "</tr>";
                    }
                    fclose($file);
                ?>
                </table>
                
                
                <div class="row">
				  <div class="col-md-6 ">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Electricity Real Usage</h2>

						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<canvas id="lineChart"></canvas>
					  </div>


					</div>
				  </div>
				  <div class="col-md-6 ">
					<div class="x_panel">
					  <div class="x_title">
						  <h2>Electricity Usage Prediction</h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<canvas id="lineChart2"></canvas>
						</div>
					</div>
				   </div>
              
              <script>
				var ctx = document.getElementById("lineChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: [<?php
							$c=0;
							foreach($firstcol as $f){ 
								if($c==0){
									echo "'".$f."'";
									$c++;
								}else{
									echo ",'".$f."'";
								}

						} ?>],
						datasets: [{
							label: 'hour / price usage',
							data: [<?php
							$z=0;
							foreach($secondcol as $s){ 
								if($z==0){
									echo $s;
									$z++;
								}else{
									echo ",".$s;
								}

						} ?>],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
			  
			  <?php
                    $file = fopen("datasets/predicted.csv","r");
					$col1;
					$col2;
                    while(! feof($file)){
                        $b = fgetcsv($file);
						$col1[]=$b[0];
						$col2[]=$b[1];
                    }
                    fclose($file);
                ?>
			  <script>
				var ctx2 = document.getElementById("lineChart2").getContext('2d');
				var myChart2 = new Chart(ctx2, {
					type: 'bar',
					data: {
						labels: [<?php
							$c=0;
							foreach($col1 as $f){ 
								if($c==0){
									echo "'".$f."'";
									$c++;
								}else{
									echo ",'".$f."'";
								}

						} ?>],
						datasets: [{
							label: 'hour / price usage',
							data: [<?php
							$z=0;
							foreach($col2 as $s){ 
								if($z==0){
									echo $s;
									$z++;
								}else{
									echo ",".$s;
								}

						} ?>],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
				
			 
		</div>
	  			<div class="row">
				  <div class="col-md-6 ">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Electricity Real Usage</h2>

						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<canvas id="lineChart"></canvas>
					  </div>


					</div>
				  </div>
				  <div class="col-md-6 ">
					<div class="x_panel">
					  <div class="x_title">
						  <h2>Electricity Usage Prediction</h2>
							<div class="clearfix"></div>
						</div>
						<div class="x_content">
							<canvas id="lineChart2"></canvas>
						</div>
					</div>
				   </div>
              
              <script>
				var ctx = document.getElementById("lineChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: [<?php
							$c=0;
							foreach($firstcol as $f){ 
								if($c==0){
									echo "'".$f."'";
									$c++;
								}else{
									echo ",'".$f."'";
								}

						} ?>],
						datasets: [{
							label: 'hour / price usage',
							data: [<?php
							$z=0;
							foreach($secondcol as $s){ 
								if($z==0){
									echo $s;
									$z++;
								}else{
									echo ",".$s;
								}

						} ?>],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
			  
			  <?php
                    $file = fopen("datasets/predicted.csv","r");
					$col1;
					$col2;
                    while(! feof($file)){
                        $b = fgetcsv($file);
						$col1[]=$b[0];
						$col2[]=$b[1];
                    }
                    fclose($file);
                ?>
			  <script>
				var ctx2 = document.getElementById("lineChart2").getContext('2d');
				var myChart2 = new Chart(ctx2, {
					type: 'bar',
					data: {
						labels: [<?php
							$c=0;
							foreach($col1 as $f){ 
								if($c==0){
									echo "'".$f."'";
									$c++;
								}else{
									echo ",'".$f."'";
								}

						} ?>],
						datasets: [{
							label: 'hour / price usage',
							data: [<?php
							$z=0;
							foreach($col2 as $s){ 
								if($z==0){
									echo $s;
									$z++;
								}else{
									echo ",".$s;
								}

						} ?>],
							backgroundColor: [
								'rgba(255, 99, 132, 0.2)',
								'rgba(54, 162, 235, 0.2)',
								'rgba(255, 206, 86, 0.2)',
								'rgba(75, 192, 192, 0.2)',
								'rgba(153, 102, 255, 0.2)',
								'rgba(255, 159, 64, 0.2)'
							],
							borderColor: [
								'rgba(255,99,132,1)',
								'rgba(54, 162, 235, 1)',
								'rgba(255, 206, 86, 1)',
								'rgba(75, 192, 192, 1)',
								'rgba(153, 102, 255, 1)',
								'rgba(255, 159, 64, 1)'
							],
							borderWidth: 1
						}]
					},
					options: {
						scales: {
							yAxes: [{
								ticks: {
									beginAtZero:true
								}
							}]
						}
					}
				});
				</script>
				
			 
		</div>
	  			
	  </div>
	</div>

	
</div>
<!-- right col --> 
<!-- /page content -->