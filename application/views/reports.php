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
                Business overview
            </div>

            <h1 style="
                font-size:28px;
                letter-spacing:-0.7px;
            ">
                Reports
            </h1>

            <p style="
                margin-top:7px;
                color:#64748b;
                font-size:14px;
            ">
                Summary of clinic operations and financial activity.
            </p>
        </div>


        <div style="
            display:grid;
            grid-template-columns:repeat(4, 1fr);
            gap:16px;
            margin-bottom:24px;
        ">

            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:20px;
            ">
                <div style="font-size:12px;color:#94a3b8;">
                    TOTAL INVOICES
                </div>

                <div style="
                    margin-top:8px;
                    font-size:28px;
                    font-weight:700;
                ">
                    <?= $billing_summary->total_invoices ?? 0; ?>
                </div>
            </div>


            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:20px;
            ">
                <div style="font-size:12px;color:#94a3b8;">
                    PAID
                </div>

                <div style="
                    margin-top:8px;
                    font-size:28px;
                    font-weight:700;
                ">
                    <?= $billing_summary->paid_invoices ?? 0; ?>
                </div>
            </div>


            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:20px;
            ">
                <div style="font-size:12px;color:#94a3b8;">
                    UNPAID
                </div>

                <div style="
                    margin-top:8px;
                    font-size:28px;
                    font-weight:700;
                ">
                    <?= $billing_summary->unpaid_invoices ?? 0; ?>
                </div>
            </div>


            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:20px;
            ">
                <div style="font-size:12px;color:#94a3b8;">
                    TOTAL REVENUE
                </div>

                <div style="
                    margin-top:8px;
                    font-size:24px;
                    font-weight:700;
                ">
                    Rp<?= number_format(
                        $billing_summary->total_revenue ?? 0,
                        0,
                        ',',
                        '.'
                    ); ?>
                </div>
            </div>

        </div>


        <div style="
            background:white;
            border:1px solid #e5e7eb;
            border-radius:12px;
            overflow:hidden;
        ">

            <div style="
                padding:20px 22px;
                border-bottom:1px solid #eef0f3;
            ">
                <h2 style="font-size:17px;">
                    Appointment summary
                </h2>

                <p style="
                    color:#94a3b8;
                    font-size:13px;
                    margin-top:4px;
                ">
                    Current appointment status distribution.
                </p>
            </div>

            <?php foreach ($appointment_summary as $summary): ?>

                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    padding:16px 22px;
                    border-bottom:1px solid #f1f3f5;
                ">

                    <span style="
                        font-size:14px;
                        font-weight:600;
                    ">
                        <?= htmlspecialchars($summary->status); ?>
                    </span>

                    <span style="
                        font-size:14px;
                        color:#64748b;
                    ">
                        <?= $summary->total; ?> appointments
                    </span>

                </div>

            <?php endforeach; ?>

        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
