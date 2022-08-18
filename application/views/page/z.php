<thead>
    <tr>
        <th>No Ranking</th>
        <th>Kode Product</th>
        <th>Hasil Ranking</th>
    </tr>
</thead>
<tbody>
    <?php
    $ranking = $this->M_page->kd_product()->result();
    $no = 1;
    foreach ($ranking as $data) {
    ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data->kode_product ?></td>
            <td><?= $data->tampung_ranking ?></td>
        </tr>
    <?php
    } ?>
</tbody>