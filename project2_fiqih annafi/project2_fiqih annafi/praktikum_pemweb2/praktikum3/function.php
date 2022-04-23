<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Nilai Siswa</title>
  </head>
  <body>
    
    <div class="container mt-5 mx-auto ">
    <h2>Form Nilai Siswa</h2>
            <form class="border bordered p-3" method="get" action="">
        <div class="form-group row">
            <label for="nama" class="col-md-4 col-sm-12 col-form-label">Nama Lengkap</label> 
            <div class="col-md-8 col-sm-6">
            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-md-4 col-sm-12 col-form-label">Mata Kuliah</label> 
            <div class="col-md-8 col-sm-6">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="Bahasa inggris">Bahasa inggris</option>
                <option value="Jaringan Komputer">Jaringan Komputer</option>
                <option value="UI/UX">UI/UX</option>
                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="PPKN">PPKN</option>
                <option value="Komunikasi Efektif">Komunikasi Efektif</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="uts" class="col-md-4 col-sm-12 col-form-label">Nilai UTS</label> 
            <div class="col-md-8 col-sm-6">
            <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="uas" class="col-md-4 col-sm-12 col-form-label">Nilai UAS</label> 
            <div class="col-md-8 col-sm-6">
            <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="praktik" class="col-md-4 col-sm-12 col-form-label">Nilai Praktik</label> 
            <div class="col-md-8 col-sm-6">
            <input id="praktik" name="praktik" placeholder="Nilai Praktikum" type="number" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <!-- logika -->

   
    <?php  if(isset($_GET["submit"]) ) :?> 
    <?php  
    $nilai = ((integer)$_GET["uts"] + (integer)$_GET["uas"] + (integer)$_GET["praktik"])/3;
    
    if($nilai <= 35 ){
        $nilai = "E";
    }elseif($nilai <= 55 ){
        $nilai ="D";
    }elseif($nilai <= 69 ){
        $nilai ="C";
    }elseif($nilai <= 84 ){
        $nilai ="B";
    }elseif($nilai <= 100){
        $nilai ="A";
    }else{
        $nilai = "I";
    }

    switch($nilai){
        case "E":
            $predikat = "Sangat Kurang ";
            break;
        case "D":
            $predikat = "Kurang";
            break;
        case "C":
            $predikat = "Cukup";
            break;
        case "B":
            $predikat = "Memuaskan ";
            break;
        case "A":
            $predikat = "Sangat Memuakan ";
            break;
        case "I":
            $predikat = "Tidak Ada";
            break;
    }
    ?>
    <?php  endif;?>




    
<?php  if(isset($_GET["submit"]) ) :?>


    <div class="container mt-5 mx-auto ">
    <div class="row my-5 mx-auto text center">
        <div class="col-md-8 col-sm-12  mx-auto" >
        <table class="table text-center border bordered">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Grade</th>
                <th scope="col">Predikat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row"><?= $_GET["nama"] ?></th>
                <td><?= $_GET["matkul"] ?></td>
                <td><?= $nilai ?></td>
                <td><?= $predikat ?></td>
                
                </tr>
                
            </tbody>
            </table>
        </div>


    </div>
</div>

    <?php endif; ?>
    

    

  </body>
</html>