<div class="col-md-2 col-md-offset-1 col-sm-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th align="center">Judul</th>
				</tr>
			</thead>
			<tbody>
					<?php foreach ($artikel as $key => $value): ?>
				<tr>
					<td>
						<a href="detail.php?id=<?php echo $value['id_artikel']; ?>"><?php echo $value['judul']; ?></a>
					</td>
				</tr>
					<?php endforeach ?>
			</tbody>
		</table>
	<a href="createartikel.php"><button class="btn-primary  pull-right">tambah</button></a>
</div>
