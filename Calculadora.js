var costo = prompt("Ingrese el costo");
var ganancia = prompt("Ingrese el margen de ganancia");
var impuesto = prompt("Ingrese el impuesto deseado");
var costoP = parseInt(costo) + (costo * ganancia) / 100;
var precioFinal = parseInt(costoP) + (costoP * impuesto) / 100;
document.write("El precio final con impuesto es de ", " ₡ ", precioFinal, "<br>");
document.write("El precio final sin impuestos es de ", " ₡ ", costoP);


var costo = prompt("Ingrese el precio del producto");
var ganancia = prompt("Ingrese el margen de ganancia");
var impuesto = prompt("Ingrese el impuesto deseado");
var precioFinal = parseInt(costo) + (impuesto * costo ) / 100;
var ganancias = (ganancia / 100) + 1;
var CostoProd = costo /  ganancias;
document.write("* El precio final con impuesto es de: "," ₡ ",  precioFinal , "<br>");
document.write("* El costo de produccion es de: "," ₡ ", CostoProd  );


var valor_final = prompt ("Ingrese el costo final del producto");
var ganancia = prompt ("Ingrese la ganancia del producto");
var impuesto = prompt ("Ingrese el impuesto del producto");
var valores = (impuesto / 100) + 1;
var valor = parseInt(valor_final / valores) ;
var costoPrecio = (ganancia / 100) + 1 ;
var precioCosto = Number (valor / costoPrecio);
document.write("El precio ganancia del producto es de: "," ₡ ", valor, "<br>");
document.write("El costo del producto es de: "," ₡ ", precioCosto, "<br>");








