<!doctype html>
<!--Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode-->
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Pegawai List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Created At</th>
		<th>Created By</th>
		<th>Updated At</th>
		<th>Updated By</th>
		<th>Isactive</th>
		
            </tr><?php
            foreach ($pegawai_data as $pegawai)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $pegawai->nik ?></td>
		      <td><?php echo $pegawai->nama ?></td>
		      <td><?php echo $pegawai->created_at ?></td>
		      <td><?php echo $pegawai->created_by ?></td>
		      <td><?php echo $pegawai->updated_at ?></td>
		      <td><?php echo $pegawai->updated_by ?></td>
		      <td><?php echo $pegawai->isactive ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>