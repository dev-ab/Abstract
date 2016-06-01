<!DOCTYPE html>
<html ng-app="abstract">
    <head>
        <meta charset="UTF-8">
        <title>Abstract</title>
        <link rel="stylesheet" href="css/normalize.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/bootstrap.min.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css" rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="js/gallery/lightgallery.css" rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
        <link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    </head>
    <body ng-controller="appCtrl">
        <div class="container-fluid radius editor">
            <div class="row-fluid">
                <div class="col hidden-xs hidden-sm col-sm-1 col-md-2 fill-height" style="border-left: solid 1px;border-right: 1px groove black;">
                    <div class="row fill-height" style="margin-top: 10%;">
                        <div class="col col-xs-12 col-sm-12 col-md-12 menu-items-container" style="border-bottom: solid 1px;">
                            <ul class="list-inline menu-items">
                                <li><span class="fa fa-file-code-o ico-blue"></span> Project</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row fill-height" style="font-size: 12px;background-color: #fff;">
                        <div class="col col-xs-12 col-sm-12 col-md-12 menu-items-container" style="font-family: 'Orbitron', sans-serif;">
                            <a href="javascript:;" ng-click="selectPage('home')"><div ng-class="pages['home'].selected ? 'selected' : ''"><i class="fa fa-folder ico-blue"></i> Abstract</div></a>
                            <div style="border-left:dotted 1px;">
                                <div class="files-line"></div>
                                <a href="javascript:;" ng-click="selectPage('about')">
                                    <div ng-class="pages['about'].selected ? 'selected' : ''">
                                        <i class="fa fa-file ico-blue"></i> About</div></a>
                                <div class="files-line"></div>
                                <a href="javascript:;" ng-click="selectPage('services')">
                                    <div ng-class="pages['services'].selected ? 'selected' : ''">
                                        <i class="fa fa-file ico-blue"></i> Services</div></a>
                                <div class="files-line"></div>
                                <a href="javascript:;" ng-click="selectPage('projects')">
                                    <div ng-class="pages['projects'].selected ? 'selected' : ''">
                                        <i class="fa fa-file ico-blue"></i> Projects</div></a>
                                <div class="files-line"></div>
                                <a href="javascript:;" ng-click="selectPage('contact')">
                                    <div ng-class="pages['contact'].selected ? 'selected' : ''">
                                        <i class="fa fa-file ico-blue"></i> Contact</div></a>
                            </div>
                            <div class="files-line" style="border-left:dotted 1px;"></div>
                            <a href="javascript:;" ng-click="selectPage('request_service')">
                                <div ng-class="pages['request_service'].selected ? 'selected' : ''">
                                    <i class="fa fa-file ico-blue"></i> Request Service</div></a>
                        </div>
                    </div>
                </div>

                <div class="col col-xs-12 col-sm-10 col-md-10 fill-height">
                    <div class="row fill-height">
                        <div class="col col-xs-12 col-sm-12 col-md-12 menu-items-container">
                            <ul class="list-inline menu-items hidden-md hidden-lg">
                                <li ng-class="pages['home'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('home')">
                                        <span class="fa fa-home ico-blue"></span> Home</a></li>
                                <li ng-class="pages['about'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('about')">
                                        <span class="fa fa-info-circle ico-blue"></span> About</a></li>
                                <li ng-class="pages['services'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('services')">
                                        <span class="fa fa-briefcase ico-blue"></span> Services</a></li>
                                <li ng-class="pages['projects'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('projects')">
                                        <span class="fa fa-area-chart ico-blue"></span> Projects</a></li>
                                <li ng-class="pages['contact'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('contact')">
                                        <span class="fa fa-envelope ico-blue"></span> Contact</a></li>
                                <li ng-class="pages['request_service'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('request_service')">
                                        <span class="fa fa-wpforms ico-blue"></span> Request Service</a></li>
                            </ul>
                            <ul class="list-inline menu-items hidden-xs hidden-sm">
                                <li ng-show="pages['home'].open" ng-class="pages['home'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('home')">
                                        <span class="fa fa-home ico-blue"></span> Home</a>
                                    <a href="javascript:;" ng-click="closePage('home')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                                <li ng-show="pages['about'].open" ng-class="pages['about'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('about')">
                                        <span class="fa fa-info-circle ico-blue"></span> About</a>
                                    <a href="javascript:;" ng-click="closePage('about')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                                <li ng-show="pages['services'].open" ng-class="pages['services'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('services')">
                                        <span class="fa fa-briefcase ico-blue"></span> Services</a>
                                    <a href="javascript:;" ng-click="closePage('services')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                                <li ng-show="pages['projects'].open" ng-class="pages['projects'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('projects')">
                                        <span class="fa fa-area-chart ico-blue"></span> Projects</a>
                                    <a href="javascript:;" ng-click="closePage('projects')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                                <li ng-show="pages['contact'].open" ng-class="pages['contact'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('contact')">
                                        <span class="fa fa-envelope ico-blue"></span> Contact</a>
                                    <a href="javascript:;" ng-click="closePage('contact')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                                <li ng-show="pages['request_service'].open" ng-class="pages['request_service'].selected ? 'active' : ''">
                                    <a href="javascript:;" ng-click="selectPage('request_service')">
                                        <span class="fa fa-wpforms ico-blue"></span> Request Service</a>
                                    <a href="javascript:;" ng-click="closePage('request_service')">
                                        <span style="font-size: 11px;margin-left: 10px;" class="fa fa-close ico-blue"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-xs-12 col-sm-12 col-md-12 editor-box fill-height">
                            <div class="row">
                                <div class="liner">
                                    <ol style="float: right;">
                                        <li ng-repeat="i in result"></li>
                                    </ol>
                                </div>
                                <div class="jumpotron editor-area">
                                    <div ng-show="pages['home'].selected">
                                        <h1><i class="fa fa-home ico-red"></i><span id="home_title"></span></h1>
                                        <blockquote><span id="home_body"></span></blockquote>
                                    </div>
                                    <div ng-show="pages['about'].selected">
                                        <h3><i class="fa fa-info-circle ico-blue"></i> About Abstract</h3>
                                        <blockquote><span id="about_p1"></span></blockquote>
                                    </div>
                                    <div ng-show="pages['services'].selected">
                                        <h3><i class="fa fa-briefcase ico-blue"></i> Services</h3><br>
                                        <h4><b>Case Study & Strategy</b></h4>
                                        <blockquote>We provide case study for your project along with all suggested strategies to suit the requested project needs and all its future improvements.</blockquote>
                                        <h4><b>Business Analysis</b></h4>
                                        <blockquote>We also provide full business analysis for the project through a well detailed documentation for the project at hand describing every part of the project and breaking it down into suitable modules.</blockquote>
                                        <h4><b>Development</b></h4>
                                        <blockquote>We finally provide the development process through the latest web technologies and design patterns to ensure a high quality web solution production that fits all required needs.</blockquote>
                                    </div>
                                    <div ng-show="pages['contact'].selected">
                                        <h3><i class="fa fa-envelope ico-blue"></i> Contact us</h3><br><br>
                                        <blockquote>
                                            <h4><b>Email: </b>dev.abstract@gmail.com</h4>
                                            <h4><b>Phone: </b>+201008189145</h4>
                                        </blockquote>
                                    </div>
                                    <div ng-show="pages['request_service'].selected">
                                        <h3><i class="fa fa-wpforms ico-blue"></i> Request Service</h3><br><br>
                                        <blockquote>
                                            <form id="request" ng-submit="submitRequest()">
                                                <input class="form-control" name="fullname" placeholder="Full name"><br>
                                                <input class="form-control" name="email" placeholder="Email"><br>
                                                <select class="form-control" name="service">
                                                    <option value="">Select service</option>
                                                    <option value="case">Case Study</option>
                                                    <option value="business">Business Analysis</option>
                                                    <option value="development">Web Development</option>
                                                </select><br>
                                                <textarea class="form-control" name="notes" placeholder="Please enter any questions & notes here"></textarea><br>
                                                <?php
                                                require_once('recaptchalib.php');
                                                $publickey = "6LcBeiETAAAAAOjx1O2MYjOklR0XUd7-HBBqaq6X"; // you got this from the signup page
                                                echo recaptcha_get_html($publickey);
                                                ?><br>
                                                <span class="error" ng-show="captcha">The code you entered isn't correct.</span><br>
                                                <span class="alert alert-success" ng-show="success">Your request was sent successfully.</span><br>
                                                <input class="btn btn-success pull-right" type="submit" value="Send" ng-disabled="process">
                                            </form>
                                        </blockquote>
                                    </div>
                                    <div ng-show="pages['projects'].selected">
                                        <h3><i class="fa fa-area-chart ico-blue"></i> Projects</h3><br><br>
                                        <div class="row">
                                            <div class="col col-xs-12 col-sm-12 col-md-6" style="margin-bottom:100px;" ng-repeat="proj in projects">
                                                <div class="cont">
                                                    <div class="lightgallery img">
                                                        <div data="{{att.url}}" ng-repeat="att in proj.attachments" ng-if="$index == 0">
                                                            <img class="imag" width = "100%" src="{{att.url}}"/>
                                                        </div>

                                                        <div class="hide" data="{{att.url}}" ng-repeat="att in proj.attachments" ng-if="$index > 0">
                                                            <img width = "100%" src="{{att.url}}"/>
                                                        </div>
                                                    </div>
                                                    <div class="hov">
                                                        <div class="titles">
                                                            <div class="tit">{{proj.name}}</div>
                                                            <div class="desc">{{proj.description}}</div>
                                                        </div>
                                                        <div class="icons">
                                                            <a title="Visit Website" class="btn btn-info">Visit</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/pace.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/typed.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/gallery/lightgallery.js"></script>
        <script src="js/gallery/lg-thumbnail.js"></script>
        <script src="js/gallery/lg-fullscreen.js"></script> 
        <script src="js/jquery-validation/jquery.validate.min.js"></script> 
        <script>
                                                                        $('body').on('click', '.lightgallery', function () {
                                                                            var images = [];
                                                                            $(this).children().each(function (i, e) {
                                                                                images[i] = {
                                                                                    'src': $(this).attr('data'),
                                                                                    'thumb': $(this).attr('data')
                                                                                };
                                                                            });
                                                                            $(this).lightGallery({dynamic: true, dynamicEl: images});
                                                                        });
        </script>
    </body>
</html>