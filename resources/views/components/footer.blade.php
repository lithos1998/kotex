<footer>
    <div class="footer-content">
        <div class="footer-sections">
            <div class="footer-logo">
                <img src="/assets/images/kotex-logo-white.png">
                <div class="footer-logo-icons">
                    <a href="https://www.facebook.com/elasticoskotexsrl/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.facebook.com/elasticoskotexsrl/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <hr>

            <div class="footer-section">
                <h4>Secciones</h4>
                <ul>
                    @foreach (Data::$nav_buttons as $buttons)
                        <li><a class="nav-link">{{ $buttons }}</a></li>
                    @endforeach
                </ul>
            </div>
            
            <div class="footer-newsletter">
                <h4>Suscribite al Newsletter</h4>

                <div>suscribite</div>
            </div>

            <div class="footer-contact">
                <h4>Contacto</h4>
                <div class="footer-contact-info">
                    @foreach (Data::$nav_contact_info as $info )
                        <div class="item">
                            <i class="{{ $info[0] }}"></i>
                            <p>{{ $info[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <span>© Copyright 2024 Kotex S.R.L. Todos los derechos reservados</span>
            <span>By Osole</span>
        </div>
    </div>
</footer>
