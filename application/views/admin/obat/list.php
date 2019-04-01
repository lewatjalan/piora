<!-- Tampilkan halaman Dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/Logo PIO.png">

    <title>Administrator PIORA</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="<?php echo base_url();?>/font-awesome/css/font-awesome.css" rel="stylesheet">

  </head>

  <body>

    <nav><?php include 'template/navbar.php'; ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $home = "class='active'"; ?>
              <?php include 'template/sidebar.php'; ?>
          </aside>

          <section id="konten">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Halo <?php echo $this->session->userdata("nama"); ?></h1>

  <div class="container top">

<ul class="breadcrumb">
  <li>
    <a href="<?php echo site_url("admin"); ?>">
      <?php echo ucfirst($this->uri->segment(1));?>
    </a> 
    <span class="divider">/</span>
  </li>
  <li class="active">
    <?php echo ucfirst($this->uri->segment(2));?>
  </li>
</ul>

<div class="page-header users-header">
  <h2>
    <?php echo ucfirst($this->uri->segment(2));?> 
    <a  href="<?php echo site_url("admin").'/'.$this->uri->segment(2); ?>/add" class="btn btn-success">Add a new</a>
  </h2>
</div>

<div class="row">
  <div class="span12 columns">

    <table class="table table-striped table-bordered table-condensed">
      <thead>
        <tr>
          <th class="header">#</th>
          <th class="yellow header headerSortDown">Nama Obat</th>
          <th class="green header">Merek Dagang</th>
          <th class="red header">Penulis</th>
          <th class="red header">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
       // foreach($products as $row)
        {
         // echo '<tr>';
         // echo '<td>'.$row['id'].'</td>';
         // echo '<td>'.$row['description'].'</td>';
         // echo '<td>'.$row['stock'].'</td>';
         // echo '<td>'.$row['cost_price'].'</td>';
          // echo '<td>'.$row['sell_price'].'</td>';
        //  echo '<td>'.$row['manufacture_name'].'</td>';
          echo '<td class="crud-actions">
          </td>';
          echo '</tr>';
        }
        ?>      
      </tbody>
    </table>

    <?php echo '<div class="pagination">'.$this->pagination->create_links().'</div>'; ?>

</div>
</div>

          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/holder.js"></script>
  </body>
</html>
