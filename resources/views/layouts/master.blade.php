<!DOCTYPE html>
<html>

<head>
    <title>
        My Wedding Website
    </title>

    <link href="/css/style.css" type='text/css' rel='stylesheet'> 

    @stack('head')
</head>

<header>
	<h1>Jane &amp; Joe</h1>
<nav>
	
<ul>
	<li>About Us</li>
	<li><a href="/rsvp">RSVP</a></li>
	<li>Details</li>
	<li>Registry</li>
	<li>Photos</li>
</ul>

</nav>

</header>

<body>
    <section>
        @yield('content')
    </section>

    @stack('body')

</body>

</html>