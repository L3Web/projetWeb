

  <h1 class="form_title">Update</h1>

  <form method='post' action='?route=accueil&action=updated&id=<?= $title->getId() ?>'>
      

      <label for="inputnom" class="form-label">Title</label>
      <input type="nom" name="title" class="form-control" value="<?= $title->getTitle(); ?>">
     
    

     <button type="submit" class="btn btn-primary" >Update</button>
  </form>

</div>

