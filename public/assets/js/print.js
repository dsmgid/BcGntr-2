const getBarang = async() => {
    await $.ajax({
        url: "/barangjson",
        method: "GET",
        dataType: "json",
        success: function(data) {
            $("#nbs").empty();
            var jual = '';
            jual += "<option></option>";
            //Render Select
            $.each(data, function(key, value) {
                jual += "<option value='" + value.nama + "' id='" + value.id + "'barcode='" + value.barcode + "' >" + value.nama + "</option>";
            });
            $('#nbs').append(jual);
            return true;
        }
    });
}
const getPrint = async() => {
    await $.ajax({
        url: "/printdt",
        method: "GET",
        success: function(data) {
            $('#table').html(data);
            $('#table').DataTable();
            return true;
        }
    });
}
const getHarga = async() => {
    id = $("#nbs option:selected").attr("id");
    $("#barcode").val($("#nbs option:selected").attr("barcode"));
    await $.ajax({
        url: "/harga",
        method: "POST",
        data: { id: id },
        dataType: "json",
        success: function(data) {
            $("#harga").empty();
            var jual = '';
            //Render Select
            $.each(data, function(key, value) {
                jual += "<option value='" + value.harga + "' id='" + value.id + "' >" + value.harga + "</option>";
            });
            $('#harga').append(jual);
            return true;
        }
    });
}
$('#addBarang').on("submit", function(event) {
    event.preventDefault();
    $.ajax({
        url: "/print",
        method: "POST",
        dataType: "JSON",
        data: $('#addBarang').serialize(),
        success: function(data) {
            if (data == true) { getPrint(); }

        }
    });
});

function delBar(id) {
    $.ajax({
        url: "/print",
        method: "delete",
        data: { id: id },
        success: function(data) {
            getPrint();
        }
    });
}
$(document).ready(function() {
    getBarang();
    getPrint();
});