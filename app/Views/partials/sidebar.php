<div>
    <div class="menu-container px-1 has-background-white">
        <div class="menu-wrapper py-1">
            <aside class="menu">
                <p class="menu-label has-text-lighter">General</p>
                <ul class="menu-list">
                    <li>
                        <a href="<?= base_url('dashboard') ?>" class="has-text-black">
                            <i class="fas fa-tachometer-alt icon"></i> Dashboard
                        </a>
                    </li>
                </ul>
                <p class="menu-label has-text-lighter">Administration</p>
                <ul class="menu-list">
                    <li>
                        <a href="<?= base_url('settings') ?>" class="is-active has-background-primary">
                            <i class="fas fa-cogs icon"></i> Settings
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('team') ?>" class="has-text-black">
                            <i class="fas fa-users-cog icon"></i> Manage Team
                        </a>
                        <ul>
                            <li>
                                <a href="<?= base_url('team/members') ?>" class="has-text-black">
                                    <i class="fas fa-users icon"></i> Members
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('team/add') ?>" class="has-text-black">
                                    <i class="fas fa-user-plus icon"></i> Add New
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <p class="menu-label has-text-lighter">Other</p>
                <ul class="menu-list">
                    <li>
                        <a href="<?= base_url('chats') ?>" class="has-text-black">
                            <i class="fas fa-comments icon"></i> Chats
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('extras') ?>" class="has-text-black">
                            <i class="fas fa-info-circle icon"></i> Extras
                        </a>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
</div>

