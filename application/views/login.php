<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Iniciar Sesión</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="NCR" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="DUI" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Contraseña" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="<?=base_url()?>home">Ingresar</a>
                            <a class="reset_pass" href="#">Perdiste tu contraseña?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Nueva Empresa?
                                <a href="#signup" class="to_register"> Crear cuenta </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fad fa-file-invoice-dollar"></i> Facturación Electronica</h1>
                                <p>©2022 Todos los derechos reservados. Facturación Electronica.
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">
                    <form>
                        <h1>Cuenta de empresa</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Razón Social" required="" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="NIT" required="" />
                        </div>
                        <div>
                            <input type="text" class="form-control" placeholder="NCR" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Correo Electronico" required="" />
                        </div>
                        <!-- <div>
                        <input type="password" class="form-control" placeholder="Contraseña" required="" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="NCR" required="" />
                    </div> -->
                        <div>
                            <a class="btn btn-default submit" href="index.html">Crear cuenta</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Ya eres usuario?
                                <a href="#signin" class="to_register"> Iniciar sesión </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fad fa-file-invoice-dollar"></i> Facturación Electronica</h1>
                                <p>©2022 Todos los derechos reservados. Facturación Electronica.
                                </p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>