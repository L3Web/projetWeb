
<?php foreach ($todos as $todo ):?>
<div class="todo-selection">

<ul class="list-group list-group-horizontal rounded-0 bg-transparent">
  <li class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
    <div class="form-check">
      <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1" aria-label="..." checked />
    </div>
  </li>
  <li class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
    <p class="lead fw-normal mb-0"> <?php echo $todo->getTitle() ?></p>
  </li>
  <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
    <div class="d-flex flex-row justify-content-end mb-1">
      <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i class="fas fa-pencil-alt me-3"></i></a>
      <a href="?route=acceuil&action=delete" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i class="fas fa-trash-alt"></i></a>
    </div>
    <div class="text-end text-muted">
      <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
        <p class="small mb-0"> <?= ($todo->getCreated_At())->format('Y-m-d H:i:s') ?> </p>
      </a>
    </div>
  </li>
</ul>
<?php endforeach; ?>




</div>