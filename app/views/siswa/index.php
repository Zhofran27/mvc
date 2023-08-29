<div class="container mt-4">
	
	<div class="row">
		<div class="col-6">
			<h3>Daftar Siswa</h3>

			<?php foreach ($data['sw'] as $sw); ?>
			<ul>
				<li><?= $sw['nama']; ?></li>
				<li><?= $sw['nis']; ?></li>
				<li><?= $sw['email']; ?></li>
			</ul>
		    <?php endforeach; ?>
		</div>
	</div>
</div>