<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="dojo.js"></script>
    </head>
    <body>
        <script type="text/javascript">
            require(["dom"],function(dom)
            {
                var node = dom.byId("temp");
                
                node.innerHTML += "From Dojo";
                
                
            }
                    
        );
        </script>

        
        <div id="temp">
            My name is Munna
        </div>

    </body>
</html>
