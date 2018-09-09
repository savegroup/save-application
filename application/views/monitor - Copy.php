
<!-- page content --> 
<!-- left col --> 
<div class="col-md-2 col-xs-12" style="min-height:95%;color:white">
      <section >
        <div class="panel-body">
           <h3>Real Time electricy usage</h3>
          <br>
          
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
	
	
	<div class="clearfix"></div>
	
	<div class="row">
	  <div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel" style="min-height:500px;">
            <?php
				$file = fopen("datasets/realtime.csv","r");
				$firstcol;
				$secondcol;
				while(! feof($file)){
					$a = fgetcsv($file);
					$firstcol[]=$a[0];
					$secondcol[]=$a[1];				}
				fclose($file);
			?>
                          
                <div class="row">
				  <div class="col-md-9 ">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Electricity Real Usage</h2>

						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<canvas id="lineChart" style="min-height:400px;"></canvas>
					  </div>


					</div>
				  </div>
              
              <script>
				var alldata=[<?php
							$c=0;
							foreach($secondcol as $f){ 
								if($c==0){
									echo $f;
									$c++;
								}else{
									echo ",".$f;
								}

						} ?>];
				 
				var mylable =['0:00:00','1:00:00','2:00:00','3:00:00','4:00:00','5:00:00','6:00:00','7:00:00','8:00:00','9:00:00','10:00:00','11:00:00','12:00:00','13:00:00','14:00:00','15:00:00','16:00:00','17:00:00','18:00:00','19:00:00','20:00:00','21:00:00','22:00:00','23:00:00'];
				  
				var ctx = document.getElementById("lineChart").getContext('2d');
				var myChart = new Chart(ctx, {
					type: 'bar',
					data: {
						labels: mylable,
						datasets: [{
							label: 'hour / price usage',
							data: alldata.slice(0,24) ,
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
				
				  function removeData(mchart) {
					mchart.data.labels.pop();
					mchart.data.datasets.forEach((dataset) => {
						dataset.data.pop();
					});
					mchart.update();
				}
				  
			    function addData(mchart,label,data) {
					//mchart.data.labels.push(label);
					mchart.data.datasets.forEach((dataset) => {
						dataset.data.push(data);
					});
					mchart.update();
					
				}
				var i=0;
				function repo(){
					++i;
					f=i+24;
					ds=alldata.splice(0,24);
					alert(ds);
					addData(myChart,mylable,ds);
					setTimeout(repo, 1000);
				}  
				  
				$(document).ready(function() {
					setTimeout(repo, 1000);

				});
				
				</script>
			  
			  
				
			 
		</div>
	  </div>
	</div>

	
</div>
<!-- right col --> 
<!-- /page content -->