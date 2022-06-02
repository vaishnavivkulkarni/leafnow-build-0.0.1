<?php
if(isset($_POST['btn'])){
$fullname=$_POST['fullname'];
$profession=$_POST['profession'];
$picture=$_FILES['picture']['name'];
$tmp_name=$_FILES['picture']['tmp_name'];
$folder="images/".$picture;
move_uploaded_file($tmp_name, $folder);
$objective=$_POST['objective'];
$father=$_POST['father'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$nationality=$_POST['nationality'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$education=$_POST['education'];
$experience=$_POST['experience'];
$skills=$_POST['skills'];
$plant1=$_POST['plant1'];
$plant2=$_POST['plant2'];
$plant3=$_POST['plant3'];
$language1=$_POST['language1'];
$language2=$_POST['language2'];
$language3=$_POST['language3'];


$html="<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<title>Leaf Now-build 0.0.1</title>
</head>
<body>
<div id='container'>
		<div id='header'>
			<div id='left'>
				<div id='image'>
					<img src='images/{$picture}'>
				</div>
				<div>
					<h1>
						$fullname
					</h1>
					<h3>
						($profession)
					</h3>
				</div>
				<div>
					<h2>Contact</h2>
					<ul id='list'>
						<li>$address</li>
						<li>$mobile</li>
						<li>$email</li>
					</ul>
					<h2>Your motivation or tips for growing plants</h2>
					<ul id='list'>
						$skills
					</ul>
					<h2>Languages</h2>
					<ul id='list'>
						<li>$language1</li>
						<li>$language2</li>
						<li>$language3</li>
					</ul>
				</div>
			</div>
			<div id='right'>
				<div>
					<h2>Objective</h2>
					<p>
						$objective
					</p>
					<h2>Personal Information</h2>
					<table cellspacing='0' cellpadding='7'>
						<tr>
							<td><b>Father Name<b></td>
							<td>$father</td>
						</tr>
						<tr>
							<td><b>Gender<b></td>
							<td>$gender</td>
						</tr>
						<tr>
							<td><b>DOB<b></td>
							<td>$dob</td>
						</tr>
						<tr>
							<td><b>Nationality<b></td>
							<td>$nationality</td>
						</tr>
					</table>
					<h2>Education</h2>
					<p>
						$education
					</p>
					<h2>Experience</h2>
					<p>
						$experience
					</p>
					<h2>Plant Description</h2>
					<ul>
						<li>$plant1</li>
						<li>$plant2</li>
						<li>$plant3</li>
					</ul>
				</div>
			</div>
		</div>
</div>
	<div id='footer'>
		Mobile:$mobile / Email:$email
	</div>
</body>
</html>";
//include "vendor/autoload.php";
require_once __DIR__.'/vendor/autoload.php';
$mpdf=new \mPDF(['margin_top'=>2,'margin_right'=>2,'margin_bottom'=>2,'margin_left'=>2]);
$mpdf->SetDisplayMode('fullpage');
//load style.css file
$style=file_get_contents('style.css');
$mpdf->WriteHTML($style,1);
$mpdf->WriteHTML($html);
$mpdf->Output('leafnow.pdf','d');
exit();

}?>