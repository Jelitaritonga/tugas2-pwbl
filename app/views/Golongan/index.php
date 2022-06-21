<h2 class="mt-3">  
    Daftar Golongan
    <a href="<?php echo URL; ?>/golongan/create" class ="btn btn-primary"></a>
</h2>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>NO</th>
        <th>KODE</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    </thead> 
    <tbody>
        <?php foreach ($data['rows'] as $row) { ?>
           <tr> 
         <td><?php echo $row['gol_id']; ?></</td>
        <td><?php echo $row['gol_kode']; ?></td>
         <td><?php echo $row['gol_nama']; ?></td>
         <td></td>
         <td></td>

    </tr>
    <?php  } ?>   
    </tbody>
</table>