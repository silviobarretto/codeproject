angular.module('app.services')
.service('Curso', ['$resource', 'appConfig', function($resource, appConfig) {
    return $resource(appConfig.baseUrl + '/curso/:id',{id: '@id'}, {
        update: {
            method: 'PUT'
        }
    });
}]);