<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['cart']))
    {
        if(isset($_SESSION['cart5']))
        {
            $myitem=array_column($_SESSION['cart5'],'item_name');
            if(in_array($_POST['item_name'],$myitem))
            {
                ?>
                <script>
                    alert("Item is already exist");
                    window.location.href="Addtocartandbuy.php";
                </script>
                <?php
            }
            else{
                $count=count($_SESSION['cart5']);
                $_SESSION['cart5'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],
                'quantity'=>1);
                ?>
                <script>
                    alert("Item name added");
                    window.location.href="Addtocartandbuy.php";
                </script>
                <?php
            }
        }
        else{
            $_SESSION['cart5'][0] =array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],
            'quantity'=>1);
            ?>
            <script>
                alert("Item name added ");
                window.location.href="Addtocartandbuy.php";
            </script>
            <?php
        }
    }

    if(isset($_POST['remove']))
    {
        foreach($_SESSION['cart5']as $key =>$value)
        {
            if($value['price']==$_POST['price'])
            {          
                unset($_SESSION['cart5'][$key]);
                $_SESSION['cart5']=array_values($_SESSION['cart5']);
                ?>
                <script>
                    alert("Item Removed");
                    window.location.href="Addtocartandbuy.php";
                </script>
                <?php
            }
        }
    }
    if(isset($_POST['quant']))
    {
   
      foreach($_SESSION['cart5']as $key =>$value)
     
        {
             if($value['price']==$_POST['price'])
            {
              $_SESSION['cart5'][$key]['quantity']=$_POST['quant'];
          
             ?>
              <script>
             
              window.location.href="Addtocartandbuy.php";
                </script>
              <?php
            }
       } 

    }

}
?>
