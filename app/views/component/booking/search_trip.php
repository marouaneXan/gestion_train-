


<h1 class="text-center my-2 py-2">Travels available</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
            <table class="table z">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col" class="text-center">Departure</th>
                    <th scope="col" class="text-center">Arrival</th>
                    <th scope="col" class="text-center">departure date</th>
                    <th scope="col" class="text-center">Train name</th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Statut</th>
                    <th scope="col" class="text-center">Book</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($result as $row):?>
                            <tr>
                                <td class="text-center"><?php echo $row['ville_depart']; ?></td>
                                <td class="text-center"><?php echo $row['ville_arrivee']; ?></td>
                                <td class="text-center"><?php echo $row['heure_depart']; ?></td>
                                <td class="text-center"><?php echo $row['nom'];?></td>
                                <td class="text-center"><?php echo $row['price'];?></td>
                                <td class="text-center">
                                    <?php if($row['statut']==1):?>
                                        <span class="badge badge-success">Active</span>
                                    <?php else:?>
                                        <span class="badge badge-danger">Hors service</span>
                                    <?php endif;?>
                                </td>
                                <td class="text-center">
                                    <?php if($row['statut']==1):?>
                                        <a href="<?php url('booking/book_now/'.$row['id']); ?>" class="btn btn-info" >BOOK NOW</a>
                                    <?php else:?>
                                        <button disabled class="btn btn-info" >BOOK NOW</button>
                                    <?php endif;?>
                                </td>
                            </tr>
                     <?php  endforeach; ?>
                </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav> -->
        </div>
    </div>
</div>