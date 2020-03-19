<div class="container">
	<div class="row mt-3">
		<div class="col-12 pt-2">

			<?php 
				if (isset($error)) 
				{
			?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  <strong>Sorry!</strong> <?=$error;?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>

			<?php
				}
	 			else if(isset($success))
				{
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				  <strong>Congrats!</strong> <?=$success;?>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>
			<?php
				}
			?>

			<div class="text-center">
				<h3>Faridpur Polytechnic Institute , Faridpur</h3>
			</div>

			<div class="card">
				 <div class="card-header">
				    Student Information Form
				  </div>
				  <div class="card-body">

				  	<form method="post" enctype="multipart/form-data" action="<?php echo base_url('registration/validation');?>">

				  		<div class="form-group">
					    	<label for="sid">Id</label>
					    	<input type="number" name="sid" class="form-control rounded-0" id="sid" placeholder="type Your Id">
					    	<span class="text-danger"><?= form_error('sid'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="name">Student Name</label>
					    	<input type="charcter" name="name" class="form-control rounded-0" id="name" placeholder="type Your Name">
					    	<span class="text-danger"><?= form_error('name'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="pic">Image</label>
					    	<input type="file" name="picture" class="form-control-file" id="pic">
						</div>

						<div class="form-group">
					    	<label for="birth">Date of Birth</label>
					    	<input type="date" name="birth" class="form-control rounded-0" id="birth" placeholder="Type Your Birth Date">
					    	<span class="text-danger"><?= form_error('birth'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="f_name">Father Name</label>
					    	<input type="text" name="f_name" class="form-control rounded-0" id="f_name" placeholder="Type Your Father Name ">
					    	<span class="text-danger"><?= form_error('f_name'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="m_name">Mother Name</label>
					    	<input type="text" name="m_name" class="form-control rounded-0" id="m_name" placeholder="Type Your Mother Name ">
					    	<span class="text-danger"><?= form_error('m_name'); ?></span>
						</div>

						<div class="form-group">
							<label for="village">Permanent Address</label>
							<textarea name="village" class="form-control rounded-0" id="village" placeholder="Type Your Village/House Name, Road No........ "></textarea>
							<span class="text-danger"><?= form_error('village'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="Office">Post Office</label>
					    	<input type="Office" name="Office" class="form-control rounded-0" id="Office" placeholder="Type Your Post Office ">
					    	<span class="text-danger"><?= form_error('Office'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="thana">Thana</label>
					    	<input type="thana" name="thana" class="form-control rounded-0" id="thana" placeholder="Type Your Thana ">
					    	<span class="text-danger"><?= form_error('thana'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="dis">District</label>
					    	<select  name="dis" class="form-control rounded-0" id="dis" >
										<option name="dis"  value="">Your Ddistrict Name</option>
										<option name="dis"  value="BARGUNA"> BARGUNA    </option>
										<option name="dis"  value="BARISAL"> BARISAL    </option>
										<option name="dis"  value="BHOLA"> BHOLA    </option>
										<option name="dis"  value="JHALOKATI"> JHALOKATI    </option>
										<option name="dis"  value="PATUAKHALI"> PATUAKHALI    </option>
										<option name="dis"  value="PIROJPUR"> PIROJPUR     </option>
										<option name="dis"  value="BANDARBAN"> BANDARBAN</option>
										<option name="dis"  value="BRAHMANBARIA"> BRAHMANBARIA</option>
										<option name="dis"  value="CHANDPUR"> CHANDPUR</option>
										<option name="dis"  value="CHITTAGONG"> CHITTAGONG</option>
										<option name="dis"  value="COMILLA"> COMILLA</option>
										<option name="dis"  value="COX'S BAZAR"> COX'S BAZAR</option>
										<option name="dis"  value="FENI"> FENI</option>
										<option name="dis"  value="KHAGRACHHARI"> KHAGRACHHARI</option>
										<option name="dis"  value="LAKSHMIPUR"> LAKSHMIPUR</option>
										<option name="dis"  value="NOAKHALI"> NOAKHALI</option>
										<option name="dis"  value="RANGAMATI"> RANGAMATI</option>
										<option name="dis"  value="DHAKA"> DHAKA</option>
										<option name="dis"  value="FARIDPUR"> FARIDPUR</option>
										<option name="dis"  value="GAZIPUR"> GAZIPUR</option>
										<option name="dis"  value="GOPALGANJ"> GOPALGANJ</option>
										<option name="dis"  value="JAMALPUR"> JAMALPUR</option>
										<option name="dis"  value="KISHOREGONJ"> KISHOREGONJ</option>
										<option name="dis"  value="MADARIPUR"> MADARIPUR</option>
										<option name="dis"  value="MANIKGANJ"> MANIKGANJ</option>
										<option name="dis"  value="MUNSHIGANJ"> MUNSHIGANJ</option>
										<option name="dis"  value="MYMENSINGH"> MYMENSINGH</option>
										<option name="dis"  value="NARAYANGANJ"> NARAYANGANJ</option>
										<option name="dis"  value="NARSINGDI"> NARSINGDI</option>
										<option name="dis"  value="NETRAKONA"> NETRAKONA</option>
										<option name="dis"  value="RAJBARI"> RAJBARI</option>
										<option name="dis"  value="SHARIATPURI"> SHARIATPURI</option>
										<option name="dis"  value="SHERPUR"> SHERPUR</option>
										<option name="dis"  value="TANGAIL"> TANGAIL</option>
										<option name="dis"  value="BAGERHAT"> BAGERHAT</option>
										<option name="dis"  value="CHUADANGA"> CHUADANGA</option>
										<option name="dis"  value="JESSORE"> JESSORE</option>
										<option name="dis"  value="JHENAIDAH"> JHENAIDAH</option>
										<option name="dis"  value="KHULNA"> KHULNA</option>
										<option name="dis"  value="KUSHTIA"> KUSHTIA</option>
										<option name="dis"  value="MAGURA"> MAGURA</option>
										<option name="dis"  value="MEHERPUR"> MEHERPUR</option>
										<option name="dis"  value="NARAIL"> NARAIL</option>
										<option name="dis"  value="SATKHIRA"> SATKHIRA </option>
										<option name="dis"  value="BOGRA"> BOGRA</option>
										<option name="dis"  value="CHAPAINABABGANJ"> CHAPAINABABGANJ</option>
										<option name="dis"  value="JOYPURHAT"> JOYPURHAT</option>
										<option name="dis"  value="PABNA"> PABNA</option>
										<option name="dis"  value="NAOGAON"> NAOGAON</option>
										<option name="dis"  value="NATORE"> NATORE</option>
										<option name="dis"  value="RAJSHAHI"> RAJSHAHI</option>
										<option name="dis"  value="SIRAJGANJ"> SIRAJGANJ</option>
										<option name="dis"  value="DINAJPUR"> DINAJPUR</option>
										<option name="dis"  value="GAIBANDHA"> GAIBANDHA</option>
										<option name="dis"  value="KURIGRAM"> KURIGRAM,</option>
										<option name="dis"  value="LALMONIRHAT"> LALMONIRHAT</option>
										<option name="dis"  value="NILPHAMARI"> NILPHAMARI</option>
										<option name="dis"  value="PANCHAGARH"> PANCHAGARH</option>
										<option name="dis"  value="RANGPUR"> RANGPUR</option>
										<option name="dis"  value="THAKURGAON"> THAKURGAON</option>
										<option name="dis"  value="HABIGANJ"> HABIGANJ</option>
										<option name="dis"  value="MAULVIBAZAR"> MAULVIBAZAR</option>
										<option name="dis"  value="SUNAMGANJ"> SUNAMGANJ</option>
										<option name="dis"  value="SYLHET"> SYLHET</option>
									</select>
					    	<span class="text-danger"><?= form_error('dis'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="mobile">Student Mobile Number</label>
					    	<input type="text" name="mobile" class="form-control rounded-0" id="mobile" placeholder="Type Your Mobile Number ">
					    	<span class="text-danger"><?= form_error('mobile'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="gmobile">Guardians Mobile Number</label>
					    	<input type="text" name="gmobile" class="form-control rounded-0" id="gmobile" placeholder="Type Your Guardians Mobile Number ">
					    	<span class="text-danger"><?= form_error('gmobile'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="email">E-mail Address</label>
					    	<input type="email" name="email" class="form-control rounded-0" id="email" placeholder="Type Your E-mail Address ">
					    	<span class="text-danger"><?= form_error('email'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="course">Name of Course</label>
					    	<select type="text" name="course" class="form-control rounded-0" id="course">
					    		<option value="">Name of Course</option>
								<option value="B.Sc in Engineering">1. B.Sc in Engineering</option>
								<option value="B.Sc in Technical Education">2. B.Sc in Technical Education</option>
								<option value="Diploma in Engineering">3. Diploma in Engineering</option>
								<option value="Diploma in Technical Education">4. Diploma in Technical Education</option>
								<option value="SSC">5. SSC</option>
								<option value="SSC(Voc)">6. SSC (Voc)</option>
								<option value="HSC">7. HSC</option>
								<option value="HSC(Voc)">8. HSC(Voc)</option>
								<option value="NTVQF Leel-1">9. NTVQF Leel-1</option>
								<option value="NTVQF Leel-2">10. NTVQF Leel-2</option>
								<option value="360 hrs short coures">11. 360 hrs short coures</option>
								<option value="Others">12. Others</option>
							</select>
					    	<span class="text-danger"><?= form_error('course'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="trade">Trade/Technology</label>
					    	<div name="trade" class="form-control rounded-0" id="trade">
					    		<input type="radio" name="trade" value="Computer" checked>  Computer
								<input type="radio" name="trade" value="Power">  Power
								<input type="radio" name="trade" value="Civil">  Civil
								<input type="radio" name="trade" value="Electrical">  Electrical
								<input type="radio" name="trade" value="Mechanical">   Mechanical
								<input type="radio" name="trade" value="RAC">   RAC
								<input type="radio" name="trade" value="ICT">  ICT
								<input type="radio" name="trade" value="Food">  Food
								<input type="radio" name="trade" value="Electronics">   Electronics
								<input type="radio" name="trade" value="Electro Medical">   Electro Medical
								<input type="radio" name="trade" value="Arkitecture">   Arkitecture
								<input type="radio" name="trade" value="Marine ">   Marine 
								<input type="radio" name="trade" value="Aidt">   Aidt

					    	</div>
					    	<span class="text-danger"><?= form_error('trade'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="session">Session</label>
					    	<input type="text" name="session" class="form-control rounded-0" id="session" placeholder="Type Your Session ">
					    	<span class="text-danger"><?= form_error('session'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="duration">Duration</label>
					    	<div name="duration" class="form-control rounded-0" id="duration">
					    		<input type="radio" name="duration" value="4 Year" checked>4 Year
								<input type="radio" name="duration" value="3 Year">3 Year
								<input type="radio" name="duration" value="Others"> Others
					    	</div>
					    	<span class="text-danger"><?= form_error('duration'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="roll">Roll No</label>
					    	<input type="text" name="roll" class="form-control rounded-0" id="roll" placeholder="Type Your Roll No ">
					    	<span class="text-danger"><?= form_error('roll'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="reg">Reg.No</label>
					    	<input type="text" name="reg" class="form-control rounded-0" id="reg" placeholder="Type Your Reg.No ">
					    	<span class="text-danger"><?= form_error('reg'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="passing">Passing Year</label>
					    	<input type="text" name="passing" class="form-control rounded-0" id="passing" placeholder="Type Your Passing Year ">
					    	<span class="text-danger"><?= form_error('passing'); ?></span>
						</div>
						<div class="text-center"><h3>Employers Information</h3></div>

						<div class="form-group">
					    	<label for="ondustry">Name of Industry/Organization</label>
					    	<input type="text" name="ondustry" class="form-control rounded-0" id="ondustry" placeholder="Type Your Industry/Organization ">
					    	<span class="text-danger"><?= form_error('ondustry'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="cnumber">Contract Number</label>
					    	<input type="text" name="cnumber" class="form-control rounded-0" id="cnumber" placeholder="Type Your Contract Number ">
					    	<span class="text-danger"><?= form_error('cnumber'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="designation">Designation</label>
					    	<input type="text" name="designation" class="form-control rounded-0" id="designation" placeholder="Type Your Designation ">
					    	<span class="text-danger"><?= form_error('designation'); ?></span>
						</div>

						<div class="form-group">
					    	<label for="salary">Monthly Salary</label>
					    	<input type="text" name="salary" class="form-control rounded-0" id="salary" placeholder="Type Your Monthly Salary ">
					    	<span class="text-danger"><?= form_error('salary'); ?></span>
						</div>

						<div class="form-group">
							<button class="btn btn-success">Add</button>
							<button class="btn btn-danger">cancel</button>
						</div>

					</form>
				  </div>
			</div>
		</div>
	</div>
	
</div>