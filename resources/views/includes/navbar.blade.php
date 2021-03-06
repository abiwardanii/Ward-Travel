    <!-- navbar  -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{url('frontend/images/ward-travel.png')}}" alt="logo">
            </a>
            
            <button class="navbar-toggler navbar-toggler-right" 
            type="button" 
            data-toggle="collapse"
            data-target="#navb"
            >
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr3">
                    <li class="navbar-item mx-md-2">
                        <a href="{{route('home')}}" class="nav-link active">Home</a>
                    </li>
                    <li class="navbar-item mx-md-2">
                        <a href="{{route('home')}}" class="nav-link">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" 
                        class="nav-link dropdown-toggle" 
                        id="navbardrop" 
                        data-toggle="dropdown"
                        >
                        Service
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{route('home')}}" class="dropdown-item">Service1</a>
                            <a href="{{route('home')}}" class="dropdown-item">Service2</a>
                            <a href="{{route('home')}}" class="dropdown-item">Service3</a>
                        </div>
                    </li>  
                    <li class="navbar-item mx-md-2">
                        <a href="{{route('home')}}" class="nav-link">Testimonial</a>
                    </li>   
                </ul>
                @guest
                <!-- mobile button -->
                    <form action="#" class="form-inline d-sm-block d-md-none">
                        <button class="btn btn-login my-2 my-sm-0" type="button"
                        onclick="event.preventDefault(); location.href='{{url('login')}}';">
                            Login
                        </button>
                    </form>
                    <!-- desktop button  -->
                    <form action="#" class="form-inline my-2 my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                        onclick="event.preventDefault(); location.href='{{url('login')}}';">
                            Login
                        </button>
                    </form> 
                @endguest  

                @auth
                <!-- mobile button -->
                    <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}"
                    method="POST">
                        @csrf
                        <button class="btn btn-login my-2 my-sm-0" type="submit">
                            logout
                        </button>
                    </form>
                    <!-- desktop button  -->
                    <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}"
                    method="POST">
                        @csrf
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                            logout
                        </button>
                    </form> 
                @endauth  
            </div>
        </nav>
    </div>