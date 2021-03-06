<p class="bg-success">
<?php if($this->session->flashdata('login_success')): ?>
<?php echo $this->session->flashdata('login_success'); ?>
<?php endif; ?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('no_access')): ?>
<?php echo $this->session->flashdata('no_access'); ?>
<?php endif; ?>
</p>

<p class="bg-danger">
<?php if($this->session->flashdata('login_failed')): ?>
<?php echo $this->session->flashdata('login_failed'); ?>
<?php endif; ?>
</p>

<p class="bg-success">
<?php if($this->session->flashdata('user_registered')): ?>
<?php echo $this->session->flashdata('user_registered'); ?>
<?php endif; ?>
</p>
<div class="jumbotron">
    <h2 class="text-center">Welcome to the CI APP</h2>
</div>
<?php if(isset($projects)): ?>
<div class="panel panel-primary">
<div class="panel-heading">
<div class="panel-body">
<ul class="list-group">
<h3 class="text-center">Projects</h3>
</div>
<?php foreach($projects as $project): ?>
<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/display/<?php echo $project->id; ?>"><?php echo $project->project_name; ?></a>
</li>    
<?php endforeach; ?>


<?php endif; ?>
</ul>
</div>
</div>

<?php if(isset($tasks)): ?>
<h2 class="text-muted">Tasks</h2>
<table class="table table-bordered">

	<thead>
		<tr>
			<th>Task Name</th>
			<th>Task Description</th>
		</tr>
	</thead>
	<tbody>

<?php foreach($tasks as $task): ?>
	<tr>
            <td><?php echo $task->task_name; ?></td>
            <td><?php echo $task->task_body; ?></td>
            <td><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->id; ?>">View</a></td>
<?php endforeach; ?>

	</tr>
	</tbody>
</table>
<?php endif; ?>