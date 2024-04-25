<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Employee</title>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
  }
  .container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  h2 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }
  form {
    display: grid;
    gap: 20px;
  }
  .form-group {
    position: relative;
  }
  label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }
  input[type="text"],
  input[type="email"],
  input[type="number"],
  select {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }
  .avatar-input {
    display: none;
  }
  .avatar-label {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    text-align: center;
    cursor: pointer;
  }
  .avatar-label:hover {
    background-color: #0056b3;
  }
  .avatar-preview {
    margin-top: 10px;
    text-align: center;
  }
  .avatar-preview img {
    max-width: 100%;
    max-height: 200px;
    border-radius: 5px;
  }
  .submit-btn {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 15px 0;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    text-align: center;
  }
  .submit-btn:hover {
    background-color: #45a049;
  }
</style>
</head>
<body>
<div class="container">
  <h2>Edit Employee</h2>
  <?php  print_r($item[0])?>

  <form action="#" method="post">
    <div class="form-group">
      <label for="avatar">Avatar</label>
      <input type="file"  id="avatar" name="avatar" class="avatar-input" accept="image/*">
      <label for="avatar" class="avatar-label">Upload New Avatar</label>
      <div class="avatar-preview" id="avatar-preview"></div>
    </div>
    <div class="form-group">
      <label for="employee-name">Employee Name</label>
      <input type="text" id="employee-name" name="employee-name" value="<?php  echo $item[0]->emp_name; ?>" required>
    </div>


    <div class="form-group">
      <label for="designation">Designation</label>
      <select id="designation" name="designation" required>
      <option value="<?php  echo $item[0]->designation; ?>"><?php  echo $item[0]->designation; ?></option>
        <option value="Software Developer">Software Developer</option>
        <option value="Web Developer">Web Developer</option>
        <option value="Cloud Developer">Cloud Developer</option>
        <option value="Network Engineer">Network Engineer</option>
      </select>
    </div>


    <div class="form-group">
      <label for="employee-id">Employee ID (Email)</label>
      <input type="email" id="employee-id" name="employee-id" value="<?php  echo $item[0]->email; ?>" required>
    </div>
    <div class="form-group">
      <label for="mob-number">Mobile Number</label>
      <input type="number" id="mob-number" name="mob-number" value="<?php  echo $item[0]->mobile; ?>" required>
    </div>
    <button type="submit" class="submit-btn">Save Changes</button>
  </form>
</div>

<script>
  // Function to display the selected avatar image
  function previewAvatar(event) {
    const preview = document.getElementById('avatar-preview');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onloadend = function () {
      const img = document.createElement('img');
      img.src = reader.result;
      preview.innerHTML = '';
      preview.appendChild(img);
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.innerHTML = 'No file selected';
    }
  }

  // Add event listener to the avatar input field
  document.getElementById('avatar').addEventListener('change', previewAvatar);
</script>
</body>
</html>
