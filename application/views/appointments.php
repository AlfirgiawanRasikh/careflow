<?php $this->load->view('layouts/header', ['title' => $title]); ?>

<?php $this->load->view('layouts/sidebar'); ?>

<main class="main">
    <div class="content">

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 28px;
        ">
            <div>
                <div style="
                    font-size: 13px;
                    color: #94a3b8;
                    margin-bottom: 7px;
                ">
                    Clinic scheduling
                </div>

                <h1 style="
                    font-size: 28px;
                    letter-spacing: -0.7px;
                ">
                    Appointments
                </h1>

                <p style="
                    margin-top: 7px;
                    color: #64748b;
                    font-size: 14px;
                ">
                    Manage upcoming patient appointments.
                </p>
            </div>

            <button
                type="button"
                style="
                    background: #111827;
                    color: white;
                    border: none;
                    padding: 11px 16px;
                    border-radius: 8px;
                    font-size: 14px;
                    font-weight: 600;
                    cursor: pointer;
                "
            >
                + New Appointment
            </button>
        </div>


        <div style="
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            overflow: hidden;
        ">

            <div style="
                padding: 20px 22px;
                border-bottom: 1px solid #eef0f3;
                display: flex;
                justify-content: space-between;
                align-items: center;
            ">
                <div>
                    <h2 style="
                        font-size: 17px;
                        margin-bottom: 4px;
                    ">
                        Appointment schedule
                    </h2>

                    <p style="
                        color: #94a3b8;
                        font-size: 13px;
                    ">
                        <?= count($appointments) ?> appointments
                    </p>
                </div>

                <input
                    type="text"
                    placeholder="Search patient..."
                    style="
                        width: 220px;
                        padding: 10px 12px;
                        border: 1px solid #dfe3e8;
                        border-radius: 8px;
                        font-size: 13px;
                    "
                >
            </div>


            <div style="overflow-x: auto;">

                <table style="
                    width: 100%;
                    border-collapse: collapse;
                    font-size: 14px;
                ">

                    <thead>
                        <tr style="
                            background: #fafafa;
                            text-align: left;
                        ">

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                            ">
                                DATE
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                            ">
                                TIME
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                            ">
                                PATIENT
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                            ">
                                TREATMENT
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                            ">
                                STATUS
                            </th>

                        </tr>
                    </thead>

                    <tbody>

                    <?php if (!empty($appointments)): ?>

                        <?php foreach ($appointments as $appointment): ?>

                            <tr style="
                                border-top: 1px solid #f1f3f5;
                            ">

                                <td style="padding: 16px 20px;">
                                    <?= date(
                                        'd M Y',
                                        strtotime($appointment->appointment_date)
                                    ); ?>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                    font-weight: 600;
                                ">
                                    <?= date(
                                        'H:i',
                                        strtotime($appointment->appointment_time)
                                    ); ?>
                                </td>

                                <td style="padding: 16px 20px;">

                                    <div style="font-weight: 600;">
                                        <?= htmlspecialchars(
                                            $appointment->patient_name
                                        ); ?>
                                    </div>

                                    <div style="
                                        margin-top: 3px;
                                        color: #94a3b8;
                                        font-size: 12px;
                                    ">
                                        <?= htmlspecialchars(
                                            $appointment->medical_record_number
                                        ); ?>
                                    </div>

                                </td>

                                <td style="
                                    padding: 16px 20px;
                                    color: #64748b;
                                ">
                                    <?= htmlspecialchars(
                                        $appointment->treatment_name
                                    ); ?>
                                </td>

                                <td style="padding: 16px 20px;">

                                    <?php
                                    $status = $appointment->status;

                                    $status_style = match ($status) {
                                        'Confirmed' => [
                                            'background: #ecfdf5;',
                                            'color: #047857;'
                                        ],
                                        'Completed' => [
                                            'background: #eff6ff;',
                                            'color: #1d4ed8;'
                                        ],
                                        'Cancelled' => [
                                            'background: #fef2f2;',
                                            'color: #b91c1c;'
                                        ],
                                        default => [
                                            'background: #f8fafc;',
                                            'color: #475569;'
                                        ]
                                    };
                                    ?>

                                    <span style="
                                        display: inline-block;
                                        padding: 5px 9px;
                                        border-radius: 999px;
                                        font-size: 12px;
                                        font-weight: 600;
                                        <?= implode('', $status_style); ?>
                                    ">
                                        <?= htmlspecialchars($status); ?>
                                    </span>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="5" style="
                                padding: 40px;
                                text-align: center;
                                color: #94a3b8;
                            ">
                                No appointments found.
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
