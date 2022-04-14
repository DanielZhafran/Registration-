<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
  <h1> Registration Form</h1>
<form action="register_check.php" method="POST">
 <table width="200" >
      <tbody> 
      <tr>
        <td >Name</td>
        <td>:</td>
    <td><input type="text"  name="name"  required></td> </tr>

    <tr>
    <td >NRIC / Passport</td>
    <td>:</td>
    <td><input type="number" maxlength="12" name="noIC"   required>
 </td> </tr>

  <tr>
    <td >Email address</td>
    <td>:</td>
    <td><input type="email"  name="email"  required>
  </td> </tr>

  <tr>
      <td  >State</td>
      <td>:</td>
      <td><?php
    $negeri = array('Choose Your State:-','Pulau Pinang','Kedah','Perak','Perlis','Selangor','Kelantan','Melaka','Terengganu','Negeri Sembilan','Pahang','Johor','Sabah','Sarawak');
    echo "<select name='negeri'>";
      for ($i = 0;$i < count($negeri);$i++)
      {
        echo "<option value='$negeri[$i]'>".$negeri[$i]."</option>";
      }
    echo "</select>"
  ?>
   </td> </tr>

  <tr>
    <td >Password</td>
    <td>:</td>
    <td><input type="password"  id="password"  required>
  </td> </tr>
  <tr>
    <td >Verify Password</td>
    <td>:</td>
    <td><input type="password" id="vpassword"  required>
  </td> </tr>

      <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td><input type="submit" name="submit" ></td>
      </tr>
</form>

  </tbody>
  </table>