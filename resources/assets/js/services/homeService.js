angular.module('homeService', [])

    .factory('Appointement', function($http) {
        return {
            get: function(id) {
                return (parseInt(id) > 0) ? $http.get('/api/appointments/single/' + id) : $http.get('/api/appointments/');
            },
            save: function(appointmentData) {
                if (parseInt(appointmentData.id) > 0) {
                    return $http({
                        method: 'PUT',
                        url: '/api/appointments/' + appointmentData.id,
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        data: $.param(appointmentData)
                    });
                } else {
                    return $http({
                        method: 'POST',
                        url: '/api/appointments',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        data: $.param(appointmentData)
                    });
                }

            },
            destroy: function(id) {
                return $http.delete('/api/appointments/' + id);
            }
        }
    });
