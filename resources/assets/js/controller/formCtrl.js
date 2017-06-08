angular.module('formController', [])

    .controller('formController', function($scope, $http, $location, $routeParams, Appointement) {
        $scope.appointementData = {
            date: '2017-06-08 08:05:40'
        };
        $scope.route = $routeParams;
        $scope.loading = false;
        if (parseInt($scope.route.id) > 0) {
            $scope.loading = true;
            Appointement.get(parseInt($scope.route.id))
                .then(function(response) {
                    $scope.appointementData = response.data;
                    $scope.loading = false;
                });
        }
        $scope.submitAppointement = function() {
            $scope.errors = false;
            $scope.loading = true;
            if ($scope.appointementData.status === "confirmed") {
                $scope.appointementData.status = "finished";
            }

            Appointement.save($scope.appointementData)
                .then(function(data) {
                    alert('appointment placed');
                    $location.path("/");
                }, function(data) {
                    console.log('error', data.data);
                    $scope.errors = data.data;
                });
        };
    });
