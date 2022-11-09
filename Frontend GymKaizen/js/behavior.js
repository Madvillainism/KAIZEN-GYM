
//------------------------TABLE------------------------//

const rows = document.querySelectorAll(".row");
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
    let clickRow = e.target.classList.contains("row") ? e.target : e.target.parentElement;
    console.log(clickRow);
    clickRow.classList.add("clicked");
    if(currentRow != null) currentRow.classList.remove("clicked");
    currentRow = clickRow;
  }, true)
}

prepairTable();
