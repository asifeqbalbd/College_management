<div class="text-center">
	<h3>Faridpur Polytechnic Institute , Faridpur</h3>
</div>

<div class="container">
	<div class="row">
		<?php 
		if (isset($result)) 
		{
			$count=1;
			foreach ($result->result() as $row) {
				?>
				<div class="col-4">
					<div class="card">
						<img src="<?=base_url('/upload/').$row->image;?>" alt="..." class="card-img-top" height="400px">
						<div class="card-body">
							<h4 class="card-title">Name :  <?=$row->name;?></h4>
							<h5 class="card-text">
								Roll 	:  <?=$row->roll;?><br />
								Session :  <?=$row->session;?>
							</h5>
							<a class="card-link" href="<?=base_url('registration/single/').$row->id;?>">read more</a>
						</div>
					</div>
				</div>
				<?php
			$count++;
			}		
		} 
		?>
	</div>
</div>
