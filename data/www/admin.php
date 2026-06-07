<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Upravljanje rezervacij</title>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'header.php'; ?>

<?php
include 'baza.php';

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->exec("DELETE FROM rezervacija WHERE id_rez = $id");
    echo "<script>window.location='admin.php'</script>";
}

// UPDATE
if (isset($_POST['uredi_id'])) {
    $id     = $_POST['uredi_id'];
    $status = $_POST['status'];
    $prihod = $_POST['datum_prihoda'];
    $odhod  = $_POST['datum_odhoda'];
    $oseb   = $_POST['stevilo_oseb'];
    $conn->exec("UPDATE rezervacija SET status='$status', datum_prihoda='$prihod', datum_odhoda='$odhod', stevilo_oseb='$oseb' WHERE id_rez=$id");
    echo "<script>window.location='admin.php'</script>";
}

// SELECT
$rezervacije = $conn->query("
    SELECT r.id_rez, g.ime, g.priimek, g.email, s.naziv,
           r.datum_prihoda, r.datum_odhoda, r.stevilo_oseb, r.status
    FROM rezervacija r
    JOIN gost g ON r.gost_id = g.id_gost
    JOIN soba s ON r.soba_id = s.id_soba
    ORDER BY r.datum_prihoda ASC
")->fetchAll(PDO::FETCH_ASSOC);

$uredi_id = isset($_GET['uredi']) ? (int)$_GET['uredi'] : null;
?>

<div class="container-fluid text-center my-5">
    <h1 class="mb-4 pt-5 col-9 mx-auto domacinaslov">Upravljanje rezervacij</h1>
    <p class="col-9 mx-auto">Pregled, urejanje in brisanje vseh rezervacij.</p>
    <hr class="col-9 mx-auto mt-4 mb-5">

    <div class="col-11 mx-auto">
    <table class="admin-tabela w-100">
        <thead>
            <tr>
                <th>#</th>
                <th>Gost</th>
                <th>Email</th>
                <th>Soba</th>
                <th>Prihod</th>
                <th>Odhod</th>
                <th>Oseb</th>
                <th>Status</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($rezervacije as $r): ?>

            <?php if ($uredi_id === (int)$r['id_rez']): ?>
            <!-- VRSTICA ZA UREJANJE -->
            <tr class="vrstica-uredi">
                <form method="POST">
                <input type="hidden" name="uredi_id" value="<?= $r['id_rez'] ?>">
                <td><?= $r['id_rez'] ?></td>
                <td><?= $r['ime'] . ' ' . $r['priimek'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['naziv'] ?></td>
                <td><input type="date" name="datum_prihoda" value="<?= $r['datum_prihoda'] ?>"></td>
                <td><input type="date" name="datum_odhoda" value="<?= $r['datum_odhoda'] ?>"></td>
                <td><input type="number" name="stevilo_oseb" value="<?= $r['stevilo_oseb'] ?>" min="1" max="4"></td>
                <td>
                    <select name="status">
                        <option value="cakajoca"   <?= $r['status']=='cakajoca'   ? 'selected':'' ?>>čakajoča</option>
                        <option value="potrjena"   <?= $r['status']=='potrjena'   ? 'selected':'' ?>>potrjena</option>
                        <option value="preklicana" <?= $r['status']=='preklicana' ? 'selected':'' ?>>preklicana</option>
                        <option value="zakljucena" <?= $r['status']=='zakljucena' ? 'selected':'' ?>>zaključena</option>
                    </select>
                </td>
                <td><button type="submit" class="btn-admin btn-shrani">Shrani</button></td>
                </form>
            </tr>

            <?php else: ?>
            <!-- NORMALNA VRSTICA -->
            <tr>
                <td><?= $r['id_rez'] ?></td>
                <td><?= $r['ime'] . ' ' . $r['priimek'] ?></td>
                <td><?= $r['email'] ?></td>
                <td><?= $r['naziv'] ?></td>
                <td><?= $r['datum_prihoda'] ?></td>
                <td><?= $r['datum_odhoda'] ?></td>
                <td><?= $r['stevilo_oseb'] ?></td>
                <td><span class="status-<?= $r['status'] ?>"><?= $r['status'] ?></span></td>
                <td>
                    <a href="?uredi=<?= $r['id_rez'] ?>" class="btn-admin btn-uredi">Uredi</a>
                    <a href="?delete=<?= $r['id_rez'] ?>" class="btn-admin btn-brisi"
                       onclick="return confirm('Izbriši rezervacijo?')">Briši</a>
                </td>
            </tr>
            <?php endif; ?>

        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>