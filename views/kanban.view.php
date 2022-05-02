<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php echo $workspace->getName(); ?></title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Workspace
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <div class="row">
                          <div class="col">
                              <div class="card text-center">
                                  <div class="card-header text-muted">
                                      Descripción
                                  </div>
                                  <div class="card-body">
                                      <h5 class="card-title"><?php echo $workspace->getName(); ?></h5>
                                      <p class="card-text"><?php echo $workspace->getDescription(); ?></p>
                                  </div>
                                  <div class="card-footer text-muted">
                                      Created date: <?php echo $workspace->getCreated_date(); ?><br>
                                      Last update: <?php echo $workspace->getLast_update(); ?>
                                  </div>
                              </div>
                          </div>
                          <div class="col">
                              <div class="card text-center">
                                  <div class="card-header text-muted">
                                      Actualizar o eliminar
                                  </div>
                                  <div class="card-body">
                                      <?php require("../views/Workspace/update.view.php"); ?>
                                  </div>
                              </div>
                          </div>
                      </div>

                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Tareas
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <div class="row">
                          <div class="col" >
                              <h4>Nueva tarea</h4>
                              <?php require("../views/Task/create.view.php"); ?>
                          </div>
                          <div class="col">

                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-3">
                <div class="col">
                    <div class="row"><h3>Backlog</h3></div>
                    <?php foreach ($tasks_to_do as $task): ?>
                        <div class="row" style="margin: 5px;">
                            <div class="card text-dark bg-warning mb-3" style="width: 100%;">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $task->getTitle(); ?></h5>
                                <p class="card-text"><?php echo $task->getDescription(); ?></p>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                  <a href="Task/update.php?action=move_to_right&task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Mover a la derecha"><img src="<?php echo "../assets/images/derecha.svg"; ?>" alt="Mover a la derecha" width="20px" style="color: white;"></a>
                                  <a href="Task/delete.php?task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Eliminar tarea"><img src="<?php echo "../assets/images/eliminar.svg"; ?>" alt="Eliminar" width="20px"></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="col">
                    <div class="row"><h3>Haciendo</h3></div>
                    <?php foreach ($tasks_doing as $task): ?>
                        <div class="row" style="margin: 5px;">
                            <div class="card text-white bg-primary mb-3" style="width: 100%;">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $task->getTitle(); ?></h5>
                                <p class="card-text"><?php echo $task->getDescription(); ?></p>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                  <a href="Task/update.php?action=move_to_left&task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Mover a la izquierda"><img src="<?php echo "../assets/images/izquierda.svg"; ?>" alt="Mover a la izquierda" width="20px"></a>
                                  <a href="Task/update.php?action=move_to_right&task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Mover a la derecha"><img src="<?php echo "../assets/images/derecha.svg"; ?>" alt="Mover a la derecha" width="20px"></a>
                                  <a href="Task/delete.php?task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Eliminar tarea"><img src="<?php echo "../assets/images/eliminar.svg"; ?>" alt="Eliminar" width="20px"></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <div class="col">
                    <div class="row"><h3>Hecho</h3></div>
                    <?php foreach ($tasks_done as $task): ?>
                        <div class="row" style="margin: 5px;">
                            <div class="card text-white bg-success mb-3" style="width: 100%;">
                              <div class="card-body">
                                <h5 class="card-title"><?php echo $task->getTitle(); ?></h5>
                                <p class="card-text"><?php echo $task->getDescription(); ?></p>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                  <a href="Task/update.php?action=move_to_left&task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Mover a la izquierda"><img src="<?php echo "../assets/images/izquierda.svg"; ?>" alt="Mover a la izquierda" width="20px" style="color: white;"></a>
                                  <a href="Task/delete.php?task=<?php echo $task->getTask_id(); ?>" class="btn btn-light" title="Eliminar tarea"><img src="<?php echo "../assets/images/eliminar.svg"; ?>" alt="Eliminar" width="20px"></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <script src="../js/bootstrap.min.js" charset="utf-8"></script>
    </body>
</html>
