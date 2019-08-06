<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('welcome')}}">TestProject</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mx-4">
            <a class="nav-item nav-link active" href="{{route('welcome')}}">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('customers.create')}}">Customers Form</a>
            <a class="nav-item nav-link " href="{{route('about')}}" >About</a>
            <a class="nav-item nav-link " href="{{route('contact.create')}}" >Contact Us</a>



        </div>
    </div>
    <ul class="navbar-nav mr-auto mr-4">

        <li class="nav-item">
            <a class="nav-link text-white " href="{{route('home')}}" >Admin|Login</a>
        </li>
    </ul>
</nav>