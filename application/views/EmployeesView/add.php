<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Employee</title>
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
  h1 {
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
  input[type="number"],
  input[type="email"],
  select {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
  }
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background: url('data:image/svg+xml;utf8,<svg fill="%23000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7 10l5 5 5-5H7z"/></svg>') no-repeat right 10px center;
    background-size: 16px;
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
  <h1>Add Employee</h1>
  <form action="" method="post">
    <div class="form-group">
      <label for="employee-name">Employee Name</label>
      <input type="text" id="employee-name" name="employee-name" required>
    </div>
    <div class="form-group">
      <label for="designation">Designation</label>
      <select id="designation" name="designation" required>
        <option value="Software Developer">Software Developer</option>
        <option value="Web Developer">Web Developer</option>
        <option value="Cloud Developer">Cloud Developer</option>
        <option value="Network Engineer">Network Engineer</option>
      </select>
    </div>
    <div class="form-group">
      <label for="employee-id">Employee ID (Email)</label>
      <input type="email" id="employee-id" name="employee-id" required>
    </div>
    <div class="form-group">
      <label for="mob-number">Mobile Number</label>
      <input type="number" id="mob-number" name="mob-number" required>
    </div>
    <div class="form-group">
      <input type="file" id="avatar" name="avatar" class="avatar-input" accept="image/*" onchange="previewAvatar(event)">
      <label for="avatar" class="avatar-label">Upload Avatar</label>
      <div class="avatar-preview" id="avatar-preview"></div>
    </div>
    <input type="submit" name="add" class="submit-btn">
  </form>
</div>
<script>
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
</script>
</body>
</html>
