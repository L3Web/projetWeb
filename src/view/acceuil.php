
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
<?php foreach ($todos as $todo ):?>
<div class="todo-selection">

<ul class="list-group list-group-horizontal rounded-0 bg-transparent">
  <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
    <div class="form-check">
     
      <?php if ($todo->getCheck()   ) : ?>
        <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." disabled="disabled"  checked />
      <?php else : ?>
         <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." disabled="disabled" disable/>
        <?php endif ?>
   
      
    </div>
  </li>
  <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
    <p class="lead fw-normal mb-0"> <?php echo $todo->getTitle() ?></p>
  </li>
  <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
    <div class="d-flex flex-row justify-content-end mb-1">
      <a href="?route=accueil&action=check&id=<?= $todo->getId() ?>"  class="text-info" data-mdb-toggle="tooltip" title="Check todo" ><i class="fas fa-check" style="margin-right:10px"></i></a>
      <a href="?route=accueil&action=update&id=<?= $todo->getId() ?>" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
      <a href="?route=accueil&action=delete&id=<?= $todo->getId() ?>" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
    </div>
    <div class="text-end text-muted">
      <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
        <p class="small mb-0"> <?= ($todo->getCreated_At())->format('Y-m-d H:i:s') ?> </p>
      </a>
    </div>
  </li>
</ul>
<?php endforeach; ?>

<div class=""></div>


</div>