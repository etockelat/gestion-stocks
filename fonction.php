

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

<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" id="col">AJOUTER FONCTION</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Enregistrer une fonction</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Libelle</label>
            <input type="text" class="form-control" name="libelle">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Statut</label>
            <input type="text" class="form-control" name="statut">
          </div>
           <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Dateajout</label>
            <input type="date" class="form-control" name="ajout">
          </div>
     <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Datemodif</label>
            <input type="date" class="form-control" name="modif">
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
<table id="example" class="table table-striped" style="width:90%;">
        <thead id="ari">
            <tr>
                <th>Libelle</th>
                <th>Statut</th>
                <th>Dateajout</th>
                <th>Datemodif</th>
            </tr>
        </thead>
        <tbody>
            <tr>
    
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
               
        
    </table>
  </div>
   
</body>
</html>
<script src="../vue/js/datatable.js"></script>