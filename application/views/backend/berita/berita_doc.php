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
        <h2>Berita List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Judul</th>
		<th>Isi</th>
		<th>Deskripsi</th>
		<th>Img</th>
		<th>Created At</th>
		<th>Created By</th>
		<th>Updated At</th>
		<th>Updated By</th>
		<th>Isactive</th>
		<th>Add 1</th>
		<th>Add 2</th>
		<th>Note</th>
		
            </tr><?php
            foreach ($berita_data as $berita)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $berita->judul ?></td>
		      <td><?php echo $berita->isi ?></td>
		      <td><?php echo $berita->deskripsi ?></td>
		      <td><?php echo $berita->img ?></td>
		      <td><?php echo $berita->created_at ?></td>
		      <td><?php echo $berita->created_by ?></td>
		      <td><?php echo $berita->updated_at ?></td>
		      <td><?php echo $berita->updated_by ?></td>
		      <td><?php echo $berita->isactive ?></td>
		      <td><?php echo $berita->add_1 ?></td>
		      <td><?php echo $berita->add_2 ?></td>
		      <td><?php echo $berita->note ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>