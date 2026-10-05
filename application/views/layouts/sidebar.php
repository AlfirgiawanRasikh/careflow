<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$current_page = $this->uri->segment(1);

$active = function ($page) use ($current_page) {
    return $current_page === $page
        ? 'background: #f1f5f9; color: #111827; font-weight: 600;'
        : 'color: #64748b;';
};
?>

<aside style="
    width: 250px;
    min-width: 250px;
    background: #ffffff;
    border-right: 1px solid #e5e7eb;
    padding: 24px 16px;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
">

    <!-- BRAND -->

    <div style="
        padding: 6px 12px 30px;
    ">
        <div style="
            font-size: 21px;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: #111827;
        ">
            CareFlow
        </div>

        <div style="
            margin-top: 5px;
            font-size: 12px;
            color: #94a3b8;
        ">
            Clinic Operations
        </div>
    </div>


    <!-- NAVIGATION -->

    <nav>

        <!-- OVERVIEW -->

        <div style="
            padding: 0 12px;
            margin-bottom: 9px;
            color: #9ca3af;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        ">
            Overview
        </div>

        <a
            href="<?= base_url('index.php/dashboard'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('dashboard'); ?>
            "
        >
            Dashboard
        </a>


        <!-- OPERATIONS -->

        <div style="
            padding: 23px 12px 9px;
            color: #9ca3af;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        ">
            Operations
        </div>

        <a
            href="<?= base_url('index.php/patient'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('patient'); ?>
            "
        >
            Patients
        </a>

        <a
            href="<?= base_url('index.php/appointment'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('appointment'); ?>
            "
        >
            Appointments
        </a>

        <a
            href="<?= base_url('index.php/treatment'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('treatment'); ?>
            "
        >
            Treatments
        </a>

        <a
            href="<?= base_url('index.php/billing'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('billing'); ?>
            "
        >
            Billing
        </a>


        <!-- MANAGEMENT -->

        <div style="
            padding: 23px 12px 9px;
            color: #9ca3af;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        ">
            Management
        </div>

        <a
            href="<?= base_url('index.php/report'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('report'); ?>
            "
        >
            Reports
        </a>


        <!-- SYSTEM -->

        <div style="
            padding: 23px 12px 9px;
            color: #9ca3af;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        ">
            System
        </div>

        <a
            href="<?= base_url('index.php/settings'); ?>"
            style="
                display: block;
                padding: 11px 12px;
                margin-bottom: 4px;
                border-radius: 8px;
                font-size: 14px;
                <?= $active('settings'); ?>
            "
        >
            Settings
        </a>

    </nav>


    <!-- FOOTER -->

    <div style="
        margin-top: auto;
        padding: 18px 12px 4px;
        border-top: 1px solid #f1f3f5;
    ">

        <div style="
            font-size: 12px;
            color: #94a3b8;
        ">
            CareFlow v1.0
        </div>

        <div style="
            margin-top: 4px;
            font-size: 11px;
            color: #cbd5e1;
        ">
            Clinic Operations System
        </div>

    </div>

</aside>
