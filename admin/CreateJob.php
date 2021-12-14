<html>

<body>
    <form method="post" action="job.php">
        <table align="center" border="1" width="50%">

            <th colspan="2"> Add a New Job for Placement </th>
            <tr>
                <td>
                    <div class="labl">Company Name: </div>
                </td>
                <td><input type="string" name="company"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Approx Working Employee : </div>
                </td>
                <td><input type="string" name="app_emp"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Batch : </div>
                </td>
                <td><input type="string" name="batch"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Reporting Date : </div>
                </td>
                <td><input type="date" name="date"> </td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Venue: </div>
                </td>
                <td><input type="string" name="venue"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Company Criteria: </div>
                </td>
                <td><input type="string" name="criteria"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Designation : </div>
                </td>
                <td><input type="string" name="designation"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Job Profile: </div>
                </td>
                <td><input type="string" name="profile"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Job Location: </div>
                </td>
                <td><input type="string" name="location"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Salary : </div>
                </td>
                <td><input type="string" name="salary"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Bond : </div>
                </td>
                <td><input type="string" name="bond"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Terms & conditions : </div>
                </td>
                <td><input type="string" name="tnc"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Key Skills Required : </div>
                </td>
                <td><input type="string" name="skills"></td>
            </tr>
            <tr>
                <td>
                    <div class="labl">Procedure : </div>
                </td>
                <td><input type="string" name="procedure"></td>
            </tr>

            <th colspan="2" style="background-color:#0055CC;"> <input type="submit" name="submit" value="Save Job" style="font-size:16px;font-weight:bold; padding:5px;color: #0055CC; text-shadow: 2px 2px 4px orange;">
            </th>
        </table>

    </form>
</body>

</html>