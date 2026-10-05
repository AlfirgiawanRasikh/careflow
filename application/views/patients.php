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
                    Patient management
                </div>

                <h1 style="
                    font-size: 28px;
                    letter-spacing: -0.7px;
                ">
                    Patients
                </h1>

                <p style="
                    margin-top: 7px;
                    color: #64748b;
                    font-size: 14px;
                ">
                    Manage patient records and medical information.
                </p>
            </div>

            <a href="<?= base_url('index.php/patient/create'); ?>" style="
                background: #111827;
                color: white;
                padding: 11px 16px;
                border-radius: 8px;
                font-size: 14px;
                font-weight: 600;
            ">
                + Add Patient
            </a>
        </div>


        <div style="
            display: grid;
            grid-template-columns: 1fr;
            margin-bottom: 18px;
        ">
            <div style="
                background: white;
                border: 1px solid #e5e7eb;
                border-radius: 12px;
                padding: 20px 22px;
            ">
                <div style="
                    font-size: 13px;
                    color: #94a3b8;
                ">
                    Total Patients
                </div>

                <div style="
                    font-size: 28px;
                    font-weight: 700;
                    margin-top: 6px;
                ">
                    <?= $total_patients ?>
                </div>
            </div>
        </div>


        <div style="
            background: white;
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
                        Patient records
                    </h2>

                    <p style="
                        color: #94a3b8;
                        font-size: 13px;
                    ">
                        <?= $total_patients ?> registered patients
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
                        outline: none;
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
                                font-weight: 600;
                            ">
                                MRN
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                PATIENT
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                GENDER
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                BIRTH DATE
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                PHONE
                            </th>

                            <th style="
                                padding: 13px 20px;
                                color: #94a3b8;
                                font-size: 12px;
                                font-weight: 600;
                            ">
                                ACTION
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php if (!empty($patients)): ?>

                        <?php foreach ($patients as $patient): ?>

                            <tr style="
                                border-top: 1px solid #f1f3f5;
                            ">

                                <td style="
                                    padding: 16px 20px;
                                    font-weight: 600;
                                ">
                                    <?= htmlspecialchars($patient->medical_record_number) ?>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                ">
                                    <div style="font-weight: 600;">
                                        <?= htmlspecialchars($patient->name) ?>
                                    </div>

                                    <div style="
                                        margin-top: 3px;
                                        color: #94a3b8;
                                        font-size: 12px;
                                    ">
                                        <?= htmlspecialchars($patient->address) ?>
                                    </div>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                    color: #64748b;
                                ">
                                    <?= htmlspecialchars($patient->gender) ?>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                    color: #64748b;
                                ">
                                    <?= date('d M Y', strtotime($patient->birth_date)) ?>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                    color: #64748b;
                                ">
                                    <?= htmlspecialchars($patient->phone) ?>
                                </td>

                                <td style="
                                    padding: 16px 20px;
                                ">
                                <div style="display: flex; gap: 12px;">

                                    <a
                                        href="<?= base_url('index.php/patient/edit/' . $patient->id); ?>"
                                        style="
                                            font-size: 13px;
                                            color: #334155;
                                            font-weight: 600;
                                        "
                                    >
                                        Edit
                                    </a>

                                    <a
                                        href="<?= base_url('index.php/patient/delete/' . $patient->id); ?>"
                                        onclick="return confirm('Are you sure you want to delete this patient?');"
                                        style="
                                            font-size: 13px;
                                            color: #b91c1c;
                                            font-weight: 600;
                                        "
                                    >
                                        Delete
                                    </a>

                                </div>
                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>
                            <td colspan="6" style="
                                padding: 40px;
                                text-align: center;
                                color: #94a3b8;
                            ">
                                No patient records found.
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
