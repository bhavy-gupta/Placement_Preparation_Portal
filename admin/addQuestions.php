<html>

<body>
    <form method="post" action="saveQuestion.php">
        <table align="center" border="1" width="50%">

            <th colspan="2"> Add Question</th>
            <tr>
                <td>
                    <div class="labl">Difficulty Level : </div>
                </td>
                <td><input type="string" name="diff"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Question : </div>
                </td>
                <td><input type="string" name="ques"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Option-1 : </div>
                </td>
                <td><input type="string" name="opt1"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Option-2 : </div>
                </td>
                <td><input type="string" name="opt2"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Option-3 : </div>
                </td>
                <td><input type="string" name="opt3"> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Option-4 : </div>
                </td>
                <td><input type="string" name="opt4"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Right Answer : </div>
                </td>
                <td><input type="string" name="rans"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Companies : </div>
                </td>
                <td><input type="string" name="comp"></td>
            </tr>


            <th colspan="2" style="background-color:#0055CC;"> <input type="submit" name="submit" value="Save Details" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;">
            </th>
        </table>

    </form>
</body>

</html>