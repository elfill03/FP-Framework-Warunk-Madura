// $(function() {
//     $("#adminTable").DataTable({
//         serverSide: true,
//         processing: true,
//         ajax: "{{ route('adminController.getAdmin') }}",
//         columns: [
//             { data: "id", name: "id", visible: false },
//             { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
//             { data: "name", name: "name" },
//             { data: "email", name: "email" },
//             { data: "tanggal_Lahir", name: "tanggal_Lahir" },
//             { data: "jenis_kelamin", name: "jenis_kelamin" },
//             { data: "alamat", name: "alamat" },
//             { data: "no_telp", name: "no_telp" },
//             { data: "role", name: "role" },
//             { data: "actions", name: "actions", orderable: false, searchable: false },
//         ],
//         order: [[0, "desc"]],
//         lengthMenu: [
//             [10, 25, 50, 100, -1],
//             [10, 25, 50, 100, "All"],
//         ],
//     });

//     $("#adminTable").on("click", ".btn-delete", function (e) {
//         e.preventDefault();

//         var form = $(this).closest("form");
//         var name = $(this).data("name");

//         Swal.fire({
//             title: "Are you sure want to delete\n" + name + "?",
//             text: "You won't be able to revert this!",
//             icon: "warning",
//             showCancelButton: true,
//             confirmButtonClass: "bg-primary",
//             confirmButtonText: "Yes, delete it!",
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 form.submit();
//             }
//         });
//     });
// });
// $(document).ready(function() {
//     console.log('Document ready');

//     $("#adminTable").DataTable({
//         serverSide: true,
//         processing: true,
//         ajax: "/dataAdmin/getAdmin", // Update URL sesuai dengan rute yang sesuai di routes/web.php
//         columns: [
//             { data: "id", name: "id", visible: false },
//             { data: "DT_RowIndex", name: "DT_RowIndex", orderable: false, searchable: false },
//             { data: "nama", name: "nama" },
//             { data: "email", name: "email" },
//             { data: "tanggal_lahir", name: "tanggal_lahir" },
//             { data: "jenis_kelamin", name: "jenis_kelamin" },
//             { data: "alamat", name: "alamat" },
//             { data: "no_telp", name: "no_telp" },
//             {data:"actions", name:"actions", orderable:false, searchable:false}
//         ],
//         order: [[0, "desc"]],
//         lengthMenu: [
//             [10, 25, 50, 100, -1],
//             [10, 25, 50, 100, "All"],
//         ],
//     });
// });
