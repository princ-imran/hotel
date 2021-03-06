<?php
session_start();
include_once '../include/header.php';
include_once '../../../vendor/autoload.php';
$admin = new App\admin\auth\Auth();
$admins = $admin->index();
?>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                BASIC EXAMPLE
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">                 <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Image</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sl = 1;
                            foreach ($admins as $admin){
                        ?>
                        <tr>
                            <td><?= $admin['id']?></td>
                            <td><?= $admin['username']?></td>
                            <td><?= $admin['email']?></td>
                            <td><img src="models/admin/images/<?= $admin['image']?>" alt="" style="height: 80px; width: 100%;"></td>
                            <td class="text-center">                                

                            <a href="" class="btn btn-success">view</a>

                            <a href="" class="btn btn-warning">Edit</a>

                            <a data-toggle="modal" data-target="#myModal" data-id="" class="btn btn-danger delete" href="javaScript:void(0)" >Delete</a>
                        </td>
                        </tr 
                        <?php } ?>                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #END# Basic Examples -->
<?php
include_once '../include/footer.php'
?>