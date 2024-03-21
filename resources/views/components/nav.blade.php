<nav id="nav">
    <div class="nav-bar">
        <img class="kotex-logo" src="/assets/images/kotex-logo.png">

        <div class="nav-content">
            <div class="nav-contact-info">
                <div class="items-info">
                    @foreach (Data::$nav_contact_info as $key => $info)
                        @if ($key != 'location')
                            <div class="item">
                                <i class="{{ $info[0] }}"></i>
                                <p>{{ $info[1] }}</p>
                            </div> 
                        @endif                        
                    @endforeach
                </div>

                <div class="contact-icons">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span>|</span>
                    <a href="https://www.facebook.com/elasticoskotexsrl/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.facebook.com/elasticoskotexsrl/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div class="nav-buttons">
                <ul>
                    @foreach (Data::$nav_buttons as $buttons)
                        <li><a href="#" class="nav-link">{{ $buttons }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav>