<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Listing</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
  }
  h2 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th:last-child, td:last-child {
    text-align: center;
  }
  .avatar {
    width: 50px;
    height: 50px;
    border-radius: 50%;
  }
  .edit-icon, .delete-icon {
    cursor: pointer;
    margin-right: 5px;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Employee Listing</h2>
  <table>
    <thead>
      <tr>
        <th>Avatar</th>
        <th>Employee Name</th>
        <th>Designation</th>
        <th>Employee ID</th>
        <th>Mobile Number</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
  <!-- Data will be populated dynamically from the backend -->
  <!-- <?php  print_r($item) ?> -->

  <?php foreach($item as $row): ?>

  <tr>
    <td><img src="<?php echo $row->avatar ?>" alt="Avatar" class="avatar"></td>
    <td><?php echo $row->emp_name ?></td>
    <td><?php echo $row->designation ?></td>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->mobile ?></td>
    <td>
      <a href="edit?id=<?php echo $row->emp_id?>" style="text-decoration:none"><span class="edit-icon">&#9998;</span></a>
      <a href="delete?id=<?php echo $row->emp_id?>"  style="text-decoration:none"><span class="delete-icon">&#10060;</span></a>
    </td>
  </tr>
  <?php endforeach; ?>
</tbody>


  </table>
</div>
</body>
</html>
