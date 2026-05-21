function previewFoto(event) {
    const reader = new FileReader();
    reader.onload = function(){
        document.getElementById('preview').src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}

document.addEventListener("DOMContentLoaded", function () {

    // TELEFONE
    let telefone = document.getElementById("telefone");
    let erroTelefone = document.getElementById("erroTelefone");

    telefone.addEventListener("input", function () {

        // só números
        telefone.value = telefone.value.replace(/\D/g, "");

        if (telefone.value.length >= 11 && telefone.value.length <= 13) {

            telefone.style.border = "2px solid green";
            erroTelefone.innerHTML = "";

        } else {

            telefone.style.border = "2px solid red";
            erroTelefone.innerHTML = "Telefone inválido";
        }

    });


    // CPF
    let cpf = document.getElementById("cpf");
    let erroCpf = document.getElementById("erroCpf");

    cpf.addEventListener("input", function () {

        // só números
        cpf.value = cpf.value.replace(/\D/g, "");

        if (cpf.value.length == 11) {

            cpf.style.border = "2px solid green";
            erroCpf.innerHTML = "";

        } else {

            cpf.style.border = "2px solid red";
            erroCpf.innerHTML = "CPF inválido";
        }

    });

});