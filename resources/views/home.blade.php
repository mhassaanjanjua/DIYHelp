<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIY HELP</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

@include('theme.header')

<body>
    <section class="process">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="process-box">
                        <div class="process-box-inner">
                            <img src="images/mask2.png" class="img-responsive" />
                            <h4>Register for Free</h4>
                            <p>DIY-Help provides free platform to domestic users and freelance professionals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="process-box">
                        <div class="process-box-inner">
                            <img src="images/mask3.png" class="img-responsive" />
                            <h4>Choose a Service</h4>
                            <p>Find or offer services at the time of your choice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="process-box">
                        <div class="process-box-inner">
                            <img src="images/mask4.png" class="img-responsive" />
                            <h4>Find a Customer or Professional</h4>
                            <p>DIY-Help directly connects users and professionals without charging any fee.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                    <div class="process-box">
                        <div class="process-box-inner">
                            <img src="images/mask5.png" class="img-responsive" />
                            <h4>Get or Offer a Service</h4>
                            <p>Get free estimations and get services at the earliest. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="help">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="help-heading">
                        <h2>Help is here!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="help-box">
                        <div class="help-box-inner">
                            <a href="/categories">
                                <img src="images/s1.png" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="help-box">

                        <div class="help-box-inner">
                            <a href="javascript:;">
                                <img src="images/s2.png" class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                    <div class="help-box">
                        <div class="help-box-inner">
                            <a href="services">
                                <img src='/images/s3.png' class="img-responsive" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="home-footer">
        <div class="container" >
            <div class="row">
                <div class="col-md-offset-12 col-lg-offset-12 col-sm-offset-12 col-md-4 col-lg-12 col-sm-4 col-xs-12">
                    <div class="play-icon">
                        <a href="/videohelp">
                            <img src="images/play-icon.png" />
                            <span>WE MAKE A DIFFERENCE</span>
                        </a>
                    </div>
                    <div class="help-heading">
                        <h2>Video Help!</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="copy-right">
                        <p>Copyright © 2019 DIY-Help. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <div class="develop">
                        <p><span>Small Masters Project.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>