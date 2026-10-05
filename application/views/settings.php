<?php $this->load->view('layouts/header', ['title' => $title]); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="main">
    <div class="content">

        <div style="margin-bottom:28px;">
            <div style="
                font-size:13px;
                color:#94a3b8;
                margin-bottom:7px;
            ">
                System configuration
            </div>

            <h1 style="
                font-size:28px;
                letter-spacing:-0.7px;
            ">
                Settings
            </h1>

            <p style="
                margin-top:7px;
                color:#64748b;
                font-size:14px;
            ">
                Application and system information.
            </p>
        </div>


        <div style="
            max-width:820px;
            display:grid;
            gap:18px;
        ">

            <section style="
                background:#ffffff;
                border:1px solid #e5e7eb;
                border-radius:12px;
                overflow:hidden;
            ">

                <div style="
                    padding:20px 22px;
                    border-bottom:1px solid #eef0f3;
                ">
                    <h2 style="font-size:17px;">
                        Application
                    </h2>

                    <p style="
                        margin-top:4px;
                        color:#94a3b8;
                        font-size:13px;
                    ">
                        Basic application configuration.
                    </p>
                </div>

                <div style="padding:0 22px;">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        padding:17px 0;
                        border-bottom:1px solid #f1f3f5;
                    ">
                        <span style="color:#64748b;font-size:14px;">
                            Application Name
                        </span>

                        <strong style="font-size:14px;">
                            <?= htmlspecialchars($app_name); ?>
                        </strong>
                    </div>

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        padding:17px 0;
                        border-bottom:1px solid #f1f3f5;
                    ">
                        <span style="color:#64748b;font-size:14px;">
                            Version
                        </span>

                        <strong style="font-size:14px;">
                            <?= htmlspecialchars($app_version); ?>
                        </strong>
                    </div>

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        padding:17px 0;
                    ">
                        <span style="color:#64748b;font-size:14px;">
                            Environment
                        </span>

                        <span style="
                            display:inline-block;
                            padding:5px 9px;
                            border-radius:999px;
                            background:#f8fafc;
                            color:#475569;
                            font-size:12px;
                            font-weight:600;
                        ">
                            <?= htmlspecialchars($environment); ?>
                        </span>
                    </div>

                </div>
            </section>


            <section style="
                background:#ffffff;
                border:1px solid #e5e7eb;
                border-radius:12px;
                overflow:hidden;
            ">

                <div style="
                    padding:20px 22px;
                    border-bottom:1px solid #eef0f3;
                ">
                    <h2 style="font-size:17px;">
                        Database
                    </h2>

                    <p style="
                        margin-top:4px;
                        color:#94a3b8;
                        font-size:13px;
                    ">
                        Current database connection status.
                    </p>
                </div>

                <div style="
                    padding:20px 22px;
                    display:flex;
                    align-items:center;
                    gap:12px;
                ">

                    <span style="
                        width:9px;
                        height:9px;
                        border-radius:50%;
                        background:<?= $database === 'Connected' ? '#22c55e' : '#ef4444'; ?>;
                    "></span>

                    <span style="
                        font-size:14px;
                        font-weight:600;
                    ">
                        <?= htmlspecialchars($database); ?>
                    </span>

                    <span style="
                        margin-left:auto;
                        color:#94a3b8;
                        font-size:13px;
                    ">
                        Microsoft SQL Server
                    </span>

                </div>
            </section>


            <section style="
                background:#ffffff;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:22px;
            ">

                <h2 style="
                    font-size:17px;
                    margin-bottom:8px;
                ">
                    Technology
                </h2>

                <div style="
                    display:flex;
                    flex-wrap:wrap;
                    gap:8px;
                    margin-top:14px;
                ">

                    <?php
                    $technologies = [
                        'CodeIgniter 3',
                        'PHP 8.2',
                        'Microsoft SQL Server',
                        'T-SQL',
                        'Stored Procedure',
                        'JavaScript',
                        'HTML / CSS'
                    ];
                    ?>

                    <?php foreach ($technologies as $technology): ?>

                        <span style="
                            display:inline-block;
                            padding:7px 10px;
                            border:1px solid #e5e7eb;
                            border-radius:7px;
                            font-size:12px;
                            color:#475569;
                            background:#fafafa;
                        ">
                            <?= htmlspecialchars($technology); ?>
                        </span>

                    <?php endforeach; ?>

                </div>

            </section>

        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
