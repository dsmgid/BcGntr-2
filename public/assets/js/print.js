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
    console.log('submitting');
    event.preventDefault();
    $.ajax({
        url: "/print",
        method: "POST",
        dataType: "JSON",
        data: $('#addBarang').serialize(),
        success: function(data) {
            if (data == true) { console.log('success'); }

        }
    });
});
$(document).ready(function() {
    getBarang();
});