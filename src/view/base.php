<!doctype HTML>

<html>

<head>
  <link href="./assets/vendor/bootstrap.min.css" rel="stylesheet">
  <link href="./assets/css/style.css" rel="stylesheet">
  <link href="./assets/vendor/bootstrap-grid.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <title>Acceuil</title>


</head>


<body>


  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
            <div class="card-body py-4 px-4 px-md-5">





              <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">

                <u>Liste de choses à faire</u>
              </p>
              <div class="pb-2">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row align-items-center">
                      <form method='post' action='?route=accueil&action=create'>
                        <input type="text" class="form-control form-control-lg" name='title' placeholder="Ajouter une chose à faire ">
                        <div>
                          <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container">
                <?=  $content ?>
              </div>  


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>


</html>