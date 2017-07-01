(function(){

//Variables

var lista = document.getElementById("lista"),
    tareaInput = document.getElementById("tareaInput"),
    btnNuevaTarea = document.getElementById("btn-agregar");

//Funciones
 var agregarTarea = function(){
     var tarea = tareaInput.value,
         nuevaTarea = document.createElement("li"),
         enlace = document.createElement("a"),
         contenido = document.createTextNode(tarea);

         if (tarea === "") {
         	tareaInput.setAttribute("placeholder","Agrega una tarea válida");
            tareaInput.className = "error";
            //con esto se sale de la funcion si es que la funcion se cumple
            return false;
         }

         //Agregando el contendio al enlace
         enlace.appendChild(contenido);
         //Le establecemos el atributo para que pueda ser ciclkeable
         enlace.setAttribute("href","#");
         //Agregando la etiqueta <a> al <li>
         nuevaTarea.appendChild(enlace);
         //Agregando la nueva tarea a la lista
         lista.appendChild(nuevaTarea);

         tareaInput.value = "";

         for (var i = 0; i <= lista.children.length - 1; i++) {
	lista.children[i].addEventListener("click",function(){
		this.parentNode.removeChild(this);
	});
}
 };	

 var comprobarInput = function(){
 	 tareaInput.className = "";
 	 tareaInput.setAttribute("placeholder","Agrega tu tarea");
 };

 var eliminarTarea = function(){
     this.parentNode.removeChild(this);

 };


//Eventos    
//Agregar tarea
btnNuevaTarea.addEventListener("click", agregarTarea);
//Comprobar input
tareaInput.addEventListener("click", comprobarInput);
//Borrando elementos de la lista
for (var i = 0; i <= lista.children.length - 1; i++) {
	lista.children[i].addEventListener("click",eliminarTarea);
}

}());	