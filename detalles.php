<?php
/*  Primero habilitamos el uso de búferes de salida, los cuales 
  almacenaran toda la Salida en un búfer interno */
ob_start('compress_page');
?>
<?php include 'headers.php'; ?>


<div class="container-fluid">
    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 40%"></div>
    <form>
        <div class="row">

            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5">Tipo de Persona</div>
                    <div class="col-sm-7">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input">Fisica
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input">Moral
                            </label>
                        </div>
                    </div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Apellido Paterno</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="50"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Apellido Materno</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Nombre (s)</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">RFC</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">CURP</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Genero</div>
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Indistinto</option>
                            <option>Femenino</option>
                            <option>Masculino</option>
                        </select>
                    </div>
                    <br><br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5">Fecha de Nacimiento</div>
                    <div class="col-sm-7"><input type="date" class="form-control input-sm" required></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Calle</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Numero interior</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Numero exterior</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="16"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Colonia</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="60"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Municipio</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="60"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">CP</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="5" minlength="5"></div>
                    <br><br>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-5">Estado</div>
                    <div class="col-sm-7">
                        <select class="form-control">
                            <option>Aguascalientes</option>
                        </select>
                    </div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Ciudad</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="60"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Pais</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="60"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Email</div>
                    <div class="col-sm-7"><input type="email" class="form-control input-sm" required></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Telefono</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm" required maxlength="20"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Fax</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm"  maxlength="10"></div>
                    <br><br>
                </div>
                <div class="row">
                    <div class="col-sm-5">Extension</div>
                    <div class="col-sm-7"><input type="text" class="form-control input-sm"  maxlength="5"></div>
                    <br><br>
                </div>
            </div> 

        </div>
        <!-- Action Buttons-->
        <div class="row">
            <div class="col-sm-12">
                <div class="btn-group float-right">
                    <button type="button" class="btn btn-outline-info">Agregar nuevo</button>
                    <input type="submit" class="btn btn-outline-primary" value="Actualizar">
                </div>
            </div>
            <br><br>
        </div>
        <!-- End Action Buttons-->
    </form>
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#Contratante" role="tab" data-toggle="tab">Contratante</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content"><br>
                <!-- SECCION DE SMART FOLDER DE CONTRATANTE -->
                <div role="tabpanel" class="tab-pane in active" id="Contratante">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-bordered" id="example">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END SECCION DE SMART FOLDER DE CONTRATANTE -->

            </div>
            <!--End Tab panes -->
        </div>
        <!--End col-sm-12 -->
    </div>
    <!-- Row -->
</div>
<?php include 'footer.php'; ?>
<?php
/*  Una vez que el búfer almaceno nuestro contenido,
  utilizamos "ob_end_flush" para usarlo y deshabilitar el búfer */
ob_end_flush();
/*  Este es el SNC de este código, el cual se encarga de 
  eliminar todos los espacios en blanco entre los Tags */

function compress_page($buffer) {
    $search = array('/\>[^\S ]+/s', '/[^\S ]+\</s', '/(\s)+/s');
    $replace = array('>', '<', '\\1');
    return preg_replace($search, $replace, $buffer);
}
?>