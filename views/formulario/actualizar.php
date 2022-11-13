<div class="container-fluid" style="background: linear-gradient(to right, rgba(132,250,176,0.5), rgba(143,211,244,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <div class="card border-primary mb-3" style="max-width: 80rem;">
                <div class="card-header">Actualizar</div>
                <div class="card-body text-primary">
                <?php if($msg != "") {?>
                <div class="alert alert-success" role="alert">
                    <?php echo seg::decodificar($msg) ?>
                </div>
                <?php } ?>
                <form action="<?php echo "index.php?c=".seg::codificar("actualizar")."&m=".seg::codificar("update_bd") ?>" method="post" class="row row-cols-lg-auto g-3 align-items-center">
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">ID</label>
                        <div class="input-group">
                        <div class="input-group-text">Correo</div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="" name="txt_actualizar" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">ID</label>
                        <div class="input-group">
                        <div class="input-group-text">Nuevo Mensaje</div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="" name="txt_actualizar_2" />
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo seg::getToken() ?>" name="token"/>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>