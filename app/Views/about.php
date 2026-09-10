<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - About</title>
</head>
<body>
    <nav>
        <a href="<?= base_url('/') ?>">Home</a> |
        <a href="<?= base_url('about') ?>">About</a> |
        <a href="<?= base_url('customers') ?>">Customer Accounts</a> |
        <a href="<?= base_url('users') ?>">User Accounts</a>
    </nav>

    <h1>About Our POS System</h1>

    <p>
        This website is a basic Point-of-Sale system
        created using CodeIgniter 4.
    </p>

    <p>
        It contains pages for viewing customer accounts and user accounts.
        The records currently come from static PHP arrays instead of a database.
    </p>
</body>
</html>