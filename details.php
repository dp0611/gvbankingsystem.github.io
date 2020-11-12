<!DOCTYPE html>

<?php
    include("functions.php");
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        
       
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css" media="all">
        
        <title>Customer Details </title>
    </head>
    
    <body>

        <div class="container">
            <?php
                if(isset($_GET['customer_id'])) {
                    $c_id = $_GET['customer_id'];
                    $get_customers = "select * from customers where customer_id='$c_id'";
                    $run_customers = mysqli_query($con, $get_customers);

                    while ($row_customers = mysqli_fetch_array($run_customers)) {
                        $customer_id = $row_customers['customer_id'];
                        $customer_name = $row_customers['customer_name'];
                        $customer_email = $row_customers['customer_email'];
                        $current_balance = $row_customers['current_balance'];
                        $customer_image = $row_customers['customer_image'];
                        echo "
                            <center>
                                <img src='images/customers/$customer_image'>
                            </center>
                            <br>
                            <table class='table table-bordered' style='text-align: center; font-size: 20px;'>
                                <tr>
                                    <th scope='col'>Customer ID</th>
                                    <td>$customer_id</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Name</th>
                                    <td>$customer_name</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Customer Email</th>
                                    <td>$customer_email</td>
                                </tr>
                                <tr>
                                    <th scope='col'>Current Balance</th>
                                    <td>$current_balance</td>
                                </tr>
                            </table>
                            <div class='row'>
                                <div class='col-6'>
                                    <center>
                                        <button class='btn'>
                                            <a href='Customer.php' style='text-decoration: none; color: #f0ffff;'>Back to all customers</a>
                                        </button>
                                    </center>
                                </div>
                                <div class='col-6'>
                                    <center>
                                        <button class='btn'>
                                            <a href='transfer.php?customer_id=$c_id' style='text-decoration: none; color: #f0ffff;'>Transfer Money</a>
                                        </button>
                                    </center>
                                </div>
                            </div>
                        ";
                    }
                }
            ?>
        </div>


          <div class="text-center bg-dark footer">
            @2020 || Green Valley Banking Systems
            <br>
      
        </div>

        <script>
            mybutton = document.getElementById("myBtn");

            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            $(document).ready(
                function(){
                    var elem = $(this).attr("href");
                
                    $('html, body').animate(
                        {
                            scrollTop: $(elem).offset().top
                        },
                        
                        'slow'
                    );
                }
            );
        </script>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    </body>
</html>
