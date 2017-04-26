<?php require_once('header.php'); ?>

     <!-- Full Page Image Background Carousel Header -->
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
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('.http://openmindmagazine.com/wp-content/uploads/2017/01/Trump-make-america-great-again-1.jpg&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Make amarica great again</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('.http://i.imgur.com/ByLjK2b.jpg'&text=Slide Two);"></div>
                <div class="carousel-caption">
                    <h2>Our Führer</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('.http://i.imgur.com/9pNYlYO.jpg'&text=Slide Three);"></div>
                <div class="carousel-caption">
                    <h2>The great wall of amarica</h2>
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
                <h1>Welcome to the truth!</h1>
            </div>
        </div>

        <hr>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

        <hr>

        <?php footer(); ?>
    </div> <!-- /container -->

<?php require_once('footer.php'); ?>
