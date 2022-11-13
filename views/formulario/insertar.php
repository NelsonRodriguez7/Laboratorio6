<div class="container-fluid" style="background: linear-gradient(to right, rgba(132,250,176,0.5), rgba(143,211,244,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <div class="card border-primary mb-3" style="max-width: 80rem;">
                <div class="card-header">Insertar</div>
                <div class="card-body text-primary">
                <?php if($msg != "") {?>
                <div class="alert alert-success" role="alert">
                    <?php echo seg::decodificar($msg) ?>
                </div>
                <?php }?>
                <form action="<?php echo "index.php?c=".seg::codificar("insertar")."&m=".seg::codificar("insert_bd") ?>" method="post" class="row gy-2 gx-4 align-items-center justify-content-center">
                    <div class="col-auto">
                        <div class="form-outline">
                        <input type="text" id="form11Example1" class="form-control" name="txt_nombre"/>
                        <label class="form-label" for="form11Example1">Nombre</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-outline">
                        <input type="text" id="form11Example1" class="form-control" name="txt_correo"/>
                        <label class="form-label" for="form11Example1">Correo</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-outline">
                        <input type="text" id="form11Example1" class="form-control" name="txt_mensaje"/>
                        <label class="form-label" for="form11Example1">Mensaje</label>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="form-outline">
                        <input type="text" id="form11Example1" class="form-control" name="txt_apellido"/>
                        <label class="form-label" for="form11Example1">Apellido</label>
                        </div>
                    </div>

                    <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>