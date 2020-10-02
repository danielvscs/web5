function showInfo(option){
    var info = document.getElementsByClassName("show");
    var options = document.getElementsByClassName("active");

    info[0].classList.remove('show');
    options[0].classList.remove('active');

    document.getElementById("info-"+option).classList.add('show');
    document.getElementById("option-"+option).classList.add('active');
}   