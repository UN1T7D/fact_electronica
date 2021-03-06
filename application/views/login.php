<body class="login">
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow" style="z-index: 99;">
            <a class="navbar-brand g-start-2" style="grid-row: 2" href="#">Waresoft - Facturación electronica</a>

        </nav>

        <div class="container-wrapper">
            <div class="item-wrapper">
                <img src="<?=base_url("assets/build/images/faq-login.svg")?>" alt="faq-waresoft" class="img-fluid">
            </div>
            <div class="item-wrapper">
                <a class="hiddenanchor" id="signup"></a>
                <a class="hiddenanchor" id="signin"></a>
                <div class="login_wrapper">
                    <div class="animate form login_form">
                        <section class="login_content">
                            <form>
                                <h1>Iniciar Sesión</h1>
                                <div>
                                    <input type="text" class="nrc_register form-control" placeholder="NRC" required="" />
                                </div>
                                <div>
                                    <input type="text" class="dui_register form-control" placeholder="DUI" required="" />
                                </div>
                                <div>
                                    <input type="password" class="form-control" placeholder="Contraseña" required="" />
                                </div>
                                <div>
                                    <a class="btn btn-default submit" href="<?= base_url() ?>home">Ingresar</a>
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
                                <div class="form-group">
                                    <label class="d-flex">Razón social*</label>
                                    <input type="text" id="razon_social" class="razon_social form-control" placeholder="Razón Social" required="" />
                                </div>
                                <div class="form-group">
                                    <label class="d-flex">NIT*</label>
                                    <input type="text" id="nit_empresa" class="nit_empresa form-control" placeholder="NIT" required="" />
                                </div>
                                <div class="form-group">
                                    <label class="d-flex">NRC*</label>
                                    <input type="text" id="nrc_register" class="nrc_register form-control" placeholder="NRC" required="" />
                                </div>
                                <div class="form-group">
                                    <label class="d-flex">Correo*</label>
                                    <input type="email" id="correo_empresa" class="correo_empresa form-control" placeholder="Correo Electronico" required="" />
                                </div>
                                <!-- <div>
                        <input type="password" class="form-control" placeholder="Contraseña" required="" />
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="NCR" required="" />
                    </div> -->
                                <div>
                                    <button type="button" class="btn-default btn btn-link" style="color:#73879C;" id="create_acount">Crear cuenta</button>
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
        </div>
    </div>
