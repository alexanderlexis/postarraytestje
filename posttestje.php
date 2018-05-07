<html>
    <head>
        <title>
            Het weer
        </title>
    </head>
    <body>
        <?php
        $weer=['rain', 'sunshine', 'clouds', 'hail', 'sleet', 'snow', 'wind'];        
        ?>
        
        <h2>Het weer enzo</h2>
        <form action='posttestje.php' method='post'>
            <input type='text' name='stad' placeholder='stad'>
            <input type='text' name='maand' placeholder='maand'>
            <input type='text' name='jaar' placeholder='jaar'><br>
            
        <?php
            foreach ($weer as $weertje){
                echo "<input type='checkbox' value=$weertje name='weer[]'> $weertje<br>";
            }      
        ?>
            
            <input type ='submit' name='submit' value='Submit >'>
        
            
        </form>
        <?php
            if(isset($_POST['stad'])){
                echo "In ".$_POST['stad']." in the month of ".$_POST['maand']." ".$_POST['jaar']." you observed the following weather: <br>";

                $weertjes = $_POST['weer'];

                echo "<ul>";

                foreach($weertjes as $keuze){
                    echo "<li>$keuze</li>";
                }

                echo "</ul>";
            }
        ?>
    </body>
</html>