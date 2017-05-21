<?php
include('session.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$team_name = mysqli_real_escape_string($db,$_POST['team_name']);
	$team_number = mysqli_real_escape_string($db,$_POST['team_number']);
	$team_members = mysqli_real_escape_string($db,$_POST['team_members']);
	$autonomous = mysqli_real_escape_string($db,$_POST['autonomous']);
	$auto_beacons = mysqli_real_escape_string($db,$_POST['auto_beacons']);
	$auto_capball = mysqli_real_escape_string($db,$_POST['auto_capball']);
	$auto_park_ramp = mysqli_real_escape_string($db,$_POST['auto_park_ramp']);
	$auto_park_ramp_full = mysqli_real_escape_string($db,$_POST['auto_park_ramp_full']);
	$auto_park_center = mysqli_real_escape_string($db,$_POST['auto_park_center']);
	$auto_park_center_full = mysqli_real_escape_string($db,$_POST['auto_park_center_full']);
	$auto_score_corner = mysqli_real_escape_string($db,$_POST['auto_score_corner']);
	$auto_score_center = mysqli_real_escape_string($db,$_POST['auto_score_center']);
	$auto_reliable = mysqli_real_escape_string($db,$_POST['auto_reliable']);
	$auto_blob = mysqli_real_escape_string($db,$_POST['auto_blob']);
	$teleop = mysqli_real_escape_string($db,$_POST['teleop']);
	$tele_beacons = mysqli_real_escape_string($db,$_POST['tele_beacons']);
	$tele_score_corner = mysqli_real_escape_string($db,$_POST['tele_score_corner']);
	$tele_score_center = mysqli_real_escape_string($db,$_POST['tele_score_center']);
	$tele_capball_lift = mysqli_real_escape_string($db,$_POST['tele_capball_lift']);
	$tele_capball_lifthigh = mysqli_real_escape_string($db,$_POST['tele_capball_lifthigh']);
	$tele_capball_cap = mysqli_real_escape_string($db,$_POST['tele_capball_cap']);
	$tele_reliable = mysqli_real_escape_string($db,$_POST['tele_reliable']);
	$tele_blob = mysqli_real_escape_string($db,$_POST['tele_blob']);
	$info_blob = mysqli_real_escape_string($db,$_POST['info_blob']);
	
	
	$sql = "INSERT INTO reports (
		team_name,
		team_number,
		team_members,
		autonomous,
		auto_beacons,
		auto_capball,
		auto_park_ramp,
		auto_park_ramp_full,
		auto_park_center,
		auto_park_center_full,
		auto_score_corner,
		auto_score_center,
		auto_reliable,
		auto_blob,
		teleop,
		tele_beacons,
		tele_score_corner,
		tele_score_center,
		tele_capball_lift,
		tele_capball_lifthigh,
		tele_capball_cap,
		tele_reliable,
		tele_blob,
		info_blob
	) VALUES (
		'$team_name',
		'$team_number',
		'$team_members',
		'$autonomous',
		'$auto_beacons',
		'$auto_capball',
		'$auto_park_ramp',
		'$auto_park_ramp_full',
		'$auto_park_center',
		'$auto_park_center_full',
		'$auto_score_corner',
		'$auto_score_center',
		'$auto_reliable',
		'$auto_blob',
		'$teleop',
		'$tele_beacons',
		'$tele_score_corner',
		'$tele_score_center',
		'$tele_capball_lift',
		'$tele_capball_lifthigh',
		'$tele_capball_cap',
		'$tele_reliable',
		'$tele_blob',
		'$info_blob'
	)";
	if (mysqli_query($db, $sql)) {
    	echo "Report created successfully";
		$report_id = mysqli_insert_id($db);
		//echo $report_id;
		header("Location: view.php?report=" . $report_id);
	} else {
		echo "Error: " . $sql . mysqli_error($db);
	}
	
}
?>