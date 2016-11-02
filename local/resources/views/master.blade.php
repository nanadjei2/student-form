<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap/bootstrap.css') }}" media="screen">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" media="screen">
    <!-- <link rel="stylesheet" href="select2/css/select2.css" media="screen"> -->
    <link rel="stylesheet" href="{{ url('assets/date-picker/css/datepicker.css') }}" media="screen">
  </head>
  <body>

        @yield('content')

    <script type="text/javascript" src="{{ url('assets/js/jQuery.min.js') }}"></script>
    <!-- <script type="text/javascript" src="select2/js/i18n/en.js"></script> -->
    <script type="text/javascript" src="{{ url('assets/date-picker/js/i18n/datepicker.en.js') }}"></script>
    <!-- <script type="text/javascript" src="select2/js/select2.min.js"></script> -->
    <script type="text/javascript" src="{{ url('assets/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('assets/date-picker/js/datepicker.min.js') }}"></script>


    <script type="text/javascript">
      $(document).ready(function() {
        $(".courses").select2({
          placeholder: "Current Semester Course(s) signing up for",
          allowClear: true
        });
      });
    </script>
  </body>
</html>
