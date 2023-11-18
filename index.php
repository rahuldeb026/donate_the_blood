<?php 

	//include header file
	include ('include/header.php');

?>


<div class="container-fluid header-img">
				<div class="row">
					<div class="col-md-6 offset-md-3">

						<div class="header">
							<h1 class="text-center">Donate the blood, save the life</h1>
						<p class="text-center">Donate the blood to help the others.</p>
						</div>


						<h1 class="text-center">Search The Donors</h1>
						<hr class="white-bar text-center">

						<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center justify-content-center">
							
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option><optgroup title="Khulna Division" label="&raquo;Khulna Division"></optgroup><option value="Bagerhat" >Bagerhat</option><option value="Chuadanga" >Chuadanga</option><option value="Jashore" >Jashore</option><option value="Jhenaidah" >Jhenaidah</option><option value="Khulna" >Khulna</option><option value="Kushtia" >Kushtia</option><option value="Magura" >Magura</option><option value="Meherpur" >Meherpur</option><option value="Narail" >Narail</option><option value="Satkhira" >Satkhira</option><optgroup title="Dhaka Division" label="&raquo; Dhaka Division"></optgroup><option value="Dhaka" >Dhaka</option><option value="Faridpur" >Faridpur</option><option value="Gazipur" >Gazipur</option><option value="Gopalganj" >Gopalganj</option><option value="Kishoreganj" >Kishoreganj</option><option value="Madaripur" >Madaripur</option><option value="Manikganj" >Manikganj</option><option value="Munshiganj" >Munshiganj</option><option value="Narayanganj" >Narayanganj</option><option value="Narsingdi" >Narsingdi</option><option value="Rajbari" >Rajbari</option><option value="Shariatpur" >Shariatpur</option><option value="Tangail" >Tangail</option><optgroup title="Chittagong Division" label="&raquo; Chittagong Division"></optgroup><option value="Bandarban" >Bandarban</option><option value="Brahmanbaria" >Brahmanbaria</option><option value="Chandpur" >Chandpur</option><option value="Chattogram" >Chattogram</option><option value="Cox's Bazar" >Cox's Bazar</option><option value="Cumilla" >Cumilla</option><option value="Feni" >Feni</option><option value="Khagrachhari" >Khagrachhari</option><option value="Lakshmipur" >Lakshmipur</option><option value="Noakhali" >Noakhali</option><option value="Rangamati" >Rangamati</option><optgroup title="Sylhet Division" label="&raquo; Sylhet Division"></optgroup><option value="Habiganj" >Habiganj</option><option value="Moulvibazar" >Moulvibazar</option><option value="Sunamganj" >Sunamganj</option><option value="Sylhet" >Sylhet</option><optgroup title="Barisal Division" label="&raquo; Barisal Division"></optgroup><option value="Barguna" >Barguna</option><option value="Barishal" >Barishal</option><option value="Bhola" >Bhola</option><option value="Jhalokati" >Jhalokati</option><option value="Patuakhali" >Patuakhali</option><option value="Pirojpur" >Pirojpur</option><optgroup title="Rajshahi Division" label="&raquo; Rajshahi Division"></optgroup><option value="Bogura" >Bogura</option><option value="Joypurhat" >Joypurhat</option><option value="Naogaon" >Naogaon</option><option value="Natore" >Natore</option><option value="Chapainawabganj" >Chapainawabganj</option><option value="Pabna" >Pabna</option><option value="Rajshahi" >Rajshahi</option><option value="Sirajganj" >Sirajganj</option><optgroup title="Rangpur" label="&raquo; Rangpur"></optgroup><option value="Dinajpur" >Dinajpur</option><option value="Gaibandha" >Gaibandha</option><option value="Kurigram" >Kurigram</option><option value="Lalmonirhat" >Lanmonirhat</option><option value="Nilphamari" >Nilphamari</option><option value="Panchagarh" >Panchagarh</option><option value="Rangpur" >Rangpur</option><option value="Thakurgaon" >Thakurgaon</option><optgroup title="Mymensingh Division" label="&raquo; Mymensingh Division"></optgroup><option value="Jamalpur" >Jamalpur</option><option value="Mymensingh" >Mymensingh</option><option value="Netrokona" >Netrokona</option><option value="Sherpur" >Sherpur</option></select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">
									
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="submit" class="btn btn-lg btn-danger">Search</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<!-- header ends -->

			<!-- donate section -->
			<div class="container-fluid red-background">
				<div class="row">
					<div class="col-md-12">
						<h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
						<hr class="white-bar">
						<p class="text-center pera-text">
						Blood Donation Is The Act Of Giving Blood To Someone Who Needs It. It Is Not Just About Giving Blood, But It Is An Act Of Kindness That Saves The Lives Of Hundreds Of People. These Fifteen Minutes Of Your Life Can Save Someone’s Entire Life. You Can’t Even Imagine That Donating One Bag Of Blood Can Be So Beneficial To The Human Race. Donating The Blood Without Expecting Or Asking For Any Money Or Gesture Is A Great Act Of Kindness, And If You Are 18 Years Old Or Above, You Should Definitely Take Part In This Act Of Kindness.
						
						Specifically, World Blood Donor Day Is Celebrated On 14 June To Honor People Who Donate Blood For The Sake Of The Welfare Of Humanity.
						</p>
						<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
					</div>
				</div>
			</div>
			<!-- end doante section -->
			

			<div class="container">
				<div class="row">
    				<div class="col">
    					<div class="card">
     						<h3 class="text-center red">Blood Donation Day</h3>
								<img src="img/1.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								World Blood Donor Day takes place on 14 June each year. The aim is to raise global awareness of the need for safe blood and blood products for transfusion and of the critical contribution voluntary, unpaid blood donors make to national health systems.
								</p>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
      							<h3 class="text-center red">Benifits Of Donating blood!</h3>
								<img src="img/2.jpg" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								Many People Think That It Is Harmful Or Will Cause Weakness In The Body. Still, In Reality, It Is Beneficial Because It Reduces The Risk Of Damaged Liver, Pancreas, And Cardiovascular Diseases.
								</p>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
      						<h3 class="text-center red">Future Plan</h3>
								<img src="img/3.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
								<p class="text-center">
								The objective of collecting blood through voluntary blood donation are: Provide safe and quality blood and blood components collected from voluntary donors, round the clock, at affordable cost to the general public and free of cost to the poor. Ensure safety and quality of blood.
								</p>
							</div>
   			 		</div>
 			</div>
 		</div>

			<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php');
 ?>