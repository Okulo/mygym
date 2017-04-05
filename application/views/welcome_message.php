<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>MyGym</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
<nav class="navbar navbar-light mb-3" style="background-color: #e3f2fd;">
   
          <div class="navbar-toggleable-md ">
            <ul class="nav navbar-nav text-md-center justify-content-md-between">
              <li class="nav-item">
                <a class="nav-link" href="#">Рецепция</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Продажи</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Касса</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Инструктор</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Врач</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Бар</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Бутик</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url();?>admin">Админ</a>
              </li>                                          
            </ul>
          </div>
        </nav>
        
                
    <div class="container">
      <div class="jumbotron">
      
        <h1><?php
        if (!$this->ion_auth->is_admin())
		{
			echo "you are not admin! <br /><br />";
		}
        echo '<pre>'; 
        print_r($this->session->all_userdata());
        echo '</pre>';
        	# multiple groups (by name)
		$group = array('supervisor', 'coach');
		if (!$this->ion_auth->in_group($group, false, true)){
			$this->session->set_flashdata('message', 'You must be a gangsta OR a hoodrat to view this page');
   echo '<div data-form-alert-success="true" class="alert alert-form alert-danger text-xs-center">'.$this->session->flashdata("message").'</div>';
                       
		}
	echo $user->first_name." ".$user->last_name;
    echo "<br />";
   
?></h1>

<?php foreach ($this_user_groups as $group):?>
                                <?php echo $group->description;?>,
                            <?php endforeach?>
        <pre>
        <?php
	var_dump($user);
?></pre>
        <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
        <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
