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
        
        <title>Customers </title>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto pl-0 pl-sm-1">
                        <li class="nav-item active">
							<h4><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>&nbsp
                        <li class="nav-item">
							<h4><a class="nav-link" href="about.php">About Us</a>
                        </li>&nbsp
                        <li class="nav-item">
                            <h4><a class="nav-link" href="customer.php">View Customers</a>
                        </li>&nbsp
                        <li class="nav-item">
                            <h4><a class="nav-link" href="contact.php">Contact Us</a>
                        </li>&nbsp
                    </ul>
                   
                </div>
            </nav>
        </div>



        <br>

        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Current Balance</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        getCustomers();
                    ?>
                </tbody>
            </table>
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

