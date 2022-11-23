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

function boomA() {
  if (document.getElementsByClassName("row clicked")) {
    let idPool = document.getElementsByClassName("row clicked")[0];
    let id = idPool.querySelector("div").innerText;
    alert("El ID de lo que deseas borrar es " + id);
    window.location.href = `deleteA.php?id=${id}`;
  } else if (document.getElementsByClassName("row white clicked")) {
    let idPool2 = document.getElementsByClassName("row white clicked")[0];
    let id2 = idPool2.querySelector("div").innerText;
    alert("El ID de lo que deseas borrar es " + id);
    window.location.href = `deleteA.php?id=${id2}`;
  }
}




