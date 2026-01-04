<?= $this->extend('layouts/admin_layout') ?>

<?= $this->section('content') ?>

<div class="columns is-variable is-desktop">
    <div class="column">
        <h1 class="title">Dashboard</h1>
    </div>
</div>

<div class="columns is-variable is-desktop">
    <div class="column">
        <div class="card has-background-primary has-text-white">
            <div class="card-header">
                <div class="card-header-title has-text-white">Top Seller Total</div>
            </div>
            <div class="card-content">
                <p class="is-size-3">56,590</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card has-background-warning has-text-black">
            <div class="card-header">
                <div class="card-header-title has-text-black is-uppercase">Revenue</div>
            </div>
            <div class="card-content">
                <p class="is-size-3">55%</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card has-background-info has-text-white">
            <div class="card-header">
                <div class="card-header-title has-text-white is-uppercase">Feedback</div>
            </div>
            <div class="card-content">
                <p class="is-size-3">78%</p>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card has-background-danger has-text-white">
            <div class="card-header">
                <div class="card-header-title has-text-white">Orders</div>
            </div>
            <div class="card-content">
                <p class="is-size-3">425k</p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

