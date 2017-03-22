<?php include "php/mail.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Простая форма PHP+капча с вопросами</title>
</head>
<body>
    <?php if(!empty($_SESSION['mes'])): ?>
     <script>alert('<?php echo $_SESSION['mes'] ?>')</script>
     <?php $_SESSION['mes'] = null; ?>
 <?php endif; ?>
 <form method="post">
    <table>
        <tr>
            <td>Текст: </td><td><input type="text" name="text" required/>       </td>
        </tr>
        <tr>
            <td>Выражение: </td><td><input type="text" name="res" required/></td>
        </tr>
        <tr>
            <td><?php echo $question[$key][0];?></td><td><input type="text" name="res" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="отправить" /></td>
        </tr> 
    </table>
</form>
</body> 
</html> 