<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header">
            <i class="ion ion-clipboard"></i>

            <h3 class="box-title">To Do List</h3>

            <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <ul class="todo-list">
                <li>
                    <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                    <!-- checkbox -->
                    <input type="checkbox" value="">
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                    </div>
                </li>


            </ul>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix no-border">
            <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
        </div>

        <section id="data_section" class="todo">
            <ul class="todo-controls">
                <li><img src="/assets/img/add.png" width="14px"onClick="show_form('add_task');" /></li>
            </ul>
            <ul id="task_list" class="todo-list">
                @foreach($todos as $todo)
                    @if($todo->status)
                        <li id="{{$todo->id}}" class="done"><a href="#" class="toggle"></a><span id="span_{{$todo->id}}">{{$todo->title}}</span> <a href="#"onClick="delete_task('{{$todo->id}}');"class="icon-delete">Delete</a> <a href="#"onClick="edit_task('{{$todo->id}}','{{$todo->title}}');"class="icon-edit">Edit</a></li>
                    @else
                        <li id="{{$todo->id}}"><a href="#"onClick="task_done('{{$todo->id}}');"class="toggle"></a> <span id="span_{{$todo->id}}">{{$todo->title}}</span><a href="#" onClick="delete_task('{{$todo->id}}');" class="icon-delete">Delete</a>
                            <a href="#" onClick="edit_task('{{$todo->id}}','{{$todo->title}}');"class="icon-edit">Edit</a></li>
                    @endif
                @endforeach
            </ul>
        </section>
        <section id="form_section">

            <form id="add_task" class="todo"
                  style="display:none">
                <input id="task_title" type="text" name="title"placeholder="Enter a task name" value=""/>
                <button name="submit">Add Task</button>
            </form>

            <form id="edit_task" class="todo"style="display:none">
                <input id="edit_task_id" type="hidden" value="" />
                <input id="edit_task_title" type="text"name="title" value="" />
                <button name="submit">Edit Task</button>
            </form>

        </section>
    </div>
</div>


<script>
    function task_done(id){

        $.get("/done/"+id, function(data) {

            if(data=="OK"){

                $("#"+id).addClass("done");
            }

        });
    }
    function delete_task(id){

        $.get("/delete/"+id, function(data) {

            if(data=="OK"){
                var target = $("#"+id);

                target.hide('slow', function(){ target.remove(); });

            }

        });
    }


    function show_form(form_id){

        $("form").hide();

        $('#'+form_id).show("slow");

    }
    function edit_task(id,title){

        $("#edit_task_id").val(id);

        $("#edit_task_title").val(title);

        show_form('edit_task');
    }
    $('#add_task').submit(function(event) {

        /* stop form from submitting normally */
        event.preventDefault();

        var title = $('#task_title').val();
        if(title){
            //ajax post the form
            $.post("/add", {title: title}).done(function(data) {

                $('#add_task').hide("slow");
                $("#task_list").append(data);
            });

        }
        else{
            alert("Please give a title to task");
        }
    });

    $('#edit_task').submit(function() {

        /* stop form from submitting normally */
        event.preventDefault();

        var task_id = $('#edit_task_id').val();
        var title = $('#edit_task_title').val();
        var current_title = $("#span_"+task_id).text();
        var new_title = current_title.replace(current_title, title);
        if(title){
            //ajax post the form
            $.post("/update/"+task_id, {title: title}).done(function(data){
                $('#edit_task').hide("slow");
                $("#span_"+task_id).text(new_title);
            });
        }
        else{
            alert("Please give a title to task");
        }
    });
</script>