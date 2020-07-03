<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>JQuery</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </head>
    <body>

        <script type="text/javascript">
        $(document).ready(function()
        {
            $("p").dblclick(function()
            {
                $(this).hide();
            });
        });
        </script>
    
        
        <p>Dauble click me and i will get vanish</p>

        <p id="output">Javascript Toggle Button</p>
        <button id="btn" onclick="toggle();">On</button> 
        <script>
        var clicked=false;
        function toggle(){
            if(!clicked){
                clicked = true;
                document.getElementById("btn").innerHTML = "On";
                document.getElementById("output").innerHTML = "Switched On";
            }
            else {
                clicked = false;
                document.getElementById("btn").innerHTML = "Off";
                document.getElementById("output").innerHTML = "Switched Off";

            }
        }
        </script>


        <script type="text/javascript">
        var emps =[];
        var emp1 = {};
        var emp2 = {};

        emp1.id = 1;
        emp1.name = 'Mahantesh';
        emp1.addr = 'Goa';
        emps.push(emp1);

        emp2.id = 2;
        emp2.name = 'Vinod';
        emp2.addr = 'Karnataka';
        emps.push(emp2);


        console.log(emps)
        $.ajax({
            url:"readJson.php",
            method: "post",
            data: { emps : JSON.stringify( emps )},
            success: function(res){
                console.log(res);
            } 
        })   
        </script><br><br>

        <div id="result"></div>
        <button onclick="testPost()">POST</button>
        <button onclick="testGet()">Get</button>
        
        <script>
            function testPost(){
                $.post("readJson.php", {
                    jquerypost : "" 
                }, function(data){
                    showresult(data);
                })               
            }
            function testGet(){
                $.post("readJson.php?jqueryget", function(data){
                    showresult(data);
                })
            }

        function showresult(txt){
            $("#result").html(txt);
        }
        </script>

        

        <div>
        <img id="yoo" src="1.jpg" style  height=300px width=300px>
        </div>
        <div>
        <button id="fadein">Fade In</button>
        <button id="fadeout">Fade Out</button>
        </div>
        <script>
        $(document).ready(function(){
            $('#fadein').click(function(){

                $('#yoo').fadeIn(1000,function(){
                    alert("Image has been faded In")
                });
            });
            $('#fadeout').click(function(){

                $('#yoo').fadeOut(1000,function(){
                    alert("Image has been faded Out")
                });
            });
        });
        </script>



        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/click.js"></script>
        <script type="text/javascript" src="js/toggle.js"></script>


    </body>
</html>