<?php
function tgl_indo($tanggal)
{
    if (isset($tanggal)) {
        $bulan = array(
            1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $pecahkan = explode('-', substr($tanggal, 0, 10));
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }
}

function tgljam_indo($tanggal)
{
    if (isset($tanggal)) {
        $bulan = array(
            1 =>   'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        $pecahkan = explode('-', substr($tanggal, 0, 10));
        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0] . ' jam ' . (substr($tanggal, 11, 8)) . ' WIB';
    }
}

function huruf($angka)
{
    $hur = array(
        0 =>   'Nol', 'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan'
    );
    return $hur[$angka];
}

function namadosen($conn, $nip)
{
    require('../config.php');
    $qdosen = mysqli_query($conn, "SELECT * FROM pengguna WHERE nip='$nip'");
    $ddosen = mysqli_fetch_array($qdosen);
    $nama = $ddosen['nama'];
    return $nama;
}

function caripejabat($conn, $nip)
{
    require('../config.php');
    $qdosen = mysqli_query($conn, "SELECT * FROM pejabat WHERE nip='$nip'");
    $ddosen = mysqli_fetch_array($qdosen);
    $nama = $ddosen['nama'];
    return $nama;
}

function nipdosen($conn, $iduser)
{
    require('../config.php');
    $qdosen = mysqli_query($conn, "SELECT * FROM pengguna WHERE user='$iduser'");
    $ddosen = mysqli_fetch_array($qdosen);
    $nip = $ddosen['nip'];
    return $nip;
}

function semester($tanggal)
{
    $pecahkan = explode('-', $tanggal);
    if ($pecahkan[1] < 7) {
        return "Genap Tahun Akademik " . $pecahkan[0] . "/" . $pecahkan[0];
    } else {
        return "Ganjil Tahun Akademik " . $pecahkan[0] . "/" . $pecahkan[0];
    }
}

function multibaris($pesan)
{
    str_replace(["\r\n", "\r", "\n"], "<br/>", $pesan);
    return $pesan;
}

?>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>

<!-- cari dosen -->
<script src="../system/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.search-box input[type="text"]').on("keyup input", function() {
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if (inputVal.length) {
                $.get("cari-proses.php", {
                    term: inputVal
                }).done(function(data) {
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else {
                resultDropdown.empty();
            }
        });
        // Set search input value on click of result item
        $(document).on("click", ".result p", function() {
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
</script>

<?php
function hp($nohp)
{
    /*
    $nohp = str_replace(" ", "", $nohp);
    $nohp = str_replace("(", "", $nohp);
    $nohp = str_replace(")", "", $nohp);
    $nohp = str_replace(".", "", $nohp);
    $nohp = str_replace("-", "", $nohp);
    */
    if (substr($nohp, 0, 1) == '0') {
        $hp = '62' . substr($nohp, 1);
    }
    /*
    if (!preg_match('/[^+0-9]/', trim($nohp))) {
        if (substr(trim($nohp), 0, 2) == '+6') {
            $hp = substr(trim($nohp), 1);
        } elseif (substr(trim($nohp), 0, 1) == '0') {
            $hp = '62' . substr(trim($nohp), 1);
        } elseif (substr(trim($nohp), 0, 1) == '6') {
            $hp = trim($nohp);
        }
    }
    */
    return $hp;
}
