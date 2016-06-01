var app = angular.module('abstract', []);
app.controller('appCtrl', ['$scope', '$window', function ($scope, $window) {
        $scope.number = 20;
        $scope.result = [];
        for (var i = 0; i < $scope.number; i++) {
            $scope.result[i] = {dum: 'dum'};
        }

        $scope.pages = {
            home: {selected: false},
            about: {selected: false},
            services: {selected: false},
            projects: {selected: false},
            contact: {selected: false},
            request_service: {selected: false},
        };

        $scope.projects = [
            {
                name: 'project 1',
                description: 'project 1',
                url: '',
                attachments: [
                    {url: 'https://tse-thestraussgroup.netdna-ssl.com/wp-content/uploads/2015/05/loan.jpg'}
                ]
            },
            {
                name: 'project 1',
                description: 'project 1',
                url: '',
                attachments: [
                    {url: 'http://www.305startup.net/wp-content/uploads/2014/08/business-ideas-305.jpeg'}
                ]
            },
            {
                name: 'project 1',
                description: 'project 1',
                url: '',
                attachments: [
                    {url: 'https://pixabay.com/static/uploads/photo/2016/01/19/15/05/computer-1149148_960_720.jpg'}
                ]
            },
            {
                name: 'project 1',
                description: 'project 1',
                url: '',
                attachments: [
                    {url: 'http://www.eslgold.com/business/img35.jpg'}
                ]
            },
        ]


        $scope.setPages = function () {
            $scope.pages['home'].selected = false;
            $scope.pages['about'].selected = false;
            $scope.pages['services'].selected = false;
            $scope.pages['projects'].selected = false;
            $scope.pages['contact'].selected = false;
            $scope.pages['request_service'].selected = false;
        }

        $scope.selectPage = function (page) {
            $scope.setPages();
            $scope.pages[page].selected = true;
            $scope.pages[page].open = true;
            if (page == 'home') {
                $("#home_title").typed({
                    strings: ["Abstract"],
                    typeSpeed: 40,
                    cursorChar: "_",
                    callback: function () {
                        $('h1 .typed-cursor').remove();
                        $("#home_body").typed({
                            strings: ["Creating innovative solutions"],
                            typeSpeed: 0,
                            showCursor: true,
                            cursorChar: "_"
                        });
                    },
                });
            } else if (page == 'about') {
                $("#about_p1").typed({
                    strings: ["Abstract is an online web solutions provider based in the middle east area, providing creative and innovative solutions from small personal projects to large big scale systems.<br><br>Abstract team is working effortlessly to come up with suitable structures and strategies for the clients needs based on latest web technologies and design patterns."],
                    typeSpeed: 0,
                    cursorChar: "_",
                    contentType: 'html'
                });
            }

        }

        $scope.closePage = function (page) {
            $scope.pages[page].selected = false;
            $scope.pages[page].open = false;
        }
        $scope.selectPage('home');

        $scope.submitRequest = function () {
            $scope.process = true;
            $scope.captcha = false;
            $('#request').validate({
                rules: {
                    fullname: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    service: {required: true},
                    notes: {required: true}
                },
                messages: {
                }
            });

            if (!$('#request').valid()) {
                $scope.process = false;
                return;
            }


            $.ajax({
                url: '/send',
                type: 'post',
                data: $('#request').serialize(),
                success: function (data) {
                    console.log(data);
                    $scope.process = false;
                    if (data == 'true')
                        $scope.success = true;
                    else
                        $scope.captcha = true;
                    $scope.$apply()
                },
                error: function (data) {
                    console.log(data.responseText);
                    $scope.process = false;
                    $scope.$apply()
                }
            });
        }

    }]);