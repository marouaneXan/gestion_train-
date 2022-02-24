



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
                    <th scope="col" class="text-center">Book</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($result as $row):  ?>
                            <tr>
                                <td class="text-center"><?php echo $row['ville_depart']; ?></td>
                                <td class="text-center"><?php echo $row['ville_arrivee']; ?></td>
                                <td class="text-center"><?php echo $row['heure_depart']; ?></td>
                                <td class="text-center"><?php echo $row['id_train'];?></td>
                                <td class="text-center">
                                    <a href="" class="btn btn-info" >BOOK NOW</a>
                                </td>
                            </tr>
                    <?php  endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>
</div>