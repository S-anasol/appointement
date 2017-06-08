angular.module('mainController', [])

    .controller('mainController', function($scope, $http, Appointement) {
        $scope.appointementData = {};

        $scope.refresh = function() {
            $scope.loading = true;
            Appointement.get()
                .then(function(response) {
                    $scope.appointements = response.data;
                    $scope.loading = false;
                });
        };

        $scope.deleteAppointement = function(id) {
            if (confirm('Are you sure you want to delete this appointment?')) {
                $scope.loading = true;

                Appointement.destroy(id)
                    .success(function(data) {
                        Appointement.then()
                            .success(function(response) {
                                $scope.appointements = response.data;
                                $scope.loading = false;
                            });
                    });
            }
        };

        $scope.refresh();
    });
