<?php $this->load->view('layouts/header', ['title' => $title]); ?>

<?php $this->load->view('layouts/sidebar'); ?>

<main class="main">
    <div class="content">

        <div style="
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
        ">
            <div>
                <div style="
                    font-size: 13px;
                    color: #94a3b8;
                    margin-bottom: 7px;
                ">
                    Clinic overview
                </div>

                <h1 style="
                    font-size: 28px;
                    letter-spacing: -0.7px;
                ">
                    Dashboard
                </h1>

                <p style="
                    margin-top: 7px;
                    color: #64748b;
                    font-size: 14px;
                ">
                    Overview of your clinic operations.
                </p>
            </div>

            <div style="
                font-size: 13px;
                color: #64748b;
                text-align: right;
            ">
                <?= date('l, d M Y'); ?>
            </div>
        </div>


        <!-- STAT CARDS -->

        <div style="
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 30px;
        ">

            <div style="
                background: #ffffff;
                border: 1px solid #e5e7eb;
                border-radius: 12px;
                padding: 22px;
            ">
                <div style="
                    font-size: 13px;
                    color: #94a3b8;
                ">
                    Total Patients
                </div>

                <div style="
                    font-size: 30px;
                    font-weight: 700;
                    margin-top: 8px;
                ">
                    <?= $total_patients; ?>
                </div>

                <div style="
                    font-size: 12px;
                    color: #94a3b8;
                    margin-top: 5px;
                ">
                    Registered patient records
                </div>
            </div>


            <div style="
                background: #ffffff;
                border: 1px solid #e5e7eb;
                border-radius: 12px;
                padding: 22px;
            ">
                <div style="
                    font-size: 13px;
                    color: #94a3b8;
                ">
                    Upcoming Appointments
                </div>

                <div style="
                    font-size: 30px;
                    font-weight: 700;
                    margin-top: 8px;
                ">
                    <?= $upcoming_count; ?>
                </div>

                <div style="
                    font-size: 12px;
                    color: #94a3b8;
                    margin-top: 5px;
                ">
                    Scheduled from today onward
                </div>
            </div>

        </div>


        <!-- APPOINTMENTS -->

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
                        Upcoming Appointments
                    </h2>

                    <p style="
                        color: #94a3b8;
                        font-size: 13px;
                    ">
                        Next scheduled patient visits
                    </p>
                </div>

                <a
                    href="<?= base_url('index.php/appointment'); ?>"
                    style="
                        font-size: 13px;
                        color: #334155;
                        font-weight: 600;
                    "
                >
                    View all
                </a>

            </div>


            <?php if (!empty($upcoming_appointments)): ?>

                <?php foreach ($upcoming_appointments as $appointment): ?>

                    <div style="
                        display: grid;
                        grid-template-columns: 100px 1fr 180px 120px;
                        align-items: center;

                        padding: 16px 22px;

                        border-bottom: 1px solid #f1f3f5;
                    ">

                        <div>
                            <div style="
                                font-weight: 700;
                                font-size: 14px;
                            ">
                                <?= date(
                                    'H:i',
                                    strtotime($appointment->appointment_time)
                                ); ?>
                            </div>

                            <div style="
                                color: #94a3b8;
                                font-size: 12px;
                                margin-top: 3px;
                            ">
                                <?= date(
                                    'd M Y',
                                    strtotime($appointment->appointment_date)
                                ); ?>
                            </div>
                        </div>


                        <div>
                            <div style="
                                font-weight: 600;
                            ">
                                <?= htmlspecialchars(
                                    $appointment->patient_name
                                ); ?>
                            </div>

                            <div style="
                                color: #94a3b8;
                                font-size: 12px;
                                margin-top: 3px;
                            ">
                                Patient
                            </div>
                        </div>


                        <div style="
                            color: #64748b;
                            font-size: 13px;
                        ">
                            <?= htmlspecialchars(
                                $appointment->treatment_name
                            ); ?>
                        </div>


                        <div>
                            <span style="
                                display: inline-block;
                                padding: 5px 9px;
                                border-radius: 999px;
                                background: #f8fafc;
                                color: #475569;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                <?= htmlspecialchars(
                                    $appointment->status
                                ); ?>
                            </span>
                        </div>

                    </div>

                <?php endforeach; ?>

            <?php else: ?>

                <div style="
                    padding: 45px 20px;
                    text-align: center;
                    color: #94a3b8;
                    font-size: 14px;
                ">
                    No upcoming appointments.
                </div>

            <?php endif; ?>

        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
