<h1 class="text-center p-3"><?php echo $title;?> </h1>
<div class="container">
<a href="<?php url('home');?>" class="btn btn-sm btn-dark mb-2"><i class="fa-solid fa-house"></i></a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center">First name</th>
                        <th scope="col" class="text-center">Last name</th>
                        <th scope="col" class="text-center">Age</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $row):?>
                        <tr>
                            <td scope="col" class="text-center"><?php echo $row['nom'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['prenom'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['date_naissance'];?></td>
                            <td scope="col" class="text-center"><?php echo $row['email'];?></td>
                            <td scope="col" class="text-center">
                                <a href="<?php url('users/deleteUser/'.$row['id']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
</div>