  


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
                           <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Ajouter une chose à faire ">
                       <div>
                           <button type="button" class="btn btn-primary"><a href="index.php?route=accueil&action=create">Ajouter</a></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
         


            <div class="todo-selection">

            <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
              <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input
                    class="form-check-input me-0"
                    type="checkbox"
                    value=""
                    id="flexCheckChecked1"
                    aria-label="..."
                    checked
                  />
                </div>
              </li>
              <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0">Buy groceries for next week</p>
              </li>
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                  <a href="?route=acceuil&action=delete" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0">28th Jun 2020</p></a>
                </div>
              </li>
            </ul>








            <ul class="list-group list-group-horizontal rounded-0">
              <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input
                    class="form-check-input me-0"
                    type="checkbox"
                    value=""
                    id="flexCheckChecked2"
                    aria-label="..."
                  />
                </div>
              </li>
              <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0">Renew car insurance</p>
              </li>       
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
                  <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0"></i>28th Jun 2020</p></a>
                </div>
              </li>
            </ul>


    




              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>



</body>


</html>