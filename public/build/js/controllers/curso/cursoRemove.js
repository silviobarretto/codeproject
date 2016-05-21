angular.module('app.controllers')
    .controller('CursoRemoveController',
        ['$scope', '$location', '$routeParams', 'Curso',
        function($scope, $location, $routeParams, Curso) {
        $scope.curso = Curso.get({id: $routeParams.id});

        $scope.remove = function() {
            $scope.curso.$delete().then(function() {
                $location.path('/cursos');
            });
        }
    }]);