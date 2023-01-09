<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kereta Fatin</title>
</head>
<body>
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru Kereta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method ="POST" action="insert.php" class="was-validated">
                <div>
                    <label>Nama Pembeli</label>
                    <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli">
                </div>
                <div>
                    <label>Jenis Kereta</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_kereta" name="jenis_kereta">
                    <option selected></option>
                    <option>Sedan</option>
                    <option>MPV</option>
                    <option>4x4</option>
                    <option>Van</option>
                    </select>
                </div>
                <div>
                    <label>Nama Kereta</label>
                    <select class="form-select" aria-label="Default select example" id="nama_kereta" name="nama_kereta">
                    <option selected></option>
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
                    <option selected></option>
                    <option>Malaysia</option>
                    <option>China</option>
                    <option>Jepun</option>
                    <option>German</option>
                    </select>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary" name="submit">Simpan Data</button>
            </div>
                </form>
</div>
            </div>
                </div>
            </div>
            </div>
</body>
</html>