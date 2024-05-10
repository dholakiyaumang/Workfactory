<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {   
            $myitems=array_column($_SESSION['cart'],'Item_id');
            if(in_array($_POST['Item_id'],$myitems))
            {
                echo"<script>alert('Already Added To Cart! Check It Out!'); 
                window.location.href='cart.php';
                </script>";
            }else{
            $count= count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('Item_id'=>$_POST['Item_id'],'Item_name'=>$_POST['Item_name'],'Fees'=>$_POST['Fees'],'quantity'=>$_POST['quantity'],'Item_img'=>$_POST['Item_img']);
            echo"<script>alert('Successfully Added To Cart!'); 
            window.location.href='cart.php';
            </script>";
            // print_r($_SESSION['cart']);
            }
        } 
        else
        {
            $_SESSION['cart'][0]=array('Item_id'=>$_POST['Item_id'],'Item_name'=>$_POST['Item_name'],'Fees'=>$_POST['Fees'],'quantity'=>$_POST['quantity'],'Item_img'=>$_POST['Item_img']);
            echo"<script>alert('Successfully Added To Cart!'); 
            window.location.href='cart.php';
            </script>";
            // print_r($_SESSION['cart']);
        }

    }

    if(isset($_POST['Remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Item_name']==$_POST['Item_name'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>alert('Removed Successfully!'); 
            window.location.href='cart.php';
            </script>";
            }
        }
    }
    if(isset($_POST['checkout']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            // if($value['Item_name']==$_POST['Item_name'])
            // {
            unset($_SESSION['cart'][$key]);
            echo"<script>
            alert('Booked Successfully!'); 
            window.location.href='index.php';
            </script>";
            // }
        }
    }

}


?>