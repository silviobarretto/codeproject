<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carreira EAD</title>
	@if(Config::get('app.debug'))
		<link rel="stylesheet" href="{{ asset('build/css/components.css') }}">
		<link rel="stylesheet" href="{{ asset('build/css/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('build/css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('build/css/app.css') }}">
	@else
		<link rel="stylesheet" href="{{ elixir('css/all.css') }}">
	@endif
	{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">--}}

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#"><img class="img-responsive" src="http://carreiraead.com.br/images/carreira-negativo-header.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="disabled">
                    <a href="#"><i class="fa fa-fw fa-desktop"></i>Portal</a>
                </li>
                <li>
                    <a href="{{ url('/admin') }}"><i class="fa fa-fw fa-home"></i>Painel</a>
                </li>
                <li class="active">
                    <a href="{{ url('auth/login') }}"><i class="fa fa-fw fa-user"></i>Login</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div ng-view>

</div>
	<!-- Scripts -->
@if(Config::get('app.debug'))
	<script src="{{ asset('build/js/vendor/jquery.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-resource.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-route.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-animate.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-messages.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/ui-bootstrap.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/navbar.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-cookies.min.js') }}"></script>
	<script src="{{ asset('build/js/vendor/query-string.js') }}"></script>
	<script src="{{ asset('build/js/vendor/angular-oauth2.min.js') }}"></script>

	<script src="{{ asset('build/js/app.js') }}"></script>

	<!-- Controllers !-->
	<script src="{{ asset('build/js/controllers/login.js') }}"></script>
	<script src="{{ asset('build/js/controllers/home.js') }}"></script>

	<script src="{{ asset('build/js/controllers/client/clientList.js') }}"></script>
	<script src="{{ asset('build/js/controllers/client/clientNew.js') }}"></script>
	<script src="{{ asset('build/js/controllers/client/clientEdit.js') }}"></script>
	<script src="{{ asset('build/js/controllers/client/clientRemove.js') }}"></script>

	<script src="{{ asset('build/js/controllers/curso/cursoList.js') }}"></script>
	<script src="{{ asset('build/js/controllers/curso/cursoNew.js') }}"></script>
	<script src="{{ asset('build/js/controllers/curso/cursoEdit.js') }}"></script>
	<script src="{{ asset('build/js/controllers/curso/cursoRemove.js') }}"></script>

	<script src="{{ asset('build/js/controllers/project/projectList.js') }}"></script>
	<script src="{{ asset('build/js/controllers/project/projectNew.js') }}"></script>
	<script src="{{ asset('build/js/controllers/project/projectEdit.js') }}"></script>
	<script src="{{ asset('build/js/controllers/project/projectRemove.js') }}"></script>

	<script src="{{ asset('build/js/controllers/project-note/projectNoteShow.js') }}"></script>
	<script src="{{ asset('build/js/controllers/project-note/projectNoteList.js') }}"></script>
    <script src="{{ asset('build/js/controllers/project-note/projectNoteNew.js') }}"></script>
    <script src="{{ asset('build/js/controllers/project-note/projectNoteEdit.js') }}"></script>
    <script src="{{ asset('build/js/controllers/project-note/projectNoteRemove.js') }}"></script>

	<!-- Services !-->
	<script src="{{ asset('build/js/services/client.js') }}"></script>
	<script src="{{ asset('build/js/services/curso.js') }}"></script>
	<script src="{{ asset('build/js/services/project.js') }}"></script>
    <script src="{{ asset('build/js/services/projectNote.js') }}"></script>
	<script src="{{ asset('build/js/services/user.js') }}"></script>
@else
	<script src="{{ elixir('js/all.js') }}"></script>
@endif
</body>
</html>
