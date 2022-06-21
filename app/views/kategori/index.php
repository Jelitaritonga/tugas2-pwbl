<h3>Kategori Produk</h3>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KETERANGAN</th>
      </tr>
      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['kat_id']; ?></td>
                  <td><?php echo $row['kat_nama']; ?></td>
                  <td><?php echo $row['kat_keterangan']; ?></td>
            </tr>
      <?php } ?>
</table>