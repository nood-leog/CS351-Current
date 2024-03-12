<!DOCTYPE html>

<html lang="en">
    <head>
        <title>CS 351 Final Exam</title>
        <link rel="stylesheet" href="/FinalExam/javascript/styles/main.css">
    </head>

    <body>
        <header>
            <h1>CS 351 Final Exam</h1>
        </header>

        <main>
            <form action="/FinalExam/index.php" method="post">
                <table>
                    <tr>
                        <td>
                            First name:
                        </td>
                        <td>
                            <input type="text" id="first_name" name="first_name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Last name:
                        </td>
                        <td>
                            <input type="text" id="last_name" name="last_name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Height (in inches):
                        </td>
                        <td>
                            <input type="text" id="height" name="height">
                        </td>
                    </tr>

                </table>
                <input type="submit" value="Update Name" id="name_button"> 
            </form>
        </main>
        <footer>
            <p>JavaScript</p>
        </footer>
        <script src="/FinalExam/javascript/scripts/javascript.js"></script>
        
    </body>
</html>