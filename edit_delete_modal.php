<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kereta Fatin</title>
</head>
<body>
     <!-- Modal EDIT-->
     <div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Kemaskini Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method ="POST" action="edit.php">
                <div>
                <input type="hidden" class="form-control" name="id"  value="<?php echo $row['id']; ?>">

                <div>
                    <label>Nama</label>
                    <input type="text" class="form-control"  name="nama_pembeli" value="<?php echo $row['nama_pembeli']; ?>">
                </div>

                    <label>Jenis Kereta</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_kereta" name="jenis_kereta">
                    <option selected><?php echo $row['jenis_kereta']; ?></option>
                    <option>Sedan</option>
                    <option>MPV</option>
                    <option>4x4</option>
                    <option>Van</option>
                    </select>
                </div>
                <div>
                    <label>Nama Kereta</label>
                    <select class="form-select" aria-label="Default select example" id="nama_kereta" name="nama_kereta">
                    <option selected><?php echo $row['nama_kereta']; ?></option>
                    <option>Proton</option>
                    <option>X50</option>
                    <option>Exora</option>
                    <option>Mercedes</option>
                    <option>BMW</option>
                    </select>
                </div>
                <div>
                    <label>Negara Pembuat</label>
                    <select class="form-select" aria-label="Default select example" id="negara" name="negara">
                    <option selected><?php echo $row['negara']; ?></option>
                    <option>Malaysia</option>
                    <option>China</option>
                    <option>Jepun</option>
                    <option>German</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="edit">KemasKini Data</button>
            </div>
                </form>
</div>
            </div>
                </div>
            </div>
            </div>



<body>
     <!-- Modal Delete-->
     <div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Anda hendak buang rekod <?php echo $row['nama_pembeli']; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Adakah anda pasti untuk padam rekod <b><?php echo $row['nama_pembeli']; ?><b>?</p>
            </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Yes</a>
            </div>
               
    </div>
            </div>
            </div>
            </div>
            </body>
</html>