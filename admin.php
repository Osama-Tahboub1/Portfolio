
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Content Management System</title>
</head>
<body>
    <nav>
        <span><a>About Me</a></span>
        <ul>
            <li>
                About me article
            </li>
        </ul>
        <span><a>Portfolio</a></span>
        <ul>
            <li>
                Projects
            </li>
        </ul>
        <span><a>Footer</a></span>
        <ul>
            <li>
                Contact email
            </li>
            <li>
                Admin page link
            </li>
        </ul>
    </nav>

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="aboutMe" value="<?php echo returnParagraph($aboutMeArticle); ?>">
            <input type="submit">
        </form>
    </div>

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="projectTitle">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="projectTitleLink">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="projectImage">
            <input type="submit">
        </form>
    </div>

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="contactEmail">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="emailSubject">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="contactIcon">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="smallContactIcon">
            <input type="submit">
        </form>
    </div>

    <div>
        <form method="post" action="admin.php">
            <input type="name" name="adminLoginLink">
            <input type="submit">
        </form>

        <form method="post" action="admin.php">
            <input type="name" name="adminLoginIcon">
            <input type="submit">
        </form>
    </div>
</body>