

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet"  href="../vendors/bootst/bootstrap.min.css">
  <link rel="stylesheet"  href=" ../vendors/datatable/bootstrap.min.css">
  <link rel="stylesheet"  href="../vendors/datatable/bootstrap5.min.css">
  
   <link href=" ../vendors/fontawesome/css/all.min.css" rel="stylesheet">
   <link rel="stylesheet" href=" ../vue/css/sidebars.css">
 <script src=" ../vendors/fontawesome/js/all.min.js"></script>
  <script src=" ../vendors/bootst/bootstrap.min.js"></script>
  <script src=" ../vendors/bootst/bootstrap.bundle.min.js"></script>
  <script src=" ../vendors/jquery/jquery.min.js"></script>
  <script src=" ../vendors/datatable/jquery-3.7.0.js"></script>
  <script src=" ../vendors/datatable/dataTables.min.js"></script>
  <script src=" ../vendors/datatable/bootstrap5.min.js"></script>

  
  <title></title>
</head>
<body>

<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" id="col">Creer un compte</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- <div class="modal-dialog modal-lg"> -->
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Creer un compte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom</label>
            <input type="text" class="form-control" name="nom">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="mail">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Contact</label>
            <input type="text" class="form-control" name="contact">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Login</label>
            <input type="text" class="form-control" name="login">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="text" class="form-control" name="password">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Photo</label>
            <input type="file" class="form-control" name="photo">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Statut</label>
            <input type="text" class="form-control" name="statut">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Datajout</label>
            <input type="date" class="form-control" name="ajout">
          </div>
     <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Datemodif</label>
            <input type="date" class="form-control" name="modif">
          </div>
    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fonction</label>
            <select name="fonction"class="form-control">
     <?php foreach ($res as $row): ?> 
      <option value="<?= $row['idfoncton']; ?>" >
        <?= $row['libelle']; ?>
      
    </option>
    <?php endforeach; ?></select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-dark" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-danger">Enregister</button>
      </div>
    </div>
  </div>
</div> 
<div>
<div class="ari">
<table id="example" class="table table-striped" >
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Login</th>
                 <th>Password</th>
                  <th>Photo</th>
                <th>Statut</th>
                <th>Fonction</th>
                <th> Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($resultat as $key): ?>
      <tr>
        <td><?= $row['nom'] ; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['contact']; ?> </td>
         <td><?= $row['login']; ?></td>
          <td><?= $row['password']; ?></td>
          <td><?= $row['photo']; ?> </td>
          <td><?= $row['statut']; ?> </td>
          <td><?= $row['fonction']; ?> </td>
          <th><i class="fas fa-sync-alt text-success"></i></i></a><a><i class="fas fa-trash-alt text-danger" ></i></a></th>
                    
         </tr>
 <?php endforeach;?> 
  
              
        </tbody>
    </table>
  </div>
   
</body>
</html>
<script src="../vue/js/datatable.js"></script>