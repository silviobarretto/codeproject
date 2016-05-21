angular.module('app.controllers')
    .controller('CursoListController', ['$scope', 'Curso', function($scope, Curso) {
        $scope.cursos = Curso.query();
    }]);