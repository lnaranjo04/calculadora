<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Monto 
            <input type="text" id="montoInicial" name="montoInicial" class="cuadro"/>
        </p>

        <p> % descuento
            <input type="text" id="descuento" name="descuento" class="cuadro"/>
        </p>

        <p> Cantidad descontada
            <input type="text" id="CantidadDescontada" name="CantidadDescontada" class="cuadro" readonly="readonly"/>
        </p>

        <p> Total
            <input type="text" id="Total" name="Total" class="cuadro" readonly="readonly"/>
        </p>

        <a href="javascript:calcular();"><span style=" float: left; margin-right: 10px; margin-bottom: 5px; font-size:20px; background-color: #CCC; color:#000;" value="" type="submit" class="boton" id="btn_calcula" name="btn_calcula"  >Calcular</span></a>

        <script type="text/javascript">

            function Calcular() {

                var montoIn = 0;
                var descuento = 0;
                var CantidadDes = 0;
                var TotalTodo = 0;

                montoIn = document.getElementById('#montoInicial').value;
                descuento = document.getElementById('#descuento').value;

                CantidadDes = (montoIn * descuento) / 100; //Calculo del descuento 
                document.getElementById('#CantidadDescontada').value = CantidadDes;//Asignacion de valor a descuento

                TotalTodo = montoIn - montoIn; //Calculo total
                document.getElementById('#Total').value = TotalTodo;
                console.log(TotalTodo);
            }
        </script>
    </body>
</html>
