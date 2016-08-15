<?php 
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
	};
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
    </head>
    <body>
    	<?php include 'includes/header.php'; ?>
    	<main>
    		<article class="demo-page">
	    		<header class="page-header orange dots">
			        <section class="inner">
			        	<h1>Schedule a Demo</h1>
		        	</section>
		        </header>
		        <section class="white">
		        	<h3>Pick a Date</h3>
		        	<ul>
		        		<?php foreach($dates as $date){?>
		        			<li role="button">
		        				<div class="day">
		        					<p><?php echo date('D', strtotime($date))?></p>
		        					<p><?php echo date('m/d', strtotime($date))?></p>
		        				</div>
		        			</li>
		        		<?php } ?>
		        	</ul>		        	
		        </section>
		        <section class="white">
		        	<div class="row">
		        		<div class="col-md-12">
		        			<form>
		        				<fieldset class="time">
		        					<h3>Pick a time</h3>
		        					<div class="row">
		        						<div class="col-md-12">
				        					<input type="radio" name="time" id="morning-input" value="0">
				        					<label for="time">
				        						<p class="time-label">Morning<br /><span class="time-of-day">7AM - 12PM EST</span></p>
				        					</label>
			        					</div>
			        					<div class="col-md-12">
				        					<input type="radio" name="time" id="afternoon-input" value="1">
				        					<label for="time">	
				        						<p class="time-label">Afternoon<br /><span class="time-of-day">1PM - 5PM EST</span></p>
				        					</label>
			        					</div>
		        					</div>
		        				</fieldset>
		        				<fieldset>
		        					<label for="first-name">First Name</label>
		        						<input type="text" name="first-name" required placeholder="John" />
		        					<label for="last-name">Last Name</label>
		        					<input type="text" name="last-name" required placeholder="Doe" />
		        					<label for="email">Email Address</label>
		        					<input type="email" name="email" required placeholder="JohnDoe@example.com" />
		        					<label for="solution">Solution</label>					
		        					<select name="solution" required>
		        						<option>Partnership</option>
		        					</select>
		        					<label for="tel-num">Phone</label>
		        					<input type="tel" name="tel-num" required placeholder="888-888-8888" />
		        					<input type="tel" name="ext" placeholder="Ext" />
		        				</fieldset>
		        				<button type="submit">Send Request</button>
		        			</form>
		        		</div>
		        		<div class="col-md-12">
		        			<h3>What to Expect</h3>
		        			<p>The Motivis LRM is student-centric and delivers personalized learning, support and assessment for each student.</p>
		        			<p>Motivis provides a modern easy-to-use and accessible user experience for mobile and beyond, with customizable dashboards that reflect users’ roles.</p>
		        			<p>Motivis provides a modern easy-to-use and accessible user experience for mobile and beyond.	</p>
		        		</div>
		        	</div>
		        </section>
		    </article>
    	</main>
    	<?php include 'includes/footer.php'; ?> 
    </body>
</html>