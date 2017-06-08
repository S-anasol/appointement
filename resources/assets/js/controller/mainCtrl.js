angular.module('mainController', [])

    .controller('mainController', function($scope, $http, Appointement) {
        $scope.$watch('$viewContentLoaded', function() {
            $scope.refresh();
        });


        $scope.refresh = function(a) {
            $scope.loading = true;
            Appointement.get()
                .then(function(response) {
                    $scope.appointements = response.data;
                    $scope.loading = false;
                });
        };

        $scope.deleteAppointement = function(id) {
            if (confirm('Are you sure you want to delete this appointment?')) {
                Appointement.destroy(id)
                    .then(function(data) {
                        $scope.refresh();
                    });
            }
        };

        $scope.cancelAppointement = function(appointementData) {
            appointementData.status = 'canceled';
            Appointement.save(appointementData)
                .then(function(data) {
                    $scope.refresh();
                }, function(data) {
                    console.log('error', data.data);
                });
        };

        $scope.confirmAppointement = function(appointementData) {
            appointementData.status = 'confirmed';
            Appointement.save(appointementData)
                .then(function(data) {
                    $scope.refresh();
                }, function(data) {
                    console.log('error', data.data);
                });
        };
    });
