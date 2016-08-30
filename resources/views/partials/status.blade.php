@if (session('status'))
   <p hidden id="status">{{ session('status') }}</p>
    <script>
        toastr.options ={
            "closeButton": true
        };
        toastr.success($('#status').text(), 'Notification');


    </script>
@endif

@if (session('rejected'))
    <p hidden id="status">{{ session('rejected') }}</p>
    <script>
        toastr.options = {
            "closeButton": true
        };
        toastr.error($('#status').text(), 'Alert !!');
    </script>
@endif