<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <table id="dataTable" class="table dataTable table-responsive no-footer">
            <thead>
                <tr class="main-fila">
                    <th>Item</th>
                    <th>Tipo de Investigación</th>
                    <th>Título de Investigación</th>
                    <th>Institución</th>
                    <th width="120px">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $item = 0;
                foreach ($this->ProyectosM->readProyectos() as $row){
                    $item++;
            ?>
                <tr>
                    <td><?php echo $item; ?></td>
                    <td><?php echo $row["np_tipoInvestigacion"]; ?></td>
                    <td><?php echo $row["np_tituloInvestigacion"]; ?></td>
                    <td><?php echo $row["np_institucion"]; ?></td>
                    <td>
                        <a href="" class="icon-table">
                            <i class="material-icons icon-green">remove_red_eye</i>
                        </a>
                        <a href="index.php?c=semillero&a=update&token=<?php echo $row['ind_code'];?>" class="icon-table">
                            <i class="material-icons icon-yellow">create</i>
                        </a>
                        <a href="index.php?c=semillero&a=delete&token=<?php echo $row['ind_code'];?>" class="icon-table">
                            <i class="material-icons icon-red">delete</i>
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>