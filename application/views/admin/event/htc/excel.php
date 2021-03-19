<?php 
    header("Content-type:application/octet-stream/");
    header("Content-Disposition:attachment; filename=$title.xls");

    header("Pragma: no-cache");
    header("Expires: 0");
?>

<table>
    <thead>
        <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Studi</th>
        <th>Email</th>
        <th>No. Handphone</th>
        <th>Alamat</th>
        <th>Kehadiran</th>
        <th>Bersedia Swab</th>
        <th>Date Created</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1; foreach ($htc as $field) : ?>
            <tr>
                <td><?= $i++; ?></td> 
                <td><?= $field['nama']; ?></td>
                <td><?= $field['nim']; ?></td>
                <td><?= $field['prodi']; ?></td>
                <td><?= $field['email']; ?></td>
                <td><?= $field['phone']; ?></td>
                <td><?= $field['alamat']; ?></td>
                <td><?= $field['kehadiran']; ?></td>
                <td><?= $field['swab']; ?></td>
                <td><?= date('d F Y, h:i:s A', $field['date_created']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>