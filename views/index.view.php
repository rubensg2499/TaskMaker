<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles_buttons.css">
        <title>TaskMaker</title>
    </head>
    <body>
        <div class="container">
            <h1>TaskMaker Workspaces</h1>
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Nuevo workspace
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                      <?php require("views/Workspace/create.view.php"); ?>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
                <?php foreach ($workspaces as $workspace): ?>
                    <div class="col-3" style="margin-right:20px; margin-bottom: 20px">
                        <div class="card" style="width: 18rem; height: 100%;">
                          <div class="card-img-top" style="width:100%; height: 50px; background-color:<?php echo $colors[$workspace->getColor()] ?>;">
                          </div>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $workspace->getName(); ?></h5>
                            <p class="card-text"><?php echo $workspace->getDescription(); ?></p>
                            <a href="controllers/kanban.php?workspace=<?php echo $workspace->getWokspace_id(); ?>" class="btn btn-light float-end" style="background-color:<?php echo $colors[$workspace->getColor()] ?>; border-color:<?php echo $colors[$workspace->getColor()] ?>; color: white;">Abrir</a>
                          </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/add_form_workspace.js" charset="utf-8"></script>
    </script>
</html>
