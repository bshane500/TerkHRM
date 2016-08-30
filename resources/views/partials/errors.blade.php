@if (count($errors) > 0)
    <div hidden id="err">
        <ul >
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li><br>
            @endforeach
        </ul>
    </div>

        <script>
            toastr.options ={
                "closeButton": true,
                "timeOut": "600000",
                "extendedTimeOut" :"600000"
            };
           toastr.error($('#err').text() , 'Whoops!');
        </script>
@endif

