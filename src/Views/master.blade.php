<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>LaraEdit</title>

        <link rel="stylesheet" href="/vendor/laraedit/css/bootstrap.min.css">
        <link rel="stylesheet" href="/vendor/laraedit/css/bootstrap-theme.min.css">

        <link rel="stylesheet" href="/vendor/laraedit/css/fonts.css">

        <!-- <link href="http://fonts.googleapis.com/css?family=Orbitron:400,900" rel="stylesheet" /> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="/vendor/laraedit/css/laraedit.css">
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('laraedit::partials.global.navbar')
        
        <div class="container-fluid page">
            @yield('page')
        </div>

        @include('laraedit::partials.global.quicknav')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
        <script src="/vendor/laraedit/js/bootstrap.min.js"></script>
        <script src="/vendor/laraedit/js/ace/ace.js" type="text/javascript" charset="utf-8"></script>
        <script>
            var editor = ace.edit("laraedit");
            editor.setTheme("ace/theme/laraedit");
            editor.getSession().setMode("ace/mode/php");
        </script>
  </body>
</html>
