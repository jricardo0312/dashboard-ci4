<nav class="navbar is-fixed-top box-shadow-y">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger toggler" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
        <a href="<?= base_url() ?>" class="navbar-item has-text-weight-bold has-text-black">
            FrontEndFunn
        </a>
        <a role="button" class="navbar-burger nav-toggler" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>
    <div class="navbar-menu has-background-white">
        <div class="navbar-start">
            <a href="<?= base_url() ?>" class="navbar-item">
                <i class="fas fa-home icon"></i> Home
            </a>
            <a href="<?= base_url('about') ?>" class="navbar-item">About</a>
            <a href="<?= base_url('features') ?>" class="navbar-item">Features</a>
            <a href="<?= base_url('pricing') ?>" class="navbar-item">Pricing</a>
        </div>
        <div class="navbar-end">
            <a href="<?= base_url('notifications') ?>" class="navbar-item">Notifications</a>
            <div class="navbar-item has-dropdown is-hoverable">
                <a href="#" class="navbar-link">Admin</a>
                <div class="navbar-dropdown is-right">
                    <a href="<?= base_url('profile') ?>" class="navbar-item">Profile</a>
                    <a href="<?= base_url('settings') ?>" class="navbar-item">Settings</a>
                    <hr class="navbar-divider" />
                    <a href="<?= base_url('logout') ?>" class="navbar-item">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</nav>

