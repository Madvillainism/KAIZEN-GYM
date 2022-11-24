// borra segun clicked row
function boom() {
  if (document.getElementsByClassName("row clicked")) {
    let idPool = document.getElementsByClassName("row clicked")[0];
    let id = idPool.querySelector("div").innerText;
    alert("El ID de lo que deseas borrar es " + id);
    window.location.href = `delete.php?id=${id}`;
  } else if (document.getElementsByClassName("row white clicked")) {
    let idPool2 = document.getElementsByClassName("row white clicked")[0];
    let id2 = idPool2.querySelector("div").innerText;
    alert("El ID de lo que deseas borrar es " + id);
    window.location.href = `delete.php?id=${id2}`;
  }
}

function prueba(){
   alert("marditos todos sea");
}


//Muestra segun click row en una pagina aparte
function show() {
  if (document.getElementsByClassName("row clicked")) {
    let idPool = document.getElementsByClassName("row clicked")[0];
    let id = idPool.querySelector("div").innerText;
    window.location.href = `trainer-ver.php?id=${id}`;
  } else if (document.getElementsByClassName("row white clicked")) {
    let idPool2 = document.getElementsByClassName("row white clicked")[0];
    let id2 = idPool2.querySelector("div").innerText;
    window.location.href = `trainer-ver.php?id=${id2}`;
  }
}


function update() {
  if (document.getElementsByClassName("row clicked")) {
    let idPool = document.getElementsByClassName("row clicked")[0];
    let id = idPool.querySelector("div").innerText;
    window.location.href=`trainer-editar.php?id=${id}`
    /*SET MODAL WITH FORM, SEND THE ID WITH HREF LOCATION
        AND FILL THE MODAL WITH THE INFO TO BE UPDATED, FIRST QUERY 
        AND THEN FILL*/
  } else if (document.getElementsByClassName("row white clicked")) {
    let idPool2 = document.getElementsByClassName("row white clicked")[0];
    let id2 = idPool2.querySelector("div").innerText;
    window.location.href=`tainer-editar.php?id=${id2}`
    
  }
}
