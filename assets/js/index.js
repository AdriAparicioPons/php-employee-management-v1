
const tableEmployee = document.getElementById('tableEmployee');

function printTable(){
    fetch("../src/library/employeeController.php").then(function(response){
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
const tableRaws = document.getElementById('tableRaws');

function printEmployeeInfo(){
    fetch("../../resaurces/employees.json").then(function(response){
        return response.text();
    }).then(function(data){
        jsonData = JSON.parse(data);

    })
}