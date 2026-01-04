<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?? 'Admin Dashboard' ?></title>
    
    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.7.5/css/bulma.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/admin.css') ?>">
</head>
<body class="has-navbar-fixed-top">
    
    <?= $this->include('partials/navbar') ?>
    
    <div class="columns is-variable is-0">
        <?= $this->include('partials/sidebar') ?>
        
        <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
            <div class="p-1">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Nice Scroll -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/admin.js') ?>"></script>
</body>
</html>

