<?php /*
	$currDate = date('Y-m-d');
	$validDay = false;
	$validDateCount = 10;
	$dates = [];

	if(date('D', strtotime($currDate)) == 'Thu'){
		$currDate = date('Y-m-d', strtotime($currDate. ' + 4 days'));
		$validDay = true;
	}elseif((date('D', strtotime($currDate)) == 'Mon') || (date('D', strtotime($currDate)) == 'Tue') || (date('D', strtotime($currDate)) == 'Wed')){
		$currDate = $currDate = date('Y-m-d', strtotime($currDate. ' + 2 days'));
		$validDay = true;
	}

	while(!$validDay){
		if(date('D', strtotime($currDate)) == 'Fri'){
			$currDate = date('Y-m-d', strtotime($currDate. ' + 1 days'));
			continue;
		}

		if(date('D', strtotime($currDate)) == 'Sat'){
			$currDate = date('Y-m-d', strtotime($currDate. ' + 1 days'));
			continue;
		}

		if(date('D', strtotime($currDate)) == 'Sun'){
			$currDate = date('Y-m-d', strtotime($currDate. ' + 2 days'));
			continue;
		}

		$validDay = true;
	}

	while(count($dates) < $validDateCount) {
		$validDay = false;
		while(!$validDay){
			if(date('D', strtotime($currDate)) == 'Sat'){
				$currDate = date('Y-m-d', strtotime($currDate. ' + 1 days'));
				continue;
			}

			if(date('D', strtotime($currDate)) == 'Sun'){
				$currDate = date('Y-m-d', strtotime($currDate. ' + 1 days'));
				continue;
			}

			$validDay = true;
		}

		array_push($dates, $currDate);
		$currDate = date('Y-m-d', strtotime($currDate. ' + 1 days'));
	};*/
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Motivis</title>
        <meta name="description" content="">
        <?php include 'includes/head.php'; ?>
        <!--HubSpot Forms-->
        <!--[if lte IE 8]>
		<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
		<![endif]-->
		<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
	</head>
    <body class="demo-page">
    	<?php include 'includes/header.php'; ?>
    	<main>
    		<article>
	    		<header class="page-header orange dots">
			        <section class="inner">
			        	<h1>Schedule a Demo</h1>
		        	</section>
		        </header>
		        <section class="white">
		        	<div class="inner">
			        	<div class="row">
			        		<div class="col-md-8">
			        		<h3>What to Expect</h3>
			        			<p>The Motivis LRM is student-centric and delivers personalized learning, support and assessment for each student.</p>
			        			<p>Motivis provides a modern easy-to-use and accessible user experience for mobile and beyond, with customizable dashboards that reflect users’ roles.</p>
			        			<p>Motivis provides a modern easy-to-use and accessible user experience for mobile and beyond.	</p>		        			
			        		</div>
			        		<div class="col-md-12 form-container">
			        			<script>
									hbspt.forms.create({ 
								    	css: '',
								    	portalId: '1625919',
								    	formId: '927622a7-6092-4234-b59f-ae052b53a778'
								  	});
								</script>
			        		</div>
			        	</div>
		        	</div>
		        </section>
		    </article>
    	</main>
    	<?php include 'includes/footer.php'; ?> 
    </body>
</html>