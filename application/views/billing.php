<?php $this->load->view('layouts/header', ['title' => $title]); ?>
<?php $this->load->view('layouts/sidebar'); ?>

<main class="main">
    <div class="content">

        <div style="margin-bottom:28px;">
            <div style="font-size:13px;color:#94a3b8;margin-bottom:7px;">
                Financial operations
            </div>

            <h1 style="font-size:28px;letter-spacing:-0.7px;">
                Billing
            </h1>

            <p style="margin-top:7px;color:#64748b;font-size:14px;">
                Manage invoices and patient payments.
            </p>
        </div>

        <div style="
            display:grid;
            grid-template-columns:repeat(2,1fr);
            gap:16px;
            margin-bottom:20px;
        ">

            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:22px;
            ">
                <div style="font-size:13px;color:#94a3b8;">
                    Unpaid Invoices
                </div>

                <div style="
                    font-size:30px;
                    font-weight:700;
                    margin-top:8px;
                ">
                    <?= $unpaid_count; ?>
                </div>
            </div>

            <div style="
                background:white;
                border:1px solid #e5e7eb;
                border-radius:12px;
                padding:22px;
            ">
                <div style="font-size:13px;color:#94a3b8;">
                    Total Paid
                </div>

                <div style="
                    font-size:30px;
                    font-weight:700;
                    margin-top:8px;
                ">
                    Rp<?= number_format($total_paid, 0, ',', '.'); ?>
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
                    Invoice records
                </h2>
            </div>

            <div style="overflow-x:auto;">

                <table style="
                    width:100%;
                    border-collapse:collapse;
                    font-size:14px;
                ">

                    <thead>
                        <tr style="background:#fafafa;text-align:left;">
                            <th style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                INVOICE
                            </th>

                            <th style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                PATIENT
                            </th>

                            <th style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                TREATMENT
                            </th>

                            <th style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                AMOUNT
                            </th>

                            <th style="padding:13px 20px;color:#94a3b8;font-size:12px;">
                                STATUS
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php foreach ($billings as $billing): ?>

                        <tr style="border-top:1px solid #f1f3f5;">

                            <td style="padding:16px 20px;font-weight:600;">
                                <?= htmlspecialchars($billing->invoice_number); ?>
                            </td>

                            <td style="padding:16px 20px;">
                                <div style="font-weight:600;">
                                    <?= htmlspecialchars($billing->patient_name); ?>
                                </div>

                                <div style="
                                    color:#94a3b8;
                                    font-size:12px;
                                    margin-top:3px;
                                ">
                                    <?= htmlspecialchars($billing->medical_record_number); ?>
                                </div>
                            </td>

                            <td style="padding:16px 20px;color:#64748b;">
                                <?= htmlspecialchars($billing->treatment_name); ?>
                            </td>

                            <td style="padding:16px 20px;font-weight:600;">
                                Rp<?= number_format($billing->amount, 0, ',', '.'); ?>
                            </td>

                            <td style="padding:16px 20px;">

                                <?php if ($billing->payment_status === 'Paid'): ?>

                                    <span style="
                                        display:inline-block;
                                        padding:5px 9px;
                                        border-radius:999px;
                                        background:#ecfdf5;
                                        color:#047857;
                                        font-size:12px;
                                        font-weight:600;
                                    ">
                                        Paid
                                    </span>

                                <?php else: ?>

                                    <span style="
                                        display:inline-block;
                                        padding:5px 9px;
                                        border-radius:999px;
                                        background:#fff7ed;
                                        color:#c2410c;
                                        font-size:12px;
                                        font-weight:600;
                                    ">
                                        Unpaid
                                    </span>

                                <?php endif; ?>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                    </tbody>
                </table>

            </div>
        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
