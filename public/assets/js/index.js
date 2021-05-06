$('#harga_modal').on('hidden.bs.modal', function () {
    $("#harga_child").children().remove();
})
const getBarang = async() => {
    await $.ajax({
        url: "/barang",
        method: "GET",
        success: function(data) {
          $('#table').html(data);
          $('#table').DataTable();
            return true;
        }
    });
}
function delBar(id){
  $.ajax({
        url: "/barang",
        method: "delete",
        data: {id:id},
        success: function(data) {
          getBarang();
        }
    });
}
function addBar(id){
  $.ajax({
        url: "/sel",
        method: "post",
        data: {id:id},
        success: function(data) {
          getBarang();
        }
    });
}
function rmBar(id){
  $.ajax({
        url: "/desel",
        method: "post",
        data: {id:id},
        success: function(data) {
          getBarang();
        }
    });
}
function mdlHarga(id){
    document.getElementById("id-harga").value = id;
    $.ajax({
        url: "/harga",
        method: "post",
        data: {id:id},
        dataType: "json",
        success: function(data) {
            var tbl = '';
            var no = 0;

            $.each(data, function(key, value) {
                no++
            tbl += "<tr>";
            tbl += "<td>" + no + "</td>";
            tbl += "<td>" + value.harga + "</td>";
            tbl += "<td><button class='btn btn-danger' onclick='rmHarga("+ value.id +")'>Hapus</button></td>";
            tbl += "<tr>";
            });
            $('#harga_table').append(tbl);
            $('#harga_modal').modal('show');
        }
    });
}
function rmHarga(id){
    $.ajax({
        url: "/harga",
        method: "delete",
        data: {id:id},
        dataType: "json",
        success: function(data) {

        }
    });
}
$('#insert_form').on("submit", function(event) {
  console.log('submitting');
  event.preventDefault();
  $.ajax({
      url: "/barang",
      method: "POST",
      dataType: "JSON",
      data: $('#insert_form').serialize(),
      success: function(data) {
        if(data == true){
          getBarang();
        }

      }
  });
});
$('#harga_form').on("submit", function(event) {
  console.log('submitting');
  event.preventDefault();
  $.ajax({
      url: "/harga",
      method: "PUT",
      dataType: "JSON",
      data: $('#harga_form').serialize(),
      success: function(data) {
        if(data == true){
            $("#harga_child").children().remove();
            $.ajax({
        url: "/harga",
        method: "post",
        data: {id:id},
        dataType: "json",
        success: function(data) {
            var tbl = '';
            var no = 0;

            $.each(data, function(key, value) {
                no++
            tbl += "<tr>";
            tbl += "<td>" + no + "</td>";
            tbl += "<td>" + value.harga + "</td>";
            tbl += "<td><button class='btn btn-danger' onclick='rmHarga("+ value.id +")'>Hapus</button></td>";
            tbl += "<tr>";
            });
            $('#harga_table').append(tbl);
            $('#harga_modal').modal('show');
        }
    });
        }

      }
  });
});
$( document ).ready(function() {
getBarang();

});
