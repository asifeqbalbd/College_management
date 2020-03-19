<div class="alert alert-primary" role="alert">
	<?php
	if(isset($msg)){
		echo "<p>".$msg."</p>";
	}
	?>
</div>
<div class="text-center">
	<h3>Faridpur Polytechnic Institute , Faridpur</h3>
</div>
<div class="container">
	<div class="row mt-3">
		<div class="col-8 pt-4">
			<div class="card">
				<?php 
				if (isset($result)) 
				{
					foreach ($result->result() as $row) {
						$timedb = $row->birth;	
						$time = strtotime($timedb);
						$date = date('M d, Y', $time);
						?>
						<table class="table table-striped">
						<h4>
							<img src="<?=base_url('/upload/').$row->image;?>" alt="" class="card-img-top"><br />
							id:<?=$row->sid;?>
							Student Name 		:<?=$row->name;?><br /><br />
							Date of Birth 		:<?=$date;?><br /><br />
							Father Name 		:<?=$row->f_name;?><br /><br />
							Mother Name 		:<?=$row->m_name;?><br /><br />
							Permanent Address 	:<?=$row->premanet_add;?><br /><br />
							Student Mobile 		:<?=$row->mobile;?><br /><br />
							Guardians Mobile 	:<?=$row->gmobile;?><br /><br />
							Email Addres 		:<?=$row->emaile;?><br /><br />
							Course Name 		:<?=$row->course;?><br /><br />
							Trade/Technology 	:<?=$row->trade;?><br /><br />
							Session 			:<?=$row->session;?><br /><br />
							Duration 			:<?=$row->duration;?><br /><br />
							Roll 				:<?=$row->roll;?><br /><br />
							Registration 		:<?=$row->reg;?><br /><br />
							Passing Year 		:<?=$row->passing;?><br /><br />
							Name of Industry/Organization:<?=$row->ondustry;?><br /><br />
							Contract Number:<?=$row->cnumber;?><br /><br />
							Designation:<?=$row->designation;?><br /><br />
							Monthly Salary:<?=$row->salary;?><br /><br />
							<a href='<?php echo base_url("registration/deletedata/").$row->id; ?>'> Delete</a>
						</h4>
					</table>
						<?php
					}	
					
				} 
				?>
			</div>
		</div>
	</div>
</div>