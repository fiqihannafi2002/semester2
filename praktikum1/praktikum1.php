<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="row mt-5 ml-4 ">
        <div class="col-md-6 col-sm-12">
            <h2>Belanja Online</h2>
            <hr>
        <form method="post" action="">
  <div class="form-group row">
    <label for="Customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-md-8 col-sm-6">
      <input id="Customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-md-4 col-sm-12">Pilih Produk</label> 
    <div class="col-md-8 col-sm-6">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value=4200000> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value=3100000> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="3800000"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-md-8 col-sm-6">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-md-8 col-sm-12">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
 </form>
</div>
<div class="col-1"></div>

<div class="col-md-3 col-sm-12">
<button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Daftar Harga
                </button>
                <button type="button" class="list-group-item list-group-item-action">TV : 4.200.000</button>
                <button type="button" class="list-group-item list-group-item-action">Kulkas : 3.100.000</button>
                <button type="button" class="list-group-item list-group-item-action">Mesin Cuci : 3.800.000</button>

                <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                    Daftar Harga Dapat Berubah
                </button>
</div>
    </div>
    <hr>
    
    <?php if(isset($_POST["submit"])) : ?>
      <div class="col-5 ml-4">

      <p>Nama Customer : <?= $_POST["customer"] ?></p>
      <p>Produk Pilihan : <?= $_POST["produk"] ?></p>
      <p>Jumlah Beli : <?= $_POST["jumlah"] ?></p>
      <p>Total Belanja : <?= ($_POST["jumlah"]*$_POST["produk"]) ?></p>

      </div>
      
    <?php endif;?>


    
</body>
</html>