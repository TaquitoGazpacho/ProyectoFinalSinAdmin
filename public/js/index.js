$( document ).ready( function() {
    var altura = parseInt(window.innerHeight) - parseInt(window.getComputedStyle(nav, null).getPropertyValue('height'));
    $('#nav').affix({
        offset: {
            top: altura
        }
    });

    $(function(){
        $(window).scroll(function() {
            var scroll = $(window).scrollTop(); // how many pixels you've scrolled
            var os = $('#nav').offset().top; // pixels to the top of div1
            //var ht = $('#div1').height(); // height of div1 in pixels
            // if you've scrolled further than the top of div1 plus it's height
            // change the color. either by adding a class or setting a css property
            if(scroll >= os){
                $('#servicios').addClass('vg');
                $('#droup').removeClass('dropup');
            } else{
                $('#servicios').removeClass('vg');
                $('#droup').addClass('dropup');
            }
        });
    });
});

function addEvent(){
    document.getElementById("contactanos").addEventListener('submit', validate);
}

function validate(event){
    event.preventDefault()
    var elementos = document.getElementById("contactanos").elements;
    var errors="";
    for (var i=0;i<elementos.length;i++){
        var eInput = elementos[i];
        if (eInput.name === "nombre"){
            if (eInput.value.length == 0) {
                errors += "<p>Tu nombre no puede estar vacío</p>";
            }
        }
        if (eInput.name === "textarea"){
            if (eInput.value.length <= 20){
                errors += "<p>Tu texto es demasiado corto</p>";
            }
        }
        if(eInput.name === "email"){
            if(!validateEmail(eInput.value)){
                //la validación esta dando FALSE
                errors+="<p>Tu email no es válido</p>";
            }
        }
    }

    if(errors!=""){
        event.preventDefault();
        document.getElementById('errores').innerHTML="<div class='alert alert-danger'>"+errors+"</div>";
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //esta otra también es válida
    //var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    return re.test(email);
}

// function mostrarEmpresa(event) {
//     let url = window.location.href;
//     let urlFija = '/editarEmpresa/mostrarDatos?empresa='+event.target.name;//document.getElementsByName('empresa')[0].value;
//     let urlCompleta = url + urlFija;
//     let http = new XMLHttpRequest();
//     http.open("GET", urlCompleta, true);
//     http.send();
//
//
//     http.onreadystatechange = function () {
//         if (http.readyState === 4) {
//             // Se ha recibido la respuesta.
//             if (http.status === 200) {
//                 // Aquí escribiremos lo que queremos que
//                 // se ejecute tras recibir la respuesta
//                 let datosDoc = JSON.parse(http.responseText);
//                 document.getElementById('inputId').value = datosDoc[0]['id'];
//                 document.getElementById('inputNombre').value = datosDoc[0]['nombre'];
//                 document.getElementById('inputEmail').value = datosDoc[0]['email'];
//                 document.getElementById('inputTelefono').value = datosDoc[0]['telefono'];
//                 document.getElementById('inputNif').value = datosDoc[0]['nif'];
//             } else {
//                 // Ha ocurrido un error
//                 alert(
//                     "Error:" + http.statusText);
//             }
//         }
//     }
// }

function mostrarEmpresa(event){
    var empresa_id = event.target.name;
    $('#inputId').val(empresa_id);
    $('#inputNombre').val($('#'+empresa_id+'_nombre').text());
    $('#inputEmail').val($('#'+empresa_id+'_email').text());
    $('#inputTelefono').val($('#'+empresa_id+'_telefono').text());
    $('#inputNif').val($('#'+empresa_id+'_nif').text());
}

$( document ).ready( function() {
    $("#editarEmpresaReparto").submit(function (event) {
        event.preventDefault();

        let datosFormulario = $(this).serialize();

        let url = $(this).attr("action");

        $.post(url, datosFormulario, function (respuesta) {
            //recoger valores en formulario
            let id = $("[id='inputId']").val();
            let email = $("[id='inputEmail']").val();
            let telefono = $("[id='inputTelefono']").val();
            let nif = $("[id='inputNif']").val();

            //escribir valores en tabla
            $('#' + id + '_email').text(email);
            $('#' + id + '_telefono').text(telefono);
            $('#' + id + '_nif').text(nif);

            //cerrar modal
            $('#modalEditarEmpresa').modal('toggle');
        });
    });
});

function editarUsuario(event) {
    let url = window.location.href;
    let urlFija = '/editarUsuario?id='+event.target.name;//document.getElementsByName('empresa')[0].value;
    let urlCompleta = url + urlFija;
    let http = new XMLHttpRequest();
    http.open("GET", urlCompleta, true);
    http.send();


    http.onreadystatechange = function () {
        if (http.readyState === 4) {
            // Se ha recibido la respuesta.
            if (http.status === 200) {
                // Aquí escribiremos lo que queremos que
                // se ejecute tras recibir la respuesta
                let datosUser = JSON.parse(http.responseText);
                console.log(datosUser);
                document.getElementById('userId').value = datosUser[0]['id'];
                document.getElementById('userNombre').value = datosUser[0]['name'];
                document.getElementById('userApellido').value = datosUser[0]['surname'];
                document.getElementById('userEmail').value = datosUser[0]['email'];
                let sex = document.getElementsByName('userSex');
                for (let i=0; i<sex.length;i++){
                    if(sex[i].value.toLowerCase() == datosUser[0]['sex'].toLowerCase()){
                        document.getElementById('user_'+sex[i].value.toLowerCase()).checked = true;
                    }
                }
                let suscripciones = document.querySelectorAll('form #userSuscripcion option');
                for (let i=0; i<suscripciones.length;i++){
                    if(suscripciones[i].value == datosUser[0]['suscripcion_id']){
                        document.getElementById('userSuscripcion').value= suscripciones[i].value;
                    }
                }


            } else {
                // Ha ocurrido un error
                alert(
                    "Error:" + http.statusText);
            }
        }
    }

}

function estadoTaquilla(event, id){
    //event.target.value;

    let url = window.location.href;
    let urlFija = "/editarEstado?ids="+id+"&event="+event.target.value;//document.getElementsByName('empresa')[0].value;
    let urlCompleta = url + urlFija;
    let http = new XMLHttpRequest();
    http.open("GET", urlCompleta, true);
    http.send();


    http.onreadystatechange = function () {
        if (http.readyState === 4) {
            console.log(http.readyState);
            // Se ha recibido la respuesta.
            if (http.status === 200) {
                // Aquí escribiremos lo que queremos que
                // se ejecute tras recibir la respuesta
                let datosDoc = http.responseText;
                // console.log(datosDoc);

            } else {
                // Ha ocurrido un error
                alert(
                    "Error:" + http.statusText);
            }
        }
    }

}





//ESTO ES PARA EL USUARIO, PARA LAS PESTAÑITAS
$('#userTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
});
