<?php 
include('top.php');
$coupon_code="";
$coupon_type="";
$coupon_value="";
$cart_min_value="";
$expired_on="";
$added_on="";
$id="";
$msg=" ";

if(isset($_GET['id']) && $_GET['id']>0)
  {
    $id= get_safe_value($_GET['id']);
    $row=mysqli_fetch_assoc(mysqli_query($con,"select * from coupon_code where id='$id'")) ;
    $coupon_code=$row['coupon_code'];
    $coupon_type=$row['coupon_type'];
    $coupon_value=$row['coupon_value'];
    $cart_min_value=$row['cart_min_value'];
    $expired_on=$row['expired_on'];
  }


if(isset($_POST['submit']))
{
  $coupon_code=get_safe_value($_POST['coupon_code']);
  $coupon_type=get_safe_value($_POST['coupon_type']);
  $coupon_value=get_safe_value($_POST['coupon_value']);
  $cart_min_value=get_safe_value($_POST['cart_min_value']);
  $expired_on=get_safe_value($_POST['expired_on']);
  $added_on=date('y-m-d h:i:s');


    if($id=='')
    {
      $sql="select * from coupon_code where coupon_code='$coupon_code'";
    }
    else
    {
      $sql="select * from coupon_code where coupon_code='$coupon_code' and id!='$id'";
    }
      
      if(mysqli_num_rows(mysqli_query($con,$sql))>0)
      {
        $msg="Coupon Code already added";
      }
      else
      {
        if($id=='')
        {
        mysqli_query($con,"insert into coupon_code(coupon_code,coupon_type,coupon_value,cart_min_value,expired_on,status,added_on) 
        values('$coupon_code','$coupon_type','$coupon_value','$cart_min_value','$expired_on',1,'$added_on')");
        
        }
        else
        {
          mysqli_query($con,"update coupon_code set coupon_code='$coupon_code',coupon_type='$coupon_type',
          coupon_value='$coupon_value', cart_min_value=' $cart_min_value',expired_on='$expired_on' where id='$id'");
        }
        redirect('coupon_code.php');
      }

  }
  
?>
    <div class="row">
			<h1 class="grid_title ml10 ml15">Manage Coupon Code</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" method="post">
                  <form class="forms-sample">
                    <div class="form-group">
                      <label for="exampleInputName1">Coupon Code</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Coupon Code" name="coupon_code" required value="<?php echo $coupon_code?>">
                      <div class="error mt8"><?php echo $msg?></div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Coupon Type</label>
                      <select name="coupon_type" required class="form-control">
                        <option value="">Select Type</option>
                        <?php
                        $arr=array('p'=>'Percentage','f'=>'Fixed');
                        foreach($arr as $key=>$val)
                        {
                          if($key == $coupon_type)
                          {
                          echo "<option value='".$key."' selected >".$val."</option>";
                          }
                          else
                          {
                            echo "<option value='".$key."'>".$val."</option>";
                          }
                        }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Coupon Value</label>
                      <input type="textbox" class="form-control" id="exampleInputEmail3" placeholder="Coupon Value" name="coupon_value" required value="<?php echo $coupon_value?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Cart Min Value</label>
                      <input type="textbox" class="form-control" id="exampleInputEmail3" placeholder="Cart Min Value" name="cart_min_value" required value="<?php echo $cart_min_value?>" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Expired On</label>
                      <input type="date" class="form-control" id="exampleInputEmail3" placeholder="Expired On" name="expired_on" required value="<?php echo $expired_on?>" >
                    </div>
                  
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                   
                  </form>
                </div>
              </div>
            </div>
            
		 </div>
        
        
<?php include('footer.php');?>