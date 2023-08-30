<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>First Number:</td>
                    <td><input type="text" name = "num1"></td>
                    <td rowspan="2"><input type="submit" name = "submit" value="calculate"></td>
                </tr>

                <tr>
                    <td>Second Number:</td>
                    <td><input type="text" name = "num2"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['$num1'];
            $num2 = $_POST['$num2'];

            if(is_numeric($num1) && is_numeric($num2)){
                echo"Addition:".($num1+$num2);
                echo"Subtraction".($num1-$num2);
                echo"Multiplication".($num1*$num2);
                echo"Division".($num1/$num2);
            }
            else{
                echo"<script>alert('Enter valid number!')</script>";
            }
        }
        ?>
    </body>
</html>