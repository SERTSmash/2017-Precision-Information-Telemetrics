<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport"><!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Reporting Panel</title><!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"><!-- Theme -->
	<link href="/assets/css/style.css" rel="stylesheet">
	<script type="text/javascript">
		<!--
			function showForm (it, box) {
			var vis = (box.checked) ? "block" : "none";
			document.getElementById(it).style.display = vis;
		}
		//-->
	</script>
	<script type="text/javascript">
    // when page is ready
    $(document).ready(function() {
         // on form submit
        $("#form").submit(function() {
            // to each unchecked checkbox
            $(this + 'input[type=checkbox]:not(:checked)').each(function () {
                // set value 0 and check it
                $(this).attr('checked', true).val(0);
            });
        })
    })
	</script>
</head>
<body>
	<div class="container">
		<div class="row">
		<div class="col-md-4"><h2 class="center">Welcome <?php echo $login_session; ?></h2></div>
		<div class="col-md-4"><h2 class="center">Scouting Form</h2></div>
		<div class="col-md-4"><h5 class="center"><a class="btn btn-default" href="logout.php">Sign Out</a></h5></div>
		</div>
		<div class="row">
			<div class="col-md-3 center">
			</div>
			<div class="col-md-6 center">
				<form id="form" class="center" action="report.php" method="post">
					<br>
					<p>Team Information:</p>
					<div class="form-group"><input name="team_name" type="text" class="form-control" placeholder="Team Name"></div>
					<div class="form-group"><input name="team_number" type="text" class="form-control" placeholder="Team Number"></div>
					<div class="form-group"><input name="team_members" type="text" class="form-control" placeholder="Number of Team Members"></div>
					<br>
					<p>Program Information:</p>
					<div>
						<input type='hidden' value='0' name='autonomous'>
						<label>Autonomous: </label><input type="checkbox" name="autonomous" value="1" onclick="showForm('auto', this)" /><br>
						<div id="auto" style="display:none">
							<input type='hidden' value='0' name='auto_beacons'>
							<p>Can it capture beacons? <input type="checkbox" name="auto_beacons" value="1" /></p>
							<input type='hidden' value='0' name='auto_capball'>
							<p>Can it move the cap ball? <input type="checkbox" name="auto_capball" value="1" /></p>
							<input type='hidden' value='0' name='auto_park_ramp'>
							<p>Can it park on the ramp? <input type="checkbox" name="auto_park_ramp" value="1" /></p>
							<input type='hidden' value='0' name='auto_park_ramp_full'>
							<p>Can it park on the ramp completely? <input type="checkbox" name="auto_park_ramp_full" value="1" /></p>
							<input type='hidden' value='0' name='auto_park_center'>
							<p>Can it park on the center? <input type="checkbox" name="auto_park_center" value="1" /></p>
							<input type='hidden' value='0' name='auto_park_center_full'>
							<p>Can it park on the center completely? <input type="checkbox" name="auto_park_center_full" value="1" /></p>
							<input type='hidden' value='0' name='auto_score_corner'>
							<p>Can it get balls in the corner vortices? <input type="checkbox" name="auto_score_corner" value="1" /></p>
							<input type='hidden' value='0' name='auto_score_center'>
							<p>Can it get balls in the center vortex? <input type="checkbox" name="auto_score_center" value="1" /></p>
							<input type='hidden' value='0' name='auto_reliable'>
							<p>Is the autonomous reliable? <input type="checkbox" name="auto_reliable" value="1" /></p>
							<div class="form-group"><textarea name="auto_blob" class="form-control" placeholder="More info about Autonomous" rows="5"></textarea></div>
						</div>
						<input type='hidden' value='0' name='teleop'>
						<label>TeleOp: </label><input type="checkbox" name="teleop" value="1" onclick="showForm('tele', this)" /><br>
						<div id="tele" style="display:none">
							<input type='hidden' value='0' name='tele_beacons'>
							<p>Can it capture beacons? <input type="checkbox" name="tele_beacons" value="1" /></p>
							<input type='hidden' value='0' name='tele_score_corner'>
							<p>Can it get balls in the corner vortices? <input type="checkbox" name="tele_score_corner" value="1" /></p>
							<input type='hidden' value='0' name='tele_score_center'>
							<p>Can it get balls in the center vortex? <input type="checkbox" name="tele_score_center" value="1" /></p>
							<input type='hidden' value='0' name='tele_capball_lift'>
							<p>Can it lift the cap ball? <input type="checkbox" name="tele_capball_lift" value="1" /></p>
							<input type='hidden' value='0' name='tele_capball_lifthigh'>
							<p>Can it lift the cap ball above the bar? <input type="checkbox" name="tele_capball_lifthigh" value="1" /></p>
							<input type='hidden' value='0' name='tele_capball_cap'>
							<p>Can it cap the cap ball <input type="checkbox" name="tele_capball_cap" value="1" /></p>
							<input type='hidden' value='0' name='tele_reliable'>
							<p>It the TeleOp reliable? <input type="checkbox" name="tele_reliable" value="1" /></p>
							<div class="form-group"><textarea name="tele_blob" class="form-control" placeholder="More info about TeleOp" rows="5"></textarea></div>
						</div>
					</div>
					<br>
					<p>Additionl Info:</p>
					<div class="form-group"><textarea name="info_blob" class="form-control" placeholder="More info about team or robot" rows="5"></textarea></div>
					<div class="form-group"><input type="submit" class="btn btn-info" value="Submit Report"></div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
	</script> <!-- Latest compiled and minified JavaScript -->
	 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
	</script>
</body>
</html>
<!--                     Twilight is cutest smartest all around best pony.
              (ASCII art shamelessly stolen from Everfree.net before they went down)

                                     :os/.
                             `-:+syhdho:ohhhdhyo/-.
                         ./ohmmmmmmmmho-–:shdmmmmmmdy+-`
                     `-ohmmmmmmddddmmdh:-–-ohhddddmmmmmms-`
                   -odmmmmmmdddddmmmmdh+-–-+yshddmdmdmmmmmdo:`
                `/hmmmmdddddmddmmmmmmmhy-–/y/-+yhddddmddmmmmmmy/.
              .odmmmddddddmddmmmmmdddmdh+os:-–-:yhhdmdddddddddmmmh+.
            .ommmmddddddddmdmNmmddddmmdhy:-–-–-–hoyhddddddddddhyshmmh+-`
          `+dNmmdddddddddmmmmmddddddddmdh+-–-–-+y-:ydddddddhhsoooooshmmdo:.                  ```
         .yNmmmddmddddddmmNmmmmmddddddddhs-–-–+y//yhdddddhysoooooooshmmmNmdy+-`         `.:+ooos/`
        :dNmdddddmmddddmmNmddddddddddddmdh/-/ss+shddddddhsoooooooshmmmmmmmmmmmdy+:.` `-+sso+::-oho
       +mmmdmddmmmmdddmmmmmddddddddddddmdhyoo/ohddddddhsooooooooymmmdmNmddddmmmmmmmhsss+/-–-–-–-yh:
      +mmmddddmmNmdmddmmmdmdddddddddddddmhh/:shddddddhooooooooodmmddmNmdmdddmdddmddhs/-–-–-–-–-–ohs
     +mmmddddmNNmddmdmNmddddddddddddddddmdhyhdddddddyoooooooosmmmddmNmdmdddddmdmdhs/-–-–-–-–-–-–:hh.
    :mmmdddmmNNmmdddmNmmddddddddddddddmdmdhddddddddyoooooooosmmmmdmmmmdddddddmmdh+-–-–-–-–-–-–-–-yh/
   .dNmddmmmmhNmdddmNmddddddddddddddddddddddddddddyoooooooosmmddddmNmddddddddmmy/-–-–-–-–-–-–-–-–sh+
  `yNmddmdmm:dmddddmNmdddddddddddddddddddddddddddyoooooooosmmdddmmNmddddddddmNd:-–-–-–-–-–-–-–-–-sh+
  /Nmddddmm:+NmddmdmmmmmmmmmmmmmmmmmmdddddddddddhooooooooodNmddmdmNmddddddddmNs-–-–-–-–-–-–-–-–:-sh+
 .dmddddmm/ hNmmmmmNNNNmmmmmmNNmmmmmmmmmddddddddsoooooooosNmdddddmNdmdddddddmNo-–-–-–-–-–-–-–-o:-hh:
 yNmmmmmmy  yymhso++yNNho/shdmNmdyooosyhdmmmmmmdsoooooooodNmdddddNmdddddddmdmN+-–-–-–-–-–-–-–o+-/hh`
:mmdys+/-`   `md/-–-–:smMmy+smNMMMmo-–-–-::/oydmmmdysoooommdddddmNmdddddddmdmNo-–-–-–-–-–-–:o/-–sh+
-–.           ymNds:-–oms.:yhdNMMMMMd-–-–-–-–-–-/oymmmdysmmddddddNmdddddddddmNs-–-–-–-o:-:oo-–-+hy`
              /h+ohmmmm:      `+NMMMMd-–-–-–-–-–-–-–:+ymNNNmmddddmNdddddddddmNd:-–-:smh-oo:-–-:hh-
              `ys-–-dm-         /MMMMMy-–-–-–-–-–-–-–-–-/shmNNmmdmNmddddddddmNNNoshNNh++:-–-–:yh/
            /. -y/-sN:          -MMMMMM:-–-–-–-–-–-–-–-–-–-:dNmNNmNmdmdddddddmNNMds+/:-–-–-–:yh/
            -hdhmdyNs          `yMMMMMMs-–-–-–-–-–-–-–-–-–-sMy`:odNNmmmddmdddmNNMs-–-–-–:+/:yy:
              .:hdso.         `yMMMMMMMd-–-–-–-–-–-–-–-–-–+Md`   `hNNNNmmmmdmdmNNmo++oyddo+hs.
               `ys-.    `   .+mMMMMMMMMm-–-–-–-–-–-–-–-–-–mN-    +NMMMMNNNNmmddmNNmdhyo/:shy`
               .ho-`   .dyymNMMNMMMMMMMN:-–-–-–-–-–-–-–-–sMs   .yMMMMMMMNNNdmNmmmNms++/+hdmm.
               :h/-`    ydmMMh-`-mMMMMMN:-–-–-–-–-–-–-–-:mN-–/hNMMMMMMMMNNN.`:oymNNNNNNNNNNm.
               :h+-`    .sodM:  :NMMMMMN-–-–-–-–-–-–-–-–oMMNNMNysmMMMMMNmmy    `-/sdNmmmmmNy`
               -ho-.     -–-dNhdNMMMMMMm-–-–-–-–-–-–-–-–hMMMMM:  +MMMMdyhh.    `-–:dmdmmdmN+
               `ys-–      `odmNMMMMMMMMd-–-–-–-–-–-–-–-:mMMMMMy+sNMMm+/oo.     .-–/mmdddmNm.
                shoyo`     -shddmmmmmdNh-–-–-:::::-–-–-/NMMMMMMMMMNmy:..`     `-–-sNmdddmNo
                +my+yo`     `.:+oosoo/ms-–/ossssssso:-–/NmNNNNNNmmddho.      `-–-–dNmddmNd`
                .yhho/o/              d/-//::-–-–-:+o:-+doyhdddhhys/.`      .yy/-oNmddmNN/
                 +h+.sh:..``         `+-–-–-–-–-–-–-–-–:+ `.-–-..`       ``so-://mNmdmmNs
                 `sy:+:-–-–-–.......-–-–-+o:-–-–-–:/:-–-–``           ``-h+:y/-–hNmddmNm.
                  .yy:-–-–-–-–-–-–::-–-–-–:/-–-–-:++:-–-–-–..........-–-–/y.-–-yNmddmNN+
                   -yy:-–-–-–-–-–-:s/-–-–-–-–-–-–-–-–-–-–-//-–-–-–-–-–-–-–-–-:hNmmmmNNh`
                    -yy:-–-–-–-–-–-/s+-–-–-–-–-–-–-–-–-–/so/-–-–-–-–-–-–-–-–+dNmmmmNNm-
                     .oy/-–-–-–-–-–-:os+/::-–-–-–-–-–:/oo/-–-–:/-–-–-–-–-:odNmmmmmmmNs
                       /ys:-–-–-–-–-–-–/+osoooo+oooooo/:-–-–-–dmho+++osydmNmmmmmmmmNN-
                        `+yo:-–-–-–-–-–-–-–:::///::-–-–-–-–-–sNmmmmmmmmmmmmmmmmdddmNd`
                          .+yo/-–-–-–-–-–-–-–-–-–-–-–-–-–-–-+NNmmmmmmmmmmmmmmmmdmmNNs
                            `/ss+:-–-–-–-–-–-–-–-–-–-–-–-–-:dNmmmmmmmmmmmmmmNmdmmmmN+
                               ./sso/:-–-–-–-–-–-–-–-–-–-–-oNmddddddmmmmmmNNmmmNmymN/
                                  `-/syso++//:-–-–-–-–-–-–-hNmmmmmmmmmdyydNmmmNdsodN/
                                     :h:::/:::-–-–-–-–-–-–-:/+ossoo+//odNmmmNmdsosmN/
                                     /h-–-–-–-–-–-–-–-–-–-–-–-–-–-/ohmmmmmmNmhooohmNo
                                     +h-–-–-–-–-–-–-–-–-–-++oosyhmNmmmdmmNmdsooohddNd
-->