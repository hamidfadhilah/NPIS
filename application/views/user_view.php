            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">USER SISTEM INFORMASI FURNITURE</h4>
                                <p class="category">Mohon untuk merekap laporan Barang</p>
								<p align="right"><a href="<?php echo base_url()?>user/tambah/"><button class="btn btn-primary btn-sm">TAMBAH</button></a></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead align="center">
                                        <th>No</th>
                                    	<th>Username</th>
										<th>Password</th>
                                    	<th>Level</th>
										<th colspan="3">Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach($result as $row){?>
                                        <tr>
                                        	<td><?php echo $row->user_id;?></td>
                                        	<td><?php echo $row->username;?></td>
                                        	<td>***********</td>
                                        	<td><?php echo $row->level;?></td>
											<td><a href="<?php echo base_url()?>user/detail/<?php echo $row->user_id;?>"><button class="btn btn-info btn-sm">Detail</button></a></td>
											<td><a href="<?php echo base_url()?>user/edit/<?php echo $row->user_id;?>"><button class="btn btn-warning btn-sm" >Ubah</button></a></td>
											<td><a href="<?php echo base_url()?>user/delete/<?php echo $row->user_id;?>"><button class="btn btn-danger btn-sm " >Hapus</button></a></td>
                                        </tr>  
										<?php } ?>
                                    </tbody>
                                </table>
                                <center><?php echo $links;?></center>
                            </div>
                        </div>
                    </div>  
				</div>
            </div>