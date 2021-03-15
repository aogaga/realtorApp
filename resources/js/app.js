
var alertList = document.querySelectorAll('.alert')
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert)
})



var alertNode = document.querySelector('.alert');

if(alertNode != null){
    alertNode.addEventListener('click', function () {
        var alert = bootstrap.Alert.getInstance(alertNode)
        alert.close();
    })

}
