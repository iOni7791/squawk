<footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>
                    @guest
                    <li>
                        <a class="{{ $activo == 1 ? "active":"" }} fs-1-5rem border-black" href="./"> Inicio <br>
                            <span title="De vuelta al nido">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 2 ? "active":"" }} fs-1-5rem border-black" href="milogin"> Ingreso <br>
                            <span title="Ingresa a tu nido">
                            <i class="fa fa-sign-in fs-1-5rem" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 3 ? "active":"" }} fs-1-5rem border-black" href="miregister"> Registro <br>
                            <span title="Crea una cuenta para buitrear!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 4 ? "active":"" }} fs-1-5rem border-black" href="faq">
                            <span title="Preguntas Frecuentemente Graznadas"> F.A.Q. <br>
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 5 ? "active":"" }} fs-1-5rem border-black" href="contact">
                            <span title="Un contacto para graznarnos"> Contacto <br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>

                    @endguest
                    @auth
                    <li>
                        <a class="{{ $activo == 1 ? "active":"" }} fs-1-5rem border-black" href="profile.php"> Perfil <br>
                            <span title="Acicala tu perfil">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 2 ? "active":"" }} fs-1-5rem border-black" href="friends.php"> Amigos <br>
                            <span title="Tus amigos, los buitres">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 3 ? "active":"" }} fs-1-5rem border-black" href="profile.php"> Perfil <br>
                            <span title="Edita tu perfil!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 4 ? "active":"" }} fs-1-5rem border-black" href="posts.php">
                            <span title="Tus graznadas"> Posts <br>
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ $activo == 5 ? "active":"" }} fs-1-5rem border-black" href="logout.php">
                            <span title="Salir volando"> Salir <br>
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    @endauth
                </ul>
            </nav>
        </div> <!-- main-footer-container -->
    </footer>
