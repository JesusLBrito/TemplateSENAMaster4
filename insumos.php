
<div class="container p-4">
        <div class="row">

             <div class="col-md-4">
                 
                 <div class="card card-body">
                    <form action="guardar.php" method="POST">
                       <h3>Registro de insumos</h3>
                       <br>
                       <h6>Producto</h6>
                     <div class="form-group">
                       <input type="text" name="nombre" class="form-control" placeholder="..." autofocus  required > 
                     </div>
                     <br>
                     <h6>Provedor</h6>
                     <div class="form-group">
                       <input type="text" name="provedor" class="form-control" placeholder="..." autofocus  required > 
                     </div>
                     <br>
                     <h6>Cantidad</h6>
                     <div class="form-group">
                       <input type="text" name="cantidad" class="form-control" placeholder="..." autofocus  required > 
                     </div>
                     <br>
                     <h6>Valor</h6>
                     <div class="form-group">
                       <input type="text" name="valorI" class="form-control" placeholder="..." autofocus  required > 
                     </div>
                     <br>
                     <input type="submit" value="Guardar" class="btn btn-success" name="enviar">
                    </form>

                 </div>

             </div>

             <div class="col-md-8">
                <table class="table table-bordered">
                <thead>
                <tr>
                  <th>nombre</th>
                  <th>provedor</th>
                  <th>cantidad</th>
                  <th>valor</th>
                  <th>fecha</th>
                  <th>actions</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                  <?php
                  $query = "SELECT * FROM insumos";
                  $respuesta = mysqli_query(, $query);

                  while($row = mysqli_fetch_array($respuesta)){ ?>
                    <tr>
                    <td><?php echo $row['nombre']?></td>
                    <td><?php echo $row['provedor']?></td>
                    <td><?php echo $row['cantidad']?></td>
                    <td><?php echo $row['valorI']?></td>
                    <td><?php echo $row['fecha']?></td>
                    <td>
                    <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                    editar
                    </a>
                    <a href="borrar.php?id=<?php echo $row['id']?>" class="btn btn-danger" >
                    borrar
                    </a>
                      </td>
                    </tr>
                    
                  <?php } ?>
                </table>
             </div>

        </div>
   </div>


