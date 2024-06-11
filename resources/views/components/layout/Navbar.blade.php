<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid gap-4">
        <a class="navbar-brand" href="{{ route('home') }}"><img class="logo" src="/image/logo.png" alt="logo image"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  link" aria-current="page" href="#">HOW IT WORKS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link" href="{{ route('ourservices.index') }}">OUR SERVICES</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link" href="#">HOSTING AND DOMAIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link link" href="#">CONTACT US</a>
                </li>
            </ul>

        </div>
        <div class="collapse navbar-collapse gap-5" id="navbarSupportedContent">
            <div class="socialContact">
                <a href="https://www.facebook.com/GoTechnoology"><img src="/image/icone/facebook.svg"
                        alt="facebook icone"></a>
                <a href="https://wa.me/970597403106"><img src="/image/icone/whats App.svg" alt="Whats app icone"></a>
                <a href="#"><img src="/image/icone/linkedin.svg" alt="linkedin icone"></a>

            </div>
            <a class="headerLink" href="mailto:info@goit.ps">BUY TICIKETS</a>
        </div>
    </div>
</nav>
