angular.module('app.controllers')
    .controller('CursoEditController',
        ['$scope', '$location', '$routeParams', 'Curso',
        function($scope, $location, $routeParams, Curso) {
        $scope.curso = Curso.get({id: $routeParams.id});

        $scope.save = function() {
            if($scope.form.$valid) {
                Curso.update({id: $scope.curso.id}, $scope.curso, function() {
                    $location.path('/cursos');
                });
            }
        }
    }]);