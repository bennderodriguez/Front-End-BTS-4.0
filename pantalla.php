<?php
   /*  Primero habilitamos el uso de búferes de salida, los cuales 
        almacenaran toda la Salida en un búfer interno  */
   ob_start('compress_page');
?>
<?php include 'headers.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"><h3>SVI</h3><h5>Sistema vida inteligente</h5></div>
        <div class="col-sm-4"><h5>Cambios sin efecto</h5></div>
        <div class="col-sm-4"><h5>Administrador vida individual</h5></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-5">Poliza</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Poliza"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Contratante</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Contratante"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Asegurado</div>
                <div class="col-sm-7">
                    <select class="form-control" name="" id="">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Estatus asegurado</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Estatus asegurado"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">División</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="División"></div>
                <br><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-5">Cartera</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Cartera general"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Póliza agrupada</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Póliza agrupada"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Moneda</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Moneda"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Producto</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Producto"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Tipo de producto</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Tipo de producto"></div>
                <br><br>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="row">
                <div class="col-sm-5">Inicio de vigencia</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="10/10/1999"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Término de vigencia</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="10/10/2045"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Estatus</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Estatus"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Fecha de estatus</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="12/02/2005"></div>
                <br><br>
            </div>
            <div class="row">
                <div class="col-sm-5">Solicitud</div>
                <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="Solicitud"></div>
                <br><br>
            </div>
        </div>       
    </div>
    <div class="row">
        <div class="col-sm-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#Contratante" role="tab" data-toggle="tab">Contratante</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Dom" role="tab" data-toggle="tab">Dom Cobro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Conducto" role="tab" data-toggle="tab">Conducto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Contrato" role="tab" data-toggle="tab">Contrato Web</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Endosos" role="tab" data-toggle="tab">Endosos</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- SECCION DE SMART FOLDER DE CONTRATANTE -->
                <div role="tabpanel" class="tab-pane in active" id="Contratante">
                    <div class="container">
                        <h3>Contratante</h3>
                        <div class="row">  
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-5">Cliente vida</div>
                                    <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="101070174"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Es contratante asegurado?</div>
                                    <div class="col-sm-7"><input type="checkbox" value="" id=""></div>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-5">Contratante</div>
                                    <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="John Doe"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Es persona moral</div>
                                    <div class="col-sm-7"><input type="checkbox" value="" id=""></div>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-5">RFC</div>
                                    <div class="col-sm-7"><input type="text" name="" id="" class="form-control input-sm" value="JDOE587TGY7"></div>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SECCION DE SMART FOLDER DE CONTRATANTE -->
                <!-- SECCION DE SMART FOLDER DOM COBRO -->
                <div role="tabpanel" class="tab-pane fade" id="Dom">
                    <h1>Dom cobro</h1>
                </div>
                <!--END SECCION DE SMART FOLDER DOM COBRO -->
                <!-- SECCION DE SMART FOLDER CONDUCTO -->
                <div role="tabpanel" class="tab-pane fade" id="Conducto">
                    <h1>Conducto</h1>
                </div>
                <!-- END SECCION DE SMART FOLDER DOM CONDUCTO -->
                <!-- SECCION DE SMART FOLDER CONTRATO WEB -->
                <div role="tabpanel" class="tab-pane fade" id="Contrato">
                    <div class="container">
                        <h3>Contrato web</h3>
                        <div class="row">  
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-5">Email</div>
                                    <div class="col-sm-7"><input type="email" name="" id="" class="form-control input-sm" value="mail@mail.com"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Intentos</div>
                                    <div class="col-sm-7"><input type="number" min="0" name="" id="" class="form-control input-sm" value="1"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Fecha de creación</div>
                                    <div class="col-sm-7"><input type="date" name="" id="" class="form-control input-sm" value=""></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Fecha ultimo acceso</div>
                                    <div class="col-sm-7"><input type="date" name="" id="" class="form-control input-sm" value=""></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Hora ultima de acceso</div>
                                    <div class="col-sm-7"><input type="time" name="" id="" class="form-control input-sm" value=""></div>
                                    <br><br>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-5">Bloqueado</div>
                                    <div class="col-sm-7"><input type="checkbox" name="" id="" class="form-control input-sm"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Bloqeado seguridad</div>
                                    <div class="col-sm-7"><input type="checkbox" name="" id="" class="form-control input-sm"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Fecha bloqueado</div>
                                    <div class="col-sm-7"><input type="date" name="" id="" class="form-control input-sm"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Fecha ultima de modificación</div>
                                    <div class="col-sm-7"><input type="date" name="" id="" class="form-control input-sm"></div>
                                    <br><br>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5">Hora ultima de modificación</div>
                                    <div class="col-sm-7"><input type="time" name="" id="" class="form-control input-sm"></div>
                                    <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SECCION DE SMART FOLDER CONTRATO WEB -->
                <!-- SECCION DE SMART FOLDER ENDOSOS -->
                <div role="tabpanel" class="tab-pane fade" id="Endosos">
                    <h1>Endosos</h1>
                </div>
                <!-- END SECCION DE SMART FOLDER ENDOSOS -->
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-xs-4 col-sm-4">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary"><span class="pe-7s-upload"></span> Apple</button>
                <button type="button" class="btn btn-outline-primary">Apple</button>
                <button type="button" class="btn btn-outline-primary">Sony</button>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Apple</button>
                <button type="button" class="btn btn-outline-primary">Samsung</button>
            </div>
        </div>
        <div class="col-xs-3 col-sm-3">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Apple</button>
                <button type="button" class="btn btn-outline-primary">Samsung</button>
            </div>
        </div>
        <div class="col-xs-1 col-sm-1">
            <div class="btn-group">
                <button type="button" class="btn btn-outline-primary">Apple</button>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
<?php  
   /*  Una vez que el búfer almaceno nuestro contenido,
    utilizamos "ob_end_flush" para usarlo y deshabilitar el búfer  */
   ob_end_flush();
   /*  Este es el SNC de este código, el cual se encarga de 
   eliminar todos los espacios en blanco entre los Tags  */  
   function compress_page($buffer)
   {
      $search = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s');
      $replace = array('>','<','\\1');
      return preg_replace($search, $replace, $buffer);
   }
?>