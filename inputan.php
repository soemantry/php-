<!DOCTYPE html>

<html>

  <head>
    <title>Input data</title>

  </head>

  <body>

    <form method="POST" action="simpan.php">

      <table>

        <tr>

          <td>ID</td>

          <td><input type="text" name="Id"></td>

        </tr>

        <tr>

          <td>Username</td>

          <td><input type="text" name="Usernamse"></td>

        </tr>

        <tr>

          <td>Password</td>

          <td><input type="password" name="Password"></td>

        </tr>

        <tr>

          <td style="vertical-align: top">Level</td>

          <td>

            <input type="radio" name="Level" value="admin">Admin<br>

            <input type="radio" name="Level" value="user">User<br>

            <input type="radio" name="Level" value="guest">Guest

          </td>

        </tr>

        <tr>

          <td>Fullname</td>

          <td><input type="text" name="Fullname"></td>

        </tr>

        <tr>

          <td><button type="submit" value="simpan">SIMPAN</button></td>

        </tr>

      </table>

    </form>

  </body>

</html>
