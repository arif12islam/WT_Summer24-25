<!doctype html>
<html>
  <body>
    <center>
    <h1 style="color: blue;">AIUB</h1>
    <h2 style="color: blue;">Registration Form</h2>
    </center>
    <h3>Complete the Registration</h3>


  <table>
    <tr>
      <td><label>Full Name:</label></td>
      <td><input type="text" required></td>
    </tr>
    <tr>
      <td><label>Email:</label></td>
      <td><input type="email" required></td>
    </tr>
    <tr>
      <td><label>Password:</label></td>
      <td><input type="password" required></td>
    </tr>
    <tr>
      <td><label>Gender:</label></td>
      <td>
        <input type="radio" name="gender" value="male">
        <label>Male</label>
        <input type="radio" name="gender" value="female">
        <label>Female</label>
      </td>
    </tr>
    <tr>
      <td><label>Language Known:</label></td>
      <td>
        <input type="checkbox" value="English">
        <label>English</label>
        <input type="checkbox" value="Bangla">
        <label>Bangla</label>
        <input type="checkbox" value="Hindi">
        <label>Hindi</label>
      </td>
    </tr>
    <tr>
      <td><label>Country:</label></td>
      <td>
        <select required>
          <option value="">--Select--</option>
          <option>Bangladesh</option>
          <option>India</option>
          <option>Pakistan</option>
          <option>Nepal</option>
        </select>
      </td>
    </tr>
    <tr>
      <td><label>Date of Birth:</label></td>
      <td><input type="date" required></td>
    </tr>
    <tr>
      <td>Upload Photo:</label></td>
      <td><input type="file" accept="image/*" required></td>
    </tr>
    <tr>
        <td><label>Comment:</label></td>
        <td>
         <textarea rows="4" cols="50"></textarea><br>
        <input type="submit" value="Register">
        </td>
    </tr>
  </table>

  </body>
</html>
