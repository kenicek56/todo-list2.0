<!DOCTYPE html>
<html>
<head>
	<title> Kenice's To-Do List</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div id="title" class="Todo-List col-x-12">
	<h1>
		Todo-List
	</h1>
</div>
  <div class="wrap">
	<div class="task-list">
		<ul>
			<?php require("includes/connect.php"); 
             $mysqli = new mysqli('localhost', 'root', 'root', 'todo');
             $query = "SELECT * FROM tasks ORDER BY date ASC, time ASC";
             if ($result = $mysqli->query($query)) {
             	$numrows = $result->num_rows; 
             	if ($numrows>0) {
             		while($row = $result->fetch_assoc()){
             			$task_id = $row['id'];
             			$task_name = $row['task'];

             			echo '<li>
                         <span>'.$task_name.'</span>
                         <img id="'.$task_id.'" class="delete-button" width="10px" src="images/close.svg"/>
             			</li>';
             		}
             	}
             }
           ?>
		</ul>
	</div>
  <form class="add-new-task" autocomplete="off">
  <input type="text" name="new-task" placeholder="Add new item..."/>
  </form>
  </div>
  <div id="nav">
  <ul class="nav-menu clearfix unstyled">
         <li><a href="index.php" class="three-d">
      Logout
      <span class="three-d-box"><span class="front">Logout</span><span class="back">Logout</span></span>
         </a></li>
         </ul>
</div>
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task(); //calling a task function

    function add_task(){
		$('.add-new-task').submit(function() {
			var new_task = $('.add-new-task input[name=new-task]').val();

			if (new_task != '') {
				$.post('includes/add-task.php',{task: new_task}, function(data) {
					$('add-new-task input[name=new-task]').val();
						$(data).appendTo('.task-list ul').hide().fadeIn();
				});	
			}
			return false;
		});
	}

	    $(".task-list").on("click", ".delete-button", function(){
	    var current_element = $(this);
		var task_id = $(this).attr('id');
		$.post('includes/delete-task.php', {id: task_id}, function(){
		current_element.parent().fadeOut("fast", function(){
        $(this).remove();	
	   }); 
	});
});
</script>
</html>
