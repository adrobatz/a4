<!DOCTYPE html>
<html>

<head>
    <title>My Wedding Website</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
    <link href="/css/style.css" type='text/css' rel='stylesheet'> 
    @stack('head')
</head>
<body>

<header>
    <h1>Our Wedding</h1>
    <nav>
        <ul>
            <li><a href="/rsvp">For Guests</a></li>
            <li><a href="/allrsvps">For the Bride &amp; Groom</a></li>
        </ul>
    </nav>
</header>

    @if(Session::get('message') != null)
        <div class='message'>{{ Session::get('message') }}</div>
    @endif
    
    <section>
        @yield('content')
    </section>

    @stack('body')

</body>

</html>