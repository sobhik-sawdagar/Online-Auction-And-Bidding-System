<div class="content_area" style="overflow:scroll">


    <?php
    if (isset($_GET['p_id'])) {
        $p_id = $_GET['p_id'];
        $get_products = "SELECT *, MAX(bid_amount) FROM products,bids WHERE products.product_id=bids.p_id AND product_id = '$p_id'";
        $run_products = mysqli_query($conn, $get_products);

        while ($row_pro = mysqli_fetch_array($run_products)) {

            $pro_id = $row_pro['product_id'];
            $pro_name = $row_pro['product_name'];
            $pro_cat = $row_pro['product_cat'];
            $pro_price = $row_pro['product_price'];
            $pro_image = $row_pro['product_image'];
            $pro_desc = $row_pro['product_desc'];
            $pro_date = $row_pro['end_date'];
            $auc_date = $row_pro['auction_date'];
            $max_bid = $row_pro['MAX(bid_amount)'];

            echo " <div style='padding-top:10px';>


    <img src='Admin/Images/$pro_image' width='400px' height = '300px' style='border:1px solid black;margin-left:250px;'/>
    <img src='Admin/misc/logo4.png' alt='' id='l1'>
    <p style= 'padding: 5px'><b>1.&nbspProduct Name :</b>&nbsp;$pro_name </p>
    
    <p style= 'padding: 5px'><b>2.&nbspProduct Category :</b>&nbsp; $pro_cat </p>
    
    <p style= 'padding: 5px'><b>3.&nbspProduct Description :</b>&nbsp; $pro_desc </p>

    <p style= 'padding: 5px'><b>4.&nbspListing Price :</b>&nbsp; Rs. $pro_price </p>

    <p style= 'padding: 5px'><b>5.&nbspMinimum Bid = (Highest Bid + 1) :</b>&nbsp; $max_bid+1 </p>

    <p style= 'padding: 5px'><b>6.&nbspAuction Created On :</b>&nbsp; $auc_date </p>

    <h5 style='font-size: 15px;margin-left:5px;'><u><a href='structBidHist.php?p_id=$pro_id'>Bid History</a></u></h5>
   
   <h5 style='color:red;margin-left:480px;'>End Time:</h5><p style='margin-left:460px;'id='date'></p>
   

<script>

var countDownDate = new Date('$pro_date').getTime();


var x = setInterval (function() {


  var now = new Date().getTime();
    
 
  var distance = countDownDate - now;
    

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
 
  document.getElementById('date').innerHTML = days + 'd ' + hours + 'h '
  + minutes + 'm ' + seconds + 's ';
    
  
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('date').innerHTML = 'AUCTION CLOSED';
    document.getElementById('bid_button').disabled = true;
  }

}, 1000);
</script>
    
    <form action='' method='POST' style='margin-left:450px;'>
   <b>&nbsp;&nbsp;&nbsp;&nbsp;Enter Your Bid:</b><br><input type='text' name='bid_amount' required />
    <input type='submit' class='btn-success' id='bid_button' name='bid_button' value='Bid' />
    </form>

    
    </div>
    <h5 style='font-size: 15px;margin-left:500px;'><u><a href='home.php'>Go Back</a></u></h5>
    ";


            if (isset($_POST['bid_button']) && isset($_GET['p_id'])) {

                $c_id = $_SESSION['cust_id'];

                $c_email = $_SESSION['cust_email'];

                $p_id = $_GET['p_id'];

                $bid_amount = $_POST['bid_amount'];

                if ($bid_amount < $max_bid + 1) {
                    echo "<script>alert('Please Enter a Valid Minimum Amount')</script> ";
                    echo "<script>window.open('structDetails.php?p_id=$pro_id','_self')</script>";
                } else {

                    $insert_bids = "insert into bids (bid_amount,p_id,cust_id,cust_email) values
                ('$bid_amount','$p_id','$c_id','$c_email')";

                    $bids_db = mysqli_query($conn, $insert_bids);

                    if ($bids_db) {
                        echo "<script>alert('Your Bid Has Been Placed Successfully!')</script> ";
                        echo "<script>window.open('home.php','_self')</script>";
                    }
                }
            }
        }
    }

    ?>



</div>