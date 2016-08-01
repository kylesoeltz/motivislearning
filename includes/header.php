 <?php
function setCurrentPage($requestUri, $className)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo $className;
}
function getCurrentPage()
{
    return $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
}
?>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<header class="nav-header">
    <nav class="main-nav">
        <div class="inner">
            <h1 class="logo"><a href="/">Motivis Learning</a></h1>
            <button class="mobileNavToggle">Menu</button>
            <ul>
                <li><small>close</small></li>
                <li class="solutions">
                    <p>Solutions</p>
                    <ul class="sub-menu">
                        <li><h5 class="allCaps">motivis platform</h5></li>
                        <li><a href="#">Lerning Relationship Management</a></li>
                        <li><a href="#">Social Networking & School Community</a></li>
                        <li><a href="#">Career Pathing for Students & Employers</a></li>
                        <li><a href="#">Student Information Systems</a></li>
                        <li><a href="#">Student Admissions</a></li>
                        <li><a href="#">Alumni Engagement</a></li>                    
                    </ul>
                </li>
                <li><a href="/services.php">Services</a></li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/insights.php">Insights</a></li>
                <li><a href="/contact.php">Contact</a></li>
                <li><a href="/demo.php" class="btn">Request Demo</a></li>
            </ul>
        </div>
    </nav>
</header>