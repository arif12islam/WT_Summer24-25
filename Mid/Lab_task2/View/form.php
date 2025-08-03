<!doctype html>
<html>
    <head>
        <title>Lab Task 2</title>
        <link href="./style.css" rel="stylesheet">
    </head>
  <body>
    <center>
    <h1>Bank Management System</h1>
    <h2>Your Trusted Financial Partner</h2>
    </center>
    <h3>Customer Registration Form</h3>


  <table>
    <tr>
      <td><label>Full Name:</label></td>
      <td><input type="text" required></td>
    </tr>
    <tr>
      <td><label>Date of Birth:</label></td>
      <td><input type="date" required></td>
    </tr>
    <tr>
    <tr>
      <td><label>Gender:</label></td>
      <td>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="female">
        <label>Female</label>
        <input type="radio" name="gender" value="other">
        <label>Other</label>
      </td>
    </tr>
    <tr>
      <td><label>Marital Status:</label></td>
      <td>
        <select required>
          <option value="">--Select--</option>
          <option>Single</option>
          <option>Married</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label>Account Type:</label></td>
      <td>
        <select required>
          <option value="">--Select--</option>
          <option>Saving</option>
          <option>Current</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label>Initial Deposit Amount:</label></td>
      <td><input type="number" required></td>
    </tr>
    <tr>
        <td><label>Mobile Number:</label></td>
        <td><input type="text" required></td>
    </tr>
    <tr>
      <td><label>Email Address:</label></td>
      <td><input type="email" required></td>
    </tr>
    <tr>
      <td><label>Address:</label></td>
      <td><textarea rows="2" cols="15" required></textarea></td>
    </tr>
    
    <tr>
      <td><label>Occupation:</label></td>
      <td><input type="text" required></td>
    </tr>
    <tr>
        <td><label>National ID(NID):</label></td>
        <td><input type="text" required></td>
    </tr>
    <tr>
        <td><label>Password:</label></td>
        <td><input type="password" required></td>
    </tr>
    <tr>
        <td><label>Upload ID Proof:</label></td>
        <td><input type="file" accept="image/*" required></td>
    </tr>
    <tr><td><input type="checkbox" required><label>I agree to the terms and conditions</label></td></tr>
    <tr class="button_">
        <td><input type="submit" class="btn" value="Register"></td>
        <td><input type="reset" class="btn" value="Clear"></td>
    </tr>
  </table>
  <div id="scroll">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore maxime ipsum hic laborum sunt quo fuga reprehenderit dignissimos laudantium, quasi ea iusto placeat cupiditate porro unde provident non quisquam omnis?</p>
  </div>

  </body>
</html>
