
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
<style>
	.square{
		width:100px;
		height:40px;
		border:1px solid #eee;
		color:white;
		display:inline-block;
		margin-left:2px;
		margin-top:10px;
		font-size:20px;
		padding:5px;
		border-radius:2px;
		text-align: center;
	}
	#CHP{
		margin-top:100px;
		background:#26C226;
	}
	#solar{
		background:#C22714;
	}
	#biomass{
		background:#C22714;
	}
	#biogas{
		background:#C22714;
	}
	
</style>
<div class="col-md-10 col-xs-12 condiv" role="main" style="min-height:95%;">
	
	
	<div class="clearfix"></div>
	
	<div class="row x_panel">
	  <div class="col-md-8 col-sm-12 col-xs-12">
		<div class="" style="min-height:500px;">
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
				  <div class="col-md-12 ">
					<div class="x_panel">
					  <div class="x_title">
						<h2>Electricity Real Usage</h2>

						<div class="clearfix"></div>
					  </div>
					  <div class="x_content">
						<style>
							#barex{
								min-height:400px;
							}
						</style>
						 <div id="barex"></div>
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
				 
				var mochart = new Morris.Bar({
				  // ID of the element in which to draw the chart.
				  element: 'barex',
			// Chart data records -- each entry in this array corresponds to a point on
				  // the chart.
				  data: [],
				  // The name of the data record attribute that contains x-values.
				  xkey: 'hour',
				  // A list of names of data record attributes that contain y-values.
				  ykeys: ['value'],
				  // Labels for the ykeys -- will be displayed when you hover over the
				  // chart.
				  labels: ['Value']
				});
				  
				
				var i=0;
				function repo(){
					f=i+24;
					ds=alldata.slice(i,f);
					if(alldata[i]>=8){
						$("#biogass").css("background-color","#26C226");
						$("#biomass").css("background-color","#26C226");
					}else{
						$("#biogass").css("background-color","#C22714");
						$("#biomass").css("background-color","#C22714");
					}
					if(i<17 && i>4){
						$("#solar").css("background-color","#26C226");
					}else{
						$("#solar").css("background-color","#C22714");
					}
					i++;
					myset = [];
					for(zip = 0 ; zip<24;zip++){
						var twod = {
							'hour': mylable[zip],
							'value': ds[zip]
						};
						
						myset.push(twod);
					}
					
					mochart.setData(myset);
					setTimeout(repo, 1000);
				}  
				  
				$(document).ready(function() {
					setTimeout(repo, 1000);

				});
				  
				
				</script>
			  
			  
				
			 
		</div>
		
	  </div>
	  
	  </div>
	  <div class="col-md-4">
	  	<div class="square" id="CHP">
	  		CHP
	  	</div><br/>
	  	<div class="square" id="solar">
	  		Solar
	  	</div>
	  	<br/>
	  	<div class="square" id="biogas">
	  		Biogas
	  	</div><br/>
	  	<div class="square" id="biomass">
	  		Biomass
	  	</div>
	  </div>

	
</div>
<!-- right col --> 
<!-- /page content -->