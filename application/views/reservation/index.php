<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Reservation <strong> successfully</strong> <?= $this->session->flashdata('flash-data');?> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

   <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>reservation/tambah" class="btn btn-primary"> Add Reservation</a>
        </div>
    </div> 

    <div class="row mt-4">
        <div class="col-md-6">
        <form action="" method="post">
		<div class="input-group">
			<input type="text" class="form-control" placeholder="search for reservation" name="keyword">
		<div class="input-group-append">
		<button class="btn btn-primary" type="submit">search</button>
	</div>
</div>
		</form>
    </div>
</div>

    <div class="row mt-4">
        <div class="col-md-6">
            <h2>Reservation List</h2>

            <!-- alert -->
            <?php if(empty($reservation)):?>
                <div class="alert alert-danger" role="alert">
                    Reservation isn't found
                </div>
            <?php endif;?>
            
                <ul class="list-group">
                    <?php foreach($reservation as $rsr):?>
                        <li class="list-group-item">
                            <?= $rsr['name'];?>
                            <a href="<?= base_url();?>reservation/hapus/<?= $rsr['id'];?>"   
                            class="badge badge-danger float-right"
                            onclick="return confirm('Sure this data will be deleted?');">Delete</a>
                            <a href="<?= base_url()?>reservation/edit/<?= $rsr['id'];?>"
                            class="badge badge-success float-right">Edit</a>
                            <a href="<?= base_url()?>reservation/detail/<?= $rsr['id'];?>"
                            class="badge badge-primary float-right">Detail</a>
                        </li>
                    <?php endforeach?>
                </ul>
        </div>
    </div>
</div>

