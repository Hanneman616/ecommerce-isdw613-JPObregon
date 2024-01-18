<html>
    <body>
        <h1>Elementos de un carro
        <?php
        if(isset($_COOKIE['Ecommerce'])){
           
            echo $_COOKIE['Ecommerce'];
        } else{
            echo "Cookie named 'Ecommerce' is not set!";
        }

        ?>

        </h1>

        <script>
            console.log(document.cookie)
        </script>




        </body>
        </html>
            
        