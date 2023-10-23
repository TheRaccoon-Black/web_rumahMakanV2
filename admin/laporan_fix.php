<?php 
session_start();
include "header.php"; 
?>
<style type="text/css">
    tr{
        background-color: aliceblue;
        color: black;
    }
    tr:hover{
        background-color: lightgreen;
        color: black;
    }
</style>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto;">
<center> <p style="font-size: 2.4em; color: red">Lihat semua laporan disini</p> </center> 
    <div style="width: 90%; padding: 20px; text-align: right;">
    <br>
    <div>
        <?php 
        include "connect.php";
        $s = mysqli_query($con,"SELECT *, tambah_keranjang.harga, tambah_keranjang.tanggal, tambah_keranjang.bulan, tambah_keranjang.tahun 
                                FROM checkout 
                                INNER JOIN tambah_keranjang ON checkout.p_id = tambah_keranjang.p_id");
// untuk mengambil semua kolom dari tabel checkout dan harga,tanggal,bulan tahun dari tambah keranjang yang di gabungkan dengan p_id
        // Tabel Checkout
        ?>
        <h2>Data Checkout</h2>
        <table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>ID produk</th>
                <th>Harga</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
            </tr>

            <?php
            $row_number = 1;

            while($r = mysqli_fetch_array($s)) {
            ?>
                <tr>
                    <td><?php echo $row_number; ?></td>
                    <td><?php echo $r['u_id']; ?></td>
                    <td><?php echo $r['p_id']; ?></td>
                    <td><?php echo $r['harga']; ?></td>
                    <td><?php echo $r['hp']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['lokasi']; ?></td>
                    <td><?php echo $r['tanggal']; ?></td>
                    <td><?php echo $r['bulan']; ?></td>
                    <td><?php echo $r['tahun']; ?></td>
                </tr>
            <?php
                $row_number++; 
            }
            ?>
        </table>

        <br>
        <hr>

       
</table>
<h2>Rekap Tahunan</h2>
</center> 

<div style="width: 90%; padding: 20px; text-align: right;">
    <br>
    <div>
        <?php 
        include "connect.php";
        $s = mysqli_query($con,"SELECT *, tambah_keranjang.harga, tambah_keranjang.tanggal, tambah_keranjang.bulan, tambah_keranjang.tahun FROM checkout 
            INNER JOIN tambah_keranjang ON checkout.p_id = tambah_keranjang.p_id
            ORDER BY tambah_keranjang.tahun ASC, tambah_keranjang.bulan ASC");

        $year = '';
        $month = '';
        $total = 0;
        ?>

        <table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>ID Produk</th>
                <th>Harga</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
            </tr>

            <?php
            $row_number = 1;

            while($r = mysqli_fetch_array($s)) {
                // jika bulan dan tahun berbeda, maka tampilkan total transaksi bulan dan tahun sebelumnya dan reset total transaksi ke 0
                if ($r['bulan'] !== $month || $r['tahun'] !== $year) {
                    if (!empty($month)) {
                        echo '<tr><td colspan="10">Total Transaksi Bulan '.$month.' Tahun '.$year.': Rp '.number_format($total).'</td></tr>';
                        $total = 0;
                    }

                    $month = $r['bulan'];
                    $year = $r['tahun'];
                }

                $total += $r['harga'];
            ?>
                <tr>
                    <td><?php echo $row_number; ?></td>
                    <td><?php echo $r['u_id']; ?></td>
                    <td><?php echo $r['p_id']; ?></td>
                    <td><?php echo $r['harga']; ?></td>
                    <td><?php echo $r['hp']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                    <td><?php echo $r['lokasi']; ?></td>
                    <td><?php echo $r['tanggal']; ?></td>
                    <td><?php echo $r['bulan']; ?></td>
                    <td><?php echo $r['tahun']; ?></td>
                </tr>
            <?php
                $row_number++; 
            }

            // tampilkan total transaksi untuk bulan dan tahun terakhir
            if (!empty($month) && !empty($year)) {
                echo '<tr><td colspan="10">Total Transaksi Bulan '.$month.' Tahun '.$year.': Rp '.number_format($total).'</td></tr>';
            }
            ?>
        </table>  
    </div>
</div>
<h2>Rekap Mingguan</h2>
<center>
<div style="width: 90%; padding: 20px; text-align: right;">
<br>
<div>
<?php 
include "connect.php";
$s = mysqli_query($con,"SELECT *, tambah_keranjang.harga, tambah_keranjang.tanggal, tambah_keranjang.bulan, tambah_keranjang.tahun FROM checkout 
INNER JOIN tambah_keranjang ON checkout.p_id = tambah_keranjang.p_id
ORDER BY tambah_keranjang.tahun ASC, tambah_keranjang.bulan ASC, tambah_keranjang.tanggal ASC");

$week = '';
$total = 0;
?>

<table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>ID Produk</th>
    <th>Harga</th>
    <th>Nomor HP</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Tanggal</th>
    <th>Bulan</th>
    <th>Tahun</th>
    <th>Total Transaksi Minggu Ini</th>
</tr>

<?php
$row_number = 1;

while($r = mysqli_fetch_array($s)) {
    // mendapatkan minggu ke berapa pada tanggal transaksi tersebut
    $date = strtotime($r['tahun'] . "-" . $r['bulan'] . "-" . $r['tanggal']);
    $week_number = date("W", $date);
    
    // jika minggu berbeda, maka tampilkan total transaksi minggu sebelumnya dan reset total transaksi ke 0
    if ($week_number !== $week) {
        if (!empty($week)) {
            echo '<tr><td colspan="11">Total Transaksi Minggu '.$week.': Rp '.number_format($total).'</td></tr>';
            $total = 0;
        }

        $week = $week_number;
    }

    $total += $r['harga'];
?>
    <tr>
        <td><?php echo $row_number; ?></td>
        <td><?php echo $r['u_id']; ?></td>
        <td><?php echo $r['p_id']; ?></td>
        <td><?php echo $r['harga']; ?></td>
        <td><?php echo $r['hp']; ?></td>
        <td><?php echo $r['email']; ?></td>
        <td><?php echo $r['lokasi']; ?></td>
        <td><?php echo $r['tanggal']; ?></td>
        <td><?php echo $r['bulan']; ?></td>
        <td><?php echo $r['tahun']; ?></td>
        <td><?php echo number_format($total); ?></td>
    </tr>
<?php
    $row_number++; 
}

// tampilkan total transaksi untuk minggu terakhir
if (!empty($week)) {
    echo '<tr><td colspan="11">Total Transaksi Minggu '.$week.': Rp '.number_format($total).'</td></tr>';
}
?>
</table>  
</div>
</div>
</center>

        <h2>Bulanan</h2>
    </center> 

    <div style="width: 90%; padding: 20px; text-align: right;">
        <br>
        <div>
            <?php 
            include "connect.php";
            $s = mysqli_query($con,"SELECT *, tambah_keranjang.harga, tambah_keranjang.tanggal,tambah_keranjang.total, tambah_keranjang.bulan, tambah_keranjang.tahun FROM checkout 
                INNER JOIN tambah_keranjang ON checkout.p_id = tambah_keranjang.p_id
                ORDER BY tambah_keranjang.tahun ASC");

            $year = '';
            $total = 0;
            ?>

            <table border=1 width="80%" align="center" cellpadding="8" cellspacing="10" style="color: black">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>ID Produk</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Nomor HP</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                </tr>

                <?php
                $row_number = 1;

                while($r = mysqli_fetch_array($s)) {
                    // jika tahun berbeda, maka tampilkan total transaksi tahun sebelumnya dan reset total transaksi ke 0
                    if ($r['tahun'] !== $year) {
                        if (!empty($year)) {
                            echo '<tr><td colspan="10">Total Transaksi Tahun '.$year.': Rp '.number_format($total).'</td></tr>';
                            $total = 0;
                        }

                        $year = $r['tahun'];
                    }

                    $total += $r['harga'];
                ?>
                    <tr>
                        <td><?php echo $row_number; ?></td>
                        <td><?php echo $r['u_id']; ?></td>
                        <td><?php echo $r['p_id']; ?></td>
                        <td><?php echo $r['harga']; ?></td>
                        <td><?php echo $r['total']; ?></td>
                        <td><?php echo $r['hp']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo $r['lokasi']; ?></td>
                        <td><?php echo $r['tanggal']; ?></td>
                        <td><?php echo $r['bulan']; ?></td>
                        <td><?php echo $r['tahun']; ?></td>
                    </tr>
                <?php
                    $row_number++; 
                }

                // tampilkan total transaksi untuk tahun terakhir
                if (!empty($year)) {
                    echo '<tr><td colspan="10">Total Transaksi Tahun '.$year.': Rp '.number_format($total).'</td></tr>';
                }
                ?>
            </table>  
    </div>
</div>
</div>
<?php include "footer.php"; ?>
</div> 
</body> 
</html>