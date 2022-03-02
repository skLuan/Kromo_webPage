const header = () => {
    let element = document.createElement("header");
    element.classList.add(["header", "header_white", "header_fixed"]);

    const header = `<div class="header__container">
    <div class="header__wrapper container-fluid">
        <div class="header__inner">
            <a class="logo header__logo" href="index.html"><img src="favicons/kromo-logo.png" alt="Logo"
                    width="50%" /></a>
            <button class="header__menu-button" type="button">
                <span class="header__menu-button-inner"></span>
            </button>
        </div>
    </div>
    <div class="header-full-page">
        <div class="container header-full-page__bottom">
            <ul class="top-menu header-full-page__menu">
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="index.html">Inicio</a>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="#proyectos">Proyectos</a>
                        <div class="dropdown__menu">
                            <div class="dropdown__column">
                                <div class="dropdown__item">
                                    <a class="dropdown__link" href="realizados.html">Realizados</a>
                                </div>
                                <div class="dropdown__item">
                                    <a class="dropdown__link" href="proyectos-en-venta.html">Proyectos en Venta</a>
                                </div>
                                <div class="dropdown__item">
                                    <a class="dropdown__link" href="construccion.html">En Construcción</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="empresa.html">Nuestra Empresa</a>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="contacto.html">Contacto</a>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="postVenta.html">Post venta</a>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="comprasExterior.html">Compras
                            exterior</a>
                    </div>
                </li>
                <li class="top-menu__menu-item">
                    <div class="dropdown">
                        <a class="dropdown__trigger top-menu__menu-link" href="">Pagos <img src="img/logo-pse.png"
                                width="35px" alt="" /></a>
                        <div class="dropdown__menu">
                            <div class="dropdown__column">
                                <div class="dropdown__item">
                                    <a class="dropdown__link"
                                        href="https://www.alianzaenlinea.com.co/recaudos/login">Alianza en linea</a>
                                </div>
                                <div class="dropdown__item">
                                    <a class="dropdown__link"
                                        href="https://transacciones.fidubogota.com/Preventas/pagos_pse/aporte_publico.pub">FiduBogotá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- ------------------------------------------------------- -->
<div class="header__overlay"></div>

<!-- --------------------------------Navbar mobile -->
<div class="menu-panel header__menu">
    <div class="menu-panel__inner">
        <button class="header__menu-button header__menu-button_fixed" type="button">
            <span class="header__menu-button-inner"></span>
        </button>
        <p><img src="favicons/kromo-logo.png" alt="Logo" width="50%" /></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div class="menu-panel__menu">
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link menu-panel__menu-link_active" data-toggle="collapse"
                    href="index.html">Inicio</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="#submenu2">Proyectos</a>
                <div class="menu-panel__menu-list collapse" id="submenu2">
                    <div class="menu-panel__bottom-submenu">
                        <div class="menu-panel__submenu-item">
                            <a class="menu-panel__submenu-link" href="realizados.html">Realizados</a>
                        </div>
                        <div class="menu-panel__submenu-item">
                            <a class="menu-panel__submenu-link" href="proyectos-en-venta.html">Proyectos en Venta</a>
                        </div>
                        <div class="menu-panel__submenu-item">
                            <a class="menu-panel__submenu-link" href="construccion.html">En Construcción</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link" data-toggle="collapse" href="empresa.html">Nuestra Empresa</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link" data-toggle="collapse" href="blog.html">Blog</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link menu-panel__menu-link_active" data-toggle="collapse"
                    href="contacto.html">Contacto</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link menu-panel__menu-link_active" data-toggle="collapse"
                    href="postVenta.html">Post venta</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link menu-panel__menu-link_active" data-toggle="collapse"
                    href="comprasExterior.html">Compras Exterior</a>
            </div>
            <div class="menu-panel__menu-item">
                <a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="#submenu3">Pagos <img
                        src="img/logo-pse.png" width="35px" alt="" /></a>
                <div class="menu-panel__menu-list collapse" id="submenu3">
                    <div class="menu-panel__bottom-submenu">
                        <div class="menu-panel__submenu-item">
                            <a class="dropdown__link" href="https://www.alianzaenlinea.com.co/recaudos/login">Alianza en
                                linea</a>
                        </div>
                        <div class="menu-panel__submenu-item">
                            <a class="dropdown__link"
                                href="https://transacciones.fidubogota.com/Preventas/pagos_pse/aporte_publico.pub">FiduBogotá</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-panel__footer">
            <div class="socials menu-panel__socials">
                <a class="socials__social icofont-instagram" href="https://www.instagram.com/kromoconstructores"
                    target="_blank">
                    <div class="visually-hidden">instagram</div>
                </a>
                <a class="socials__social icofont-facebook" href="https://www.facebook.com/kromoconstructores"
                    target="_blank">
                    <div class="visually-hidden">facebook</div>
                </a>
                <a class="socials__social icofont-youtube" href="https://www.youtube.com/watch?v=UZ9xfhHe-Eo"
                    target="_blank">
                    <div class="visually-hidden">youtube</div>
                </a>
            </div>
            <div class="menu-panel__bottom">
                <div class="menu-panel__copyright">
                    © 2020 <strong>KROMO CONSTRUCTORES.</strong> Todos los derechos
                    reservados.
                </div>
                <div class="menu-panel__author">
                    Desarrollado
                    <a href="#">RR Creativos</a>
                </div>
            </div>
        </div>
    </div>
</div>`;
    element.innerHTML = header;
    return element;
};
// ---------------------------------------- Carga del header
const headerContainer = document.querySelector(".page__inner");
console.log(headerContainer);
headerContainer.insertBefore(header(),headerContainer.firstChild);

