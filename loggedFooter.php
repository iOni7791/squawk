<footer>
        <div class="main-footer-container">
            <nav class="barra-navegacion">
                <ul>
                    <li>
                        <a class="<?= $active == 1 ? "active":"" ?> fs-1-5rem border-black" href="profile.php"> Perfil <br>
                            <span title="Acicala tu perfil">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?= $active == 2 ? "active":"" ?> fs-1-5rem border-black" href="friends.php"> Amigos <br>
                            <span title="Tus amigos, los buitres">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a class="<?= $active == 3 ? "active":"" ?> fs-1-5rem border-black" href="index.php"> Feed <br>
                            <span title="Las graznadas de tus amigos">
                                <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                                        
                    <li>
                        <a class="<?= $active == 4 ? "active":"" ?> fs-1-5rem border-black" href="posts.php">
                            <span title="Tus graznadas"> Posts <br>
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                    
                    <li>
                        <a class="<?= $active == 5 ? "active":"" ?> fs-1-5rem border-black" href="logout.php">
                            <span title="Salir volando"> Salir <br>
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div> <!-- main-footer-container -->         
    </footer>