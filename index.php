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
			<div class="col-md-3 center">
			</div>
			<div class="col-md-6 center">
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