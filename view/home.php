<?php include 'inc/header.php'; ?>

<table class="tblone">
        <tr>
            <th>no</th>
            <th>Name</th>
            <th>Department</th>
            <th>Age</th>
           
        </tr>

        <?php   
        $i=0;
        
        foreach($user as $key=>$value){
            $i++;

        
        
        ?>
        <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['dep'];?></td>
            <td><?php echo $value['age'];?></td>
           
        </tr>

        <?php }?>
        <!-- <tr>
            <td>01</td>
            <td>Delowar Jahan</td>
            <td>Physics</td>
            <td>25</td>
            <td>
                <a href="">Edit</a>||
                <a href="">Delete</a>
            </td>
        </tr>
        <tr>
            <td>01</td>
            <td>Kamrul Hasan</td>
            <td>EEE</td>
            <td>25</td>
            <td>
                <a href="">Edit</a>||
                <a href="">Delete</a>
            </td>
        </tr> -->

    </table>







<?php include 'inc/footer.php'; ?>