<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CV Generator</title>
    <style>
        table, td, caption {
            border: 1px solid #000000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <caption>Personal Inforamtion</caption>
        <tr>
            <td>First Name</td>
            <td><?php echo htmlspecialchars($_POST['firstName']); ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo htmlspecialchars($_POST['lastName']); ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo htmlspecialchars($_POST['phone']); ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo htmlspecialchars($_POST['sex']); ?></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><?php echo htmlspecialchars($_POST['birthdate']); ?></td>
        </tr>
        <tr>
            <td>Nationality</td>
<!--            <td>--><?php //echo htmlspecialchars($_POST['nat']); ?><!--</td>-->
        </tr>
    </table>
    <table>
        <caption>Last Work Position</caption>
        <tr>
            <td>Company Name</td>
            <td><?php echo htmlspecialchars($_POST['company']); ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?php echo htmlspecialchars($_POST['from']); ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?php echo htmlspecialchars($_POST['to']); ?></td>
        </tr>
    </table>
    <table>
        <caption>Computer Skills</caption>
        <tr>
            <td>Programming Languages</td>
            <td>
                <table>
                    <thead>
                        <tr>
                            <td>Language</td>
                            <td>Skill Level</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo htmlspecialchars($_POST['progLang']); ?></td>
    <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr>
                        <tr>
                            <td><?php echo htmlspecialchars($_POST['progLang']); ?></td>
    <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
    <table>
        <caption>Other Skills</caption>
        <tr>
            <td>Languages</td>
            <td>
                <table>
                    <thead>
                        <tr>
                            <td>Language</td>
                            <td>Comprehension</td>
                            <td>Reading</td>
                            <td>writing</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo htmlspecialchars($_POST['lang']); ?></td>
                            <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr>
                        <tr>
                            <td><?php echo htmlspecialchars($_POST['lang']); ?></td>
                            <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr><tr>
                            <td><?php echo htmlspecialchars($_POST['lang']); ?></td>
                            <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr>
                        <tr>
                            <td><?php echo htmlspecialchars($_POST['lang']); ?></td>
                            <!--                        <td>--><?php //echo htmlspecialchars($_POST['progLangSelect']); ?><!--</td>-->
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>Driver's License</td>
            <td><?php echo htmlspecialchars(implode(', ', $_POST['license'])); ?></td>
        </tr>
    </table>
</body>