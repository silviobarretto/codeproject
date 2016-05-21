angular.module('app.controllers')
    .controller('CursoNewController', ['$scope', '$location', 'Curso', function($scope, $location, Curso) {
        $scope.curso = new Curso();

        $scope.save = function() {
            if($scope.form.$valid) {
                $scope.curso.$save().then(function() {
                    $location.path('/cursos');
                });
            }
        }
    }]);