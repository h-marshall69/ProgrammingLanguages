function mostrarSeccion(seccionId) {
  document.getElementById("micuenta").classList.add("hidden");
  document.getElementById("editarcuenta").classList.add("hidden");
  document.getElementById("contraseña").classList.add("hidden");
  document.getElementById("ayuda").classList.add("hidden");
  document.getElementById("personas").classList.add("hidden");
  document.getElementById("historiaclinica").classList.add("hidden");
  document.getElementById("triaje").classList.add("hidden");
  document.getElementById("citas").classList.add("hidden");

  document.getElementById(seccionId).classList.remove("hidden");
}

$(document).ready(function () {
  //Cargar departamentos
  $.ajax({
    url: "classes.php",
    method: "GET",
    data: { action: "getDepartamentos" },
    success: function (response) {
      const departamentos = JSON.parse(response);
      departamentos.forEach((departamento) => {
        $("#departamento").append(
          new Option(
            departamento.NombreDepartamento,
            departamento.id_Departamento
          )
        );
      });
    },
  });
  $("#departamento").on("change", function () {
    const id_Departamento = $(this).val();
    $("#provincia").html('<option value="">Seleccione una provincia</option>');
    $("#distrito").html('<option value="">Seleccione un distrito</option>');
    if (id_Departamento) {
      $.ajax({
        url: "classes.php",
        method: "POST",
        data: { action: "getProvincias", id_Departamento: id_Departamento },
        success: function (response) {
          const provincias = JSON.parse(response);
          provincias.forEach((provincia) => {
            $("#provincia").append(
              new Option(provincia.NombreProvincia, provincia.id_Provincia)
            );
          });
        },
      });
    }
  });
  // Cargar distritos cuando se selecciona una provincia
  $("#provincia").on("change", function () {
    const id_Provincia = $(this).val();
    $("#distrito").html('<option value="">Seleccione un distrito</option>');
    if (id_Provincia) {
      $.ajax({
        url: "classes.php",
        method: "POST",
        data: { action: "getDistritos", id_Provincia: id_Provincia },
        success: function (response) {
          const distritos = JSON.parse(response);
          distritos.forEach((distrito) => {
            $("#distrito").append(
              new Option(distrito.NombreDistrito, distrito.id_Distrito)
            );
          });
        },
      });
    }
  });
});
