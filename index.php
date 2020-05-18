<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Road Accident Reduction System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">

</head>



<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">HOME</a>
                <a class="navbar-brand" href="first-aid.php">FIRST AID</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://localhost/cms/users/">USER LOGIN</a>
                    </li>
                    <li>
                        <a href="http://localhost/cms/users/registration.php">USER REGISTRATION</a>
                    </li>
                    <li>
                        <a href="http://localhost/cms/admin/">ADMIN LOGIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Half Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
           
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://localhost/cms/img/c2.png');"></div>
                <div class="carousel-caption">
                  
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://localhost/cms/img/c1.jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Road Accident Reduction System</h1><br/><br/>

                <p>To report an accident or traffic, register on our user registration page and follow up on the
                status of the report.</p>

                <p>Every year the lives of approximately 1.35 million people are cut short as a
                result of a road traffic crash. Between 20 and 50 million more people suffer non-fatal
                injuries, with many incurring a disability as a result of their injury.

Road traffic injuries cause considerable economic losses to individuals, their families,
and to nations as a whole. These losses arise from the cost of treatment as well as lost productivity for
those killed or disabled by their injuries, and for family members who need to take time off work or school to
care for the injured. Road traffic crashes cost most countries 3% of their gross domestic product</p>

<p> The design of roads can have a considerable impact on their safety. Ideally, roads should be
designed keeping in mind the safety of all road users. This would mean making sure that there are adequate
facilities for pedestrians, cyclists, and motorcyclists. Measures such as footpaths, cycling lanes,
safe crossing points, and other traffic calming measures can be critical to reducing the risk of injury
among these road users.</p>

<p>Safe vehicles play a critical role in averting crashes and reducing the
likelihood of serious injury. There are a number of UN regulations on vehicle safety
that, if applied to countries manufacturing and production standards, would potentially
save many lives. These include requiring vehicle manufacturers to meet front and side
impact regulations, to include electronic stability control (to prevent over-steering)
and to ensure airbags and seat-belts are fitted in all vehicles. Without these basic
standards the risk of traffic injuries, both to those in the vehicle and those out
of it; is considerably increased.</p>

<p>Delays in detecting and providing care for those involved in a road traffic
crash increase the severity of injuries. Care of injuries after a crash has
occurred is extremely time-sensitive: delays of minutes can make the difference
between life and death. Improving post-crash care requires ensuring access to
timely prehospital care, and improving the quality of both prehospital and hospital
care, such as through specialist training programmes.  </p>


<p>If traffic laws on drink-driving, seat-belt wearing, speed limits,
helmets, and child restraints are not enforced, they cannot bring about the
expected reduction in road traffic fatalities and injuries related to specific
behaviours. Thus, if traffic laws are not enforced or are perceived as not being
enforced it is likely they will not be complied with and therefore will have very
little chance of influencing behaviour.

Effective enforcement includes establishing, regularly updating, and enforcing
laws at the national, municipal, and local levels that address the above mentioned
risk factors. It includes also the definition of appropriate penalties.
</p>
                
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="#">TEAM154</a> | Road Accident Reduction System </p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
