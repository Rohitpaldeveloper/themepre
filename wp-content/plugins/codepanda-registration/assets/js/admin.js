function printTable() {
        var divToPrint=document.querySelector(".wp-list-table");
        newWin= window.open("");
        newWin.document.write(`<style>.toggle-row,.check-column, #cb{display:none;}</style> <table border="1" cellpadding="3" id="printTable">` +divToPrint.innerHTML+`</table>`);
        newWin.print();
        newWin.close();
    }
document.addEventListener("DOMContentLoaded",()=>{
    const studentPrint = document.getElementById("student-data-export");
    if(studentPrint){
       studentPrint.addEventListener("click",()=>{
        printTable();
       });
    }
});