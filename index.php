<!DOCTYPE html>
<html>
 <head>
     <title>Frontend unit converteur</title>
     <meta charset="utf-8">
     <style>
        #text{
            margin-left: 50px ;
            font-size:20px;
	        color :red;
         }
        #suite{
            margin-left: 50px ;
            font-size:20px;
	        color :red;
        }
    </style>
 </head>


 <body>
    
    <div id="text">
        <div> 
            <form action="index.php" method="post">
            <div>Please enter the base unit : <input type="text" name="base"></div>
            <div>Now, enter the other unit <input type="text" name="second"> and the ratio <br\>of convertion <input type="text" name="unit2"> (e.g. 1 meter = 0.001 kilometer)</div>
            <div>In addition, you can add a third unit <input type="text" name="third"> and the ratio <br\>of convertion <input type="text" name="unit3"> </div>
            <div>finally, please enter the value you want to convert <input type="text" name="value"></div>
            <input type="submit" value="convertir">    
            </form>
        </div>






        <?php 
            echo "<br />";
            if (isset($_POST['base']) && strlen($_POST['base'])>0) {
                if (isset($_POST['second']) && strlen($_POST['second'])>0){
                    if (isset($_POST['unit2']) && strlen($_POST['unit2'])>0 ){
                        if (isset($_POST['value']) && strlen($_POST['value'])>0 ){
                            if (isset($_POST['third']) && strlen($_POST['third'])>0 && isset($_POST['unit3']) && strlen($_POST['unit3'])>0 ){
                                echo "the convertion of ",$_POST['value']," ",$_POST['base']," is ",$_POST['value']*$_POST['unit2']," ",$_POST['second']," and ",$_POST['value']*$_POST['unit3']," ",$_POST['third'] ;
                            }else{
                                echo "the convertion of ",$_POST['value']," ",$_POST['base']," is ",$_POST['value']*$_POST['unit2']," ",$_POST['second'];
                            }
                        }else{
                            echo" please enter a value";
                        }
                    }else{
                        echo "please enter the ratio of convertion";
                    }
                }else{
                    echo "please enter an other unit";
                }
            }else{
                echo "please enter a base unit";
            }
        ?>
    </div>
 </body>
</html>