<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container mt-5 p-5">
        <form action="/kalkulator" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <input type="number" step="any" name="bil_1" class="form-control">
                </div>
                <div class="col-md-3">
                    <input type="number" step="any" name="bil_2" class="form-control">
                </div>
                <div class="col-md-3" >
                    <select name="operasi" class="form-control">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="kali">x</option>
                        <option value="bagi">:</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-info">Cari Hasil</button>
                </div>
            </div>
        </form>

        <div class="row mt-5">
            <div class="col-md-2">

            </div> 
            <div class="col-md-6">
                @if(session('info'))
                    <div class="alert alert-info">
                        {{ session('info') }}
                    </div>
                @endif
            </div>
            <div class="col-md-2">
            
            </div>
        </div>
    </div>
</body>
</html>