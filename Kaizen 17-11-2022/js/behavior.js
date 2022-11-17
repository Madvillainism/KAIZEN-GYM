
//------------------------TABLE------------------------//

const rows = document.querySelectorAll(".table > .row");
console.log(rows);
let currentRow = null;
let white = false;

const prepairTable = ()=>{
  rows.forEach(row=>{
    paintRow(row, white);
    addClickEvent(row);
  })
}

const paintRow = (row)=>{
  if(white) row.classList.add("white");
  white = !white;
}

const addClickEvent = (row)=>{
  row.addEventListener("click",(e)=>{
    e.stopPropagation();
    // console.log(e.target);
    let clickRow = e.target.classList.contains("row") ? e.target : e.target.parentElement;
    console.log("click:");
    clickRow.classList.add("clicked");
    if(currentRow != null) currentRow.classList.remove("clicked");
    currentRow = clickRow;
  }, true)
}

prepairTable();
