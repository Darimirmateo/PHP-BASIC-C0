<?php  
    require 'includes/dashboard.php';

    $leeftijd = 18;
?>


<html>


<head>
</head>


<body>
<div id="Jebentmeerderjarig">
<?php
            if($leeftijd > 18 ){
                echo "<h6>Je bent oud genoeg om deze pagina te bekijken!</h6>";
            }
        ?>

</div>

</body>



</html>
