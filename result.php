<?php require_once('inc/connection.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0041)http://www.doenets.lk/result/alresult.jsf -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="./View Results of G.C.E. (A_L) Examination results_files/theme.css.jsf"><link type="text/css" rel="stylesheet" href="./View Results of G.C.E. (A_L) Examination results_files/primefaces.css.jsf"><script type="text/javascript" src="./View Results of G.C.E. (A_L) Examination results_files/jquery.js.jsf"></script><script type="text/javascript" src="./View Results of G.C.E. (A_L) Examination results_files/primefaces.js.jsf"></script>
	
	<title>View Results of G.C.E. (A/L) Examination</title>
	<link rel="shortcut icon" href="http://www.doenets.lk/result/img/ico/favicon.ico">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description">
	<meta name="author">
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="./View Results of G.C.E. (A_L) Examination results_files/stylesh.css" rel="stylesheet" type="text/css">
	<!-- <link href="css/doenets-styles.css" rel="stylesheet" type="text/css" /> --></head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- BEGIN BODY --><body style="margin:0px !important;"><span id="printableArea">
		<div style="left: 0px;; margin-bottom: 20px; margin-top: 5px; text-align: center">
			<!-- background-color:#F5F6E8  -->
			<div style="text-align: center;">
				<img src="./View Results of G.C.E. (A_L) Examination results_files/examLogText.png" alt="Department of Examination" title="Department of Examination" width="280px" class="Centre">
			</div>
		</div>

		<div>

			<!-- BEGIN LOGIN FORM -->
			<div style="text-align: center;">
				<!-- <h3>View Results</h3> -->
<form id="frm" name="frm" method="post" action="result.php" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="frm" value="frm">

					<div class="alert alert-error hide">
						<div style="font-family: &#39;Open Sans&#39;, Arial, Helvetica, sans-serif; font-size: 13px;">
							G.C.E. (A/L) EXAMINATION
							2015<br> <span>
								Index Number </span><input id="frm:username" type="text" name="result" value="" maxlength="10" style="margin-right:4px;"><button id="frm:btnSubmit" name="frm:btnSubmit" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only ui-state-hover" onclick="document.body.style.cursor=&#39;wait&#39;;" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Show Results</span></button>
						</div>
					</div>
</form>

			</div><span id="resultPanel">

				<br>
<form id="j_idt16" name="j_idt16" method="post" action="http://www.doenets.lk/result/alresult.jsf" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt16" value="j_idt16">
<div id="j_idt16:j_idt17" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="font-size:11px; margin:5px;"><div id="j_idt16:j_idt17_content" class="ui-panel-content ui-widget-content">

<?php

$index=$_POST['result'];

$sqlname = "SELECT name FROM exam where indexn=$index";
$resultname = $connection->query($sqlname);

if ($resultname->num_rows > 0) {
    while($row = $resultname->fetch_assoc()) {
        $name= $row["name"];
        
    }
}

$sqlstream = "SELECT stream FROM exam where indexn=$index";
$resultstream = $connection->query($sqlstream);

if ($resultname->num_rows > 0) {
    while($row = $resultstream->fetch_assoc()) {
        $stream= $row["stream"];
        
    }
}

$sqlscore = "SELECT zscore FROM exam where indexn=$index";
$resultscore = $connection->query($sqlscore);

if ($resultscore->num_rows > 0) {
    while($row = $resultscore->fetch_assoc()) {
        $score= $row["zscore"];
        
    }
}

$sqldistrict = "SELECT district FROM exam where indexn=$index";
$resultdistrict = $connection->query($sqldistrict);

if ($resultdistrict->num_rows > 0) {
    while($row = $resultdistrict->fetch_assoc()) {
        $district= $row["district"];
        
    }
}

$sqlisland = "SELECT island FROM exam where indexn=$index";
$resultisland = $connection->query($sqlisland);

if ($resultisland->num_rows > 0) {
    while($row = $resultisland->fetch_assoc()) {
        $island= $row["island"];
        
    }
}

$sqlsubject1 = "SELECT subject1 FROM exam where indexn=$index";
$resultsubject1 = $connection->query($sqlsubject1);

if ($resultsubject1->num_rows > 0) {
    while($row = $resultsubject1->fetch_assoc()) {
        $subject1= $row["subject1"];
        
    }
}

$sqlsubject2 = "SELECT subject2 FROM exam where indexn=$index";
$resultsubject2 = $connection->query($sqlsubject2);

if ($resultsubject2->num_rows > 0) {
    while($row = $resultsubject2->fetch_assoc()) {
        $subject2= $row["subject2"];
        
    }
}

$sqlsubject3 = "SELECT subject3 FROM exam where indexn=$index";
$resultsubject3 = $connection->query($sqlsubject3);

if ($resultsubject3->num_rows > 0) {
    while($row = $resultsubject3->fetch_assoc()) {
        $subject3= $row["subject3"];
        
    }
}

$sqlenglish = "SELECT english FROM exam where indexn=$index";
$resultenglish = $connection->query($sqlenglish);

if ($resultenglish->num_rows > 0) {
    while($row = $resultenglish->fetch_assoc()) {
        $english= $row["english"];
        
    }
}

$sqltest = "SELECT test FROM exam where indexn=$index";
$resulttest = $connection->query($sqltest);

if ($resulttest->num_rows > 0) {
    while($row = $resulttest->fetch_assoc()) {
        $test= $row["test"];
        
    }
}

$sqlsubject1s = "SELECT subject1s FROM exam where indexn=$index";
$resultsubject1s = $connection->query($sqlsubject1s);

if ($resultsubject1s->num_rows > 0) {
    while($row = $resultsubject1s->fetch_assoc()) {
        $subject1s= $row["subject1s"];
        
    }
}

$sqlsubject2s = "SELECT subject2s FROM exam where indexn=$index";
$resultsubject2s = $connection->query($sqlsubject2s);

if ($resultsubject2s->num_rows > 0) {
    while($row = $resultsubject2s->fetch_assoc()) {
        $subject2s= $row["subject2s"];
        
    }
}

$sqlsubject3s = "SELECT subject3s FROM exam where indexn=$index";
$resultsubject3s = $connection->query($sqlsubject3s);

if ($resultsubject3s->num_rows > 0) {
    while($row = $resultsubject3s->fetch_assoc()) {
        $subject3s= $row["subject3s"];
        
    }
}


$connection->close(); ?>














						<div>
							<div class="lefttx">Examination :</div>
							<div class="rightre">G.C.E. (A/L) EXAMINATION
							</div>
							<div class="aclear"></div>

							<div class="lefttx">Year :</div>
							<div class="rightre">2015
							</div>
							<div class="aclear"></div>

							<div class="lefttx">Name :</div>
							<div class="rightre"><?php echo $name; ?>
							</div>
							<div class="aclear"></div>

							<div class="lefttx">Index Number :</div>
							<div class="rightre"><?php echo $index; ?>
							</div>
							<div style="clear: both;"></div>
							
							<div class="lefttx">Stream :</div>
							<div class="rightre"><?php echo $stream ?>
							</div>
							<div style="clear: both;"></div>

							<div class="lefttx">Z-Score :</div>
							<div class="rightre"><?php echo $score ?>
							</div>
							<div class="aclear"></div>

							<div class="lefttx">District Rank :</div>
							<div class="rightre"><?php echo $district ?>
							</div>
							<div class="aclear"></div>

							<div class="lefttx">Island Rank :</div>
							<div class="rightre"><?php echo $island ?>
							</div>
							<div class="aclear"></div>
						</div>

						<br><div id="j_idt16:j_idt36" class="ui-datatable ui-widget"><div class="ui-datatable-tablewrapper"><table role="grid"><thead id="j_idt16:j_idt36_head"><tr role="row"><th id="j_idt16:j_idt36:j_idt37" class="ui-state-default" role="columnheader" style="width:70%"><span>Subject</span></th><th id="j_idt16:j_idt36:j_idt39" class="ui-state-default" role="columnheader" style="width:15%"><span>Result</span></th></tr></thead><tfoot></tfoot><tbody id="j_idt16:j_idt36_data" class="ui-datatable-data ui-widget-content"><tr data-ri="0" class="ui-widget-content ui-datatable-even" role="row"><td role="gridcell"><?php echo $subject1; ?></td><td role="gridcell"><?php echo $subject1s; ?></td></tr><tr data-ri="1" class="ui-widget-content ui-datatable-odd" role="row"><td role="gridcell"><?php echo $subject2; ?></td><td role="gridcell"><?php echo $subject2s; ?></td></tr><tr data-ri="2" class="ui-widget-content ui-datatable-even" role="row"><td role="gridcell"><?php echo $subject3; ?></td><td role="gridcell"><?php echo $subject3s; ?></td></tr><tr data-ri="3" class="ui-widget-content ui-datatable-odd" role="row"><td role="gridcell">GENERAL TEST</td><td role="gridcell"><?php echo $test; ?></td></tr><tr data-ri="4" class="ui-widget-content ui-datatable-even" role="row"><td role="gridcell">GENAREL ENGLISH
</td><td role="gridcell"><?php echo $english; ?></td></tr></tbody></table></div></div>
						<div align="center"><span style="margin-top:15px;display:block;">Please note that this online result is provisional and should not be used as an official confirmation or a certification.</span>
						</div>
						<div align="center"><span style="margin-top:15px;display:block;">Copyright © 2005-2014 - Department of Examinations - Sri Lanka</span>
						</div></div></div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="H4sIAAAAAAAAALVVS2xbRRSd+JMfSZumqFJVhSJRiiDwTFUlQCNE3CZRDG4b4VA1ZZGO7Uk8Zvxmemee/dxFRDewYIP4LJCCYMGCRXfs2KEukJBaCSQ2XVXsYYeQEBLcGTvPz61dlwhG8p0Zz+eee+6Z+27+StJKAzlUpXXqBYYLb5Xqynmq0iN3v7t15OqPSZJYIeNC0vIKLRkJOTJmKsB0RYpyqF5bJLZNNEbRTuFvzJCJLaidCTQDn9ZYAOTw23l3u6D+tnexWGUls/DhnctfTOlnRYKQUOGxVHCN7JAkjhLRKK2wRbORHSDP2XtCb4uWmPZKsqakz3zjvZXL+SowJ9ZAKgam+QZratJu0+gAyIEOgGU/qMUXlSGTQpaouERFwArMRGy47WelFIz6t5+Ed3/e/fO3BBm6QtJ1uxVxI6TZfpAuBuZhmGxYyFXrqjqQVF3yMum0UO3YLaOtLbys7WxiSCnbTypEPVzd5GUzP5C4NKKc64fy3N64C+ga8Do1rAfex6kxwIuBYXq9Qk0W2owd7ugnC0Cbea5NeOOnmc++p58nyVCOpDS/zlyqE42UtXjoZG9UBYO+V1FeDAq0zmDjh29e/Xj39vkESeTJWElQrS+gsgyZdrrK2DxlCgjL317Ik3GNZ8ruDkOOtHZwmSkw4MjjdVoUbCFUqm4DmnGsHkcyn0D3ng78NhhrBQbmZdfW8rnlpRA59P4dhz3IG++Q5xzP4HLSsZFsA3GoSHti7dPtMbI11wcirynhLbEtGgiz0vrzRFYp0VyX7zD/96+f39hdrC5OWEk1jpKDGSrw9eJeL6yYmiBk6PKdb//6KAytpg46TZ2aP+P60/N9JJVEOl6UsO0p4DV2PyNUcWRliRo6iJBRkI2cX2Zh95vL+YZtM5j+5cuv/rjx/ssJq5/2mwMy1dl3IagVGbx389OZxz6594ErJX9jwzjSFv9cj6cx3F1T7OBYn1xY+1QkkJQtZtFsRPAiUGiG7pGexJoHDOMAButNhbo7HtcK0i0DKDEUdlNg4WTM2FPPRH7Tzm865nc2Nj4beR3v0B1bX4zWD8TTobVjedKaV6JycXpwuejmZO+1PsiJk2fYHcmDDM72ELO1Gac3l6deJWyfeYrz4bhz+M4Zcqx3QkrA1b6SYe3rPZMwVb0WMGhmWp1XjaVhYy/il/73iK2h/21gkzF1xaPie1GdGqgtWzde6FdGL3HWeFPKgVV0GD8AJtf6IM5bqqyQjrpbN92tm/Zzbrj0N1eXs0uPRvCjyNyROr1/wTvGHgY1/AfvuujWjgkAAA==" autocomplete="off">
</form></span>
		</div></span>
<!-- END BODY -->
</body></html>