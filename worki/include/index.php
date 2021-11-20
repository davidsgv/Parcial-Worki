
	<body>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-offset-1">
                    <h1 class="lead">Inicio de Sesion</h1>
                    <form action="validar.php" method="post">
                        <div class="form-group">
                            <label>Correo electronico</label>
                            <input type="email" class="form-control" name="mail" placeholder="Email@email.com">
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" name="pass" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div class="col-sm-5">
                <h1 class="lead">Registrarse</h1>
                    <form method="post" action="" >              
                        <div class="form-group">
                            <label>Ingresa tu nombre</label>
                            <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
                        </div>
                        <div class="form-group">
                            <label>Ingresa tu email</label>
                            <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
                        </div>
                        <div class="form-group">
                            <label>Ingresa tu Password</label>
                            <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
                        </div>
                        <div class="form-group">
                            <label>Repite tu contraseña</label>
                            <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
                        </div>                        
                            <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
                            <?php
                                if(isset($_POST['submit'])){ require("registro.php");}
                            ?>
                    </form>
                </div>
            <div>
        </div>
        <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>