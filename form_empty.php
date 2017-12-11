<!DOCTYPE html>
<html lang="en-GB">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Piecuch Patryk - portfolio Junior Web Developer || United Kingdom, Telford</title>
    <?php include 'include/header.php'; ?>
</head>

<body>
    <header class="main-header">
        <?php include 'include/heading.php'; ?>
    </header>
    <nav class="main-nav">
        <?php include 'include/navigation.php'; ?>
    </nav>
    <main class="main-contact">
        <h2>Feel free to contact with me</h2>
        <form class="contact-form" method="post" name="contact-form" action="mail.php">
            <input type="text" name="name" placeholder="Name">
            <input type="email" name="email" placeholder="E-mail">
            <textarea type="text" name="message" placeholder="Message" rows="5"></textarea>
            <button type="submit" id="submit" title="send message">Submit</button>
            <h3 class="confirmation">Error. Form empty. Please fill all the fields in the contact form.</h3>
        </form>
    </main>
    <div style="clear:both;"></div>
    <section class="section">
        <?php include 'include/quote_section.php'; ?>
    </section>
    <footer>
        <?php include 'include/footer.php'; ?>
    </footer>

    <?php include 'include/javaScripts.php'; ?>
</body>

</html>
