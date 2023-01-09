<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Sistem Kereta Fatin</title> 
</head> 

<body> 
<div class="modal fade" id="view_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
    <!-- Scrollable modal --> 
    <div class="modal-dialog modal-dialog-scrollable"> 
    <div class="modal-content"> 
      <div class="modal-header"> 
        <h1 class="modal-title fs-5" id="exampleModalLabel">Paparan Data Kereta</h1> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
      </div> 
      <div class="modal-body"> 
        <form method="POST" action=""> 
          <div class="mb-3"> 
          <input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>"> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Nama Pembeli</label> 
            <input type="text" class="form-control" name="nama_pembeli" value="<?php echo $row['nama_pembeli']; ?>"> 
          </div> 
            <label for="recipient-name" class="col-form-label">Jenis Kereta</label> 
            <input type="text" class="form-control" name="jenis_kereta" value="<?php echo $row['jenis_kereta']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Nama Kereta</label> 
            <input type="text" class="form-control" name="nama_kereta" value="<?php echo $row['nama_kereta']; ?>"> 
          </div> 
          <div class="mb-3"> 
            <label for="recipient-name" class="col-form-label">Negara Pembuat</label> 
            <input type="text" class="form-control" name="negara" value="<?php echo $row['negara']; ?>"> 
          </div> 
          <div class="modal-footer"> 
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button> 
          </div> 
        </form> 
      </div> 
    </div> 
  </div> 
</div> 
</body> 
</html>
