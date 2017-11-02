
<html>
    <head>
        
        <script>
            
            function kleur(){
                alert("test");
                    document.getElementById('B7').innerHTML = 'piet';
                    document.getElementById('B7').style.backgroundColor = 'orange';
            }
            
         </script>
        <style>
            table , tr, td {
                border:2px solid black;
            }
            button {border-radius: 50%;}
            
           
        </style>
        
        
    </head>
    <body>
        <button>ajdflsajdf</button>
        <input type="button" value="sdlkfjasl" />
        <table>
            <tr>
                <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button onclick="kleur()" type="button" id="B7">_</button></td>';

                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button type="button" id="B7">_</button></td>';

                }
                
                ?>
                
            </tr>
            <tr>
               <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button type="button" id="B7">_</button></td>';

                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button type="button" id="B7">_</button></td>';

                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button type="button" id="B7">_</button></td>';

                }
                
                ?>
            </tr>
            <tr>
                <?php
                for($x =0;$x<6;$x++){
                    echo '<td><button type="button" id="B7">_</button></td>';

                }
                
                ?>
            </tr>
        </table>
    </body>
</html>
