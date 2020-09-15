<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Kalkulator</title>
</head>
<body>
    <div class="container mt-5 mb-5">
        <h1>Kalkulator Rumus</h1>
    </div>

    <!-- Rumus Volume Tabung -->
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h4 class="mb-3">Tabung</h4>
                    <form action="/hitungtabung" method="POST">
                            @csrf
                                <div class="form-group">
                                    <input type="number" step="any" name="total_luas" class="form-control" placeholder="Luas Alas">
                                </div>
                                <div class="form-group">
                                    <input type="number" step="any" name="tinggi" class="form-control" placeholder="Tinggi">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Cari Hasil</button>
                                </div>
                    </form>
                    @if(session('info'))
                        <div class="alert alert-info">
                            {{ session('info') }}
                        </div>
                    @endif
            </div>
            <div class="col-4">
                    <h4 class="mb-3">Bola</h4>
                    <form action="/hitungbola" method="POST">
                        @csrf
                            <div class="form-group">
                                <input type="number" step="any" name="empatpertiga" class="form-control" placeholder="4/3" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <input type="number" step="any" name="ro" class="form-control" placeholder="22/7" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <input type="number" step="any" name="jari_jari" class="form-control" placeholder="jari jari (auto r^3)">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Cari Hasil</button>
                            </div>
                    </form>
                    @if(session('info_hasil_volume_bola'))
                        <div class="alert alert-info">
                            {{ session('info_hasil_volume_bola') }}
                        </div>
                    @endif
            </div>
            <div class="col-4">
                <h4 class="mb-3">Bola</h4>
                <form action="/hitungkerucut" method="POST">
                    @csrf
                        <div class="form-group">
                            <input type="number" step="any" name="satupertiga" class="form-control" placeholder="1/3" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <input type="number" step="any" name="ro" class="form-control" placeholder="22/7" readonly="readonly">
                        </div>
                        <div class="form-group">
                            <input type="number" step="any" name="jari_jari" class="form-control" placeholder="jari jari (auto r^2)">
                        </div>
                        <div class="form-group">
                            <input type="number" step="any" name="tinggi" class="form-control" placeholder="Tinggi">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cari Hasil</button>
                        </div>
                </form>
                @if(session('hasil_volume_kerucut'))
                    <div class="alert alert-info">
                        {{ session('hasil_volume_kerucut') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
