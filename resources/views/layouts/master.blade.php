<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>@yield('titre')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap 3.3.4 -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
    
  </head>
<body class="light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-closed" style="height: auto;">

    @yield('content')
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>


    <!-- Main Javascript file -->
    <script src="{{ asset('assets/dist/js/sweetalert.min.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard3.js') }}"></script>
    @yield('script')
    <script>
      $(document).ready(function(){
          $(".delete-confirm").on('click', function(e){
          e.preventDefault();
          var url = $(this).data('url');
          console.log($('meta[name=csrf-token]').attr('content'));
          swal({
                  title: "êtes vous sûr?",
                  text: "Voulez vous supprimer ce "+$(this).data('model'),
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
              })
              .then((willDelete) => {
                  if (willDelete) {
                      var data = {
                          "_token" : $('meta[name="csrf-token"]').attr('content'),
                      };
                      $.ajax({
                          type: "DELETE",
                          url: url,
                          data: data,
                          success: function(response){
                              console.log(response);
                              swal(response.deleted, {
                                  icon: "success",
                              }).then((result) => {
                                  location.reload();
                              });
                          }
                      })
                  } else {
                      swal("Votre action est annulé");
                  }
              });
          });
          $(".edit-confirm").on('click', function(e){
              e.preventDefault();
              console.log($(this).data('model'));
              var id = $(this).closest('tr').find('.product_id').val();
              var href = $(this).attr('href');
              swal({
                  title: "êtes vous sûr?",
                  text: "Voulez vous editer ce "+$(this).data('model'),
                  icon: "primary",
                  buttons: true,
                  dangerMode: false,
              })
              .then((willEdit) => {
                  if (willEdit) {
                      window.location.href = href;
                  } else {
                      swal("Votre action est annulé");
                  }
              });
          });
      });

    updateDocument = function() {
        var input = document.getElementById('documents');
        var output = document.getElementById('documentName');
        output.innerText = "";
        for (var i = 0; i < input.files.length; ++i) {
            output.innerHTML += input.files.item(i).name + '/';
        }
    }
    updateImage = function() {
        var input = document.getElementById('images');
        var output = document.getElementById('imageName');
        output.innerText = "";
        for (var i = 0; i < input.files.length; ++i) {
            output.innerHTML += input.files.item(i).name + '/';
        }
    }
    </script>
</body>

<!-- Mirrored from altair-html-rtl.tzdthemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Nov 2020 11:31:56 GMT -->
</html> 