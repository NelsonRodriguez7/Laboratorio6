<div class="container-fluid" style="background: linear-gradient(to right, rgba(132,250,176,0.5), rgba(143,211,244,0.5))">
    <div class="vh-100 row m-0 text-center align-items-center justify-content-center">
        <div class = "col-auto">
            <h1>Mostrando Datos De La Tabla</h1>
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Mensjae</th>
                        <th scope="col">Apellido</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach(mostrar_controllers::serch_bd() as $r){?>
                    <tr>
                        <th scope="row"><?php echo $r->nombre?></th>
                        <td><?php echo $r->correo?></td>
                        <td><?php echo $r->mensaje?></td>
                        <td><?php echo $r->apellido?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>