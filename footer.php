<footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>
                    <li>
                        <a class="<?= $active == 1 ? "active":"" ?> fs-1-5rem border-black" href="index.php"> Inicio <br>
                            <span title="De vuelta al nido">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?= $active == 2 ? "active":"" ?> fs-1-5rem border-black" href="login.php"> Ingreso <br>
                            <span title="Ingresa a tu nido">
                            <i class="fa fa-sign-in fs-1-5rem" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <?php if (!$_SESSION["logueado"]): ?>
                    <li>
                        <a class="<?= $active == 3 ? "active":"" ?> fs-1-5rem border-black" href="register.php"> Registro <br>
                            <span title="Crea una cuenta para buitrear!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <?php else: ?>
                        <li>
                        <a class="<?= $active == 3 ? "active":"" ?> fs-1-5rem border-black" href="profile.php"> Perfil <br>
                            <span title="Edita tu perfil!">
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    <?php endif; ?>
                    
                    <li>
                        <a class="<?= $active == 4 ? "active":"" ?> fs-1-5rem border-black" href="faq.php">
                            <span title="Preguntas Frecuentemente Graznadas"> F.A.Q. <br>
                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?= $active == 5 ? "active":"" ?> fs-1-5rem border-black" href="contacto.php">
                            <span title="Un contacto para graznarnos"> Contacto <br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>

                </ul>
            </nav>
        </div> <!-- main-footer-container -->         
    </footer>
