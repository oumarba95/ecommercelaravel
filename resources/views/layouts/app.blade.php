<!Doctype>
<html>
   <head>
     <meta charset="UTF-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ route('home') }}">EventBrote</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
       <div class="navbar-nav">
         <a class="nav-item nav-link active" href="{{ route('events.create') }}"><i class="fa fa-plus"></i>Creer un evenement<span class="sr-only">(current)</span></a>
       </div>
     </div>
    </nav>
      <div class="container">
        @if(session()->has('notification.message'))
           <div class="alert alert-{{ session()->get('notification.type')}}">
              {{ session()->get('notification.message') }}
           </div>
        @endif
        @yield('content')
      </div>
       
   </body>
</html>