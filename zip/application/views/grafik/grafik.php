<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Chart Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #7430f9;">
        <div class="container">
            <a class="navbar-brand" href="#">Hengky</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('buku'); ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('buku/upload'); ?>">Upload</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url('grafik'); ?>">Grafik</a>
                    </li>
                </ul>
                <a href="<?= base_url('login/logout'); ?>" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 style="text-align: center;">Chart Buku</h1>
        <canvas id="myChart"></canvas>
        <?php
        $nama_buku = "";
        $jumlah = null;
        foreach ($hasil as $item) {
            $jen = $item->jenbuku;
            $nama_buku .= "'$jen'" . ", ";
            $jum = $item->total;
            $jumlah .= "$jum" . ", ";
        }
        ?>
    </div>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?= $nama_buku; ?>],
                datasets: [{
                    label: 'Data Jenis Buku ',
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgba(56, 86, 255, 0.87)',
                        'rgb(60, 179, 113)',
                        'rgb(175, 238, 239)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                    ],
                    data: [<?= $jumlah; ?>]
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>