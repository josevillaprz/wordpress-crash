<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- imports stylesheet into header -->
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
    <main>
        main content
    </main>
    <!-- imports script at bottom of footer -->
    <?php wp_footer(); ?>
    <?php get_footer(); ?>
</body>
</html>