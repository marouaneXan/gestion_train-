


<?php if(empty($booking)):?>
<div class="content">
    <div class="title" class="text-color-success">
        <h2 class="text-info">Mon panier est vide</h2>
    </div>
    <div class="image">
        <img src="../../../public/assest/images/basket.PNG" alt="">
    </div>
    <div class="button">
        <a href="<?php  url('booking'); ?>" class="btn btn-info">Book Now</a>
    </div>
</div>
<?php else:?>
<h1 class="text-center my-2 py-2">Your Bookings</h1>
<div class="container mt-5">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">
        <div class="table-responsive">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col" class="text-center">First name</th>
                    <th scope="col" class="text-center">Departure</th>
                    <th scope="col" class="text-center">Arrival</th>
                    <th scope="col" class="text-center">departure date</th>
                    <th scope="col" class="text-center">Train name</th>
                    <th scope="col" class="text-center">Price</th>
                    <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($booking as $row) :?>
                    <tr>
                        <td scope="col" class="text-center"><?php echo $row['nom'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['ville_depart'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['ville_arrivee'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['heure_depart'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['Nom_Train'];?></td>
                        <td scope="col" class="text-center"><?php echo $row['price'];?></td>
                        <td scope="col" class="text-center"><a type="button" class="btn btn-warning">Cancel</a></td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
            </div>
            </div>
    </div>
</div>
<?php endif?>




<style>
    .content{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 48px;
   }
   .title{
       margin-bottom: 18px;
   }
   .image{
    margin-bottom: 18px;
   }

</style>