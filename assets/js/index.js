const tableEmployee = document.getElementById('tableEmployee');
const currentEmployees = " <?php echo $currentEmployees; ?>";



function printTable(){
    const data = new FormData();
    data.set("function" ,  "read");
    fetch("../src/library/employeeController.php",{
        method:"POST",
        body:data
    }).then(function(response){
        return response.text();
    }).then(function (data){
        jsonText = data;
        const parse = new DOMParser();
        const doc = parse.parseFromString(data, 'text/html');
        const rows = doc.querySelectorAll("tr");
        rows.forEach(value => {
            tableEmployee.append(value);
    });
});
}


function deleteEmploye(e){
    const id = e.target.dataset.id;
    const data = new FormData();

    fetch("../src/library/employeeController.php", {
        method:"DELETE",
        headers: {"content-type": "application/json; charset=UTF-8"},
        // body: data,
        body:JSON.stringify({
            id: id,
        })
    })
    .then(function(response){
        return response.text();
    }).then(function (data){
        jsonText = data;
        const parse = new DOMParser();
        const doc = parse.parseFromString(data, 'text/html');
        const rows = doc.querySelectorAll("tr");
        deleteRows(tableEmployee);
        rows.forEach(value => {
            tableEmployee.append(value);
    });
    })
}

function deleteRows(parent){
    while(parent.firstChild){
        parent.removeChild(parent.lastChild);
    }
}

tableEmployee.addEventListener('click', displayEmployee);
const mainPath = previousFolder(location.pathname)
const employeeUrl = `${mainPath}/employee.php` 
console.log(employeeUrl)
function previousFolder(path) { 
    return path.substring(0, path.lastIndexOf('/')) 
}

 function displayEmployee(e){
     let employeeidentificator = e.target.parentElement.getAttribute('data-id');
     location.assign(employeeUrl);
     console.log(currentEmployees);
     //fetch a una funcion php
 }