<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

    </head>

    <body>
    	<nav>
    		<div>
                <ul>
                    <li class="head">Members Church of God International</li>
                </ul>
    			<ul>
    				<li><a href="bible-study-request">Request List</a></li>
    				<li><a href="bible-study-request-form">Make a Request</a></li>
    			</ul>
    		</div>
    	</nav>

    	<div class="space"></div>

    	<span class="title-design">
            <h1 class="title-bg">{{$title}}</h1>
        </span>
        @yield('content')
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script>
        jQuery(document).ready(function(){
            jQuery('#requests').DataTable();
        });
        </script>
</html>