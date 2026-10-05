<?php $this->load->view('layouts/header', ['title' => $title]); ?>

<?php $this->load->view('layouts/sidebar'); ?>

<main class="main">
    <div class="content">

        <div style="margin-bottom: 28px;">
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
                Add Patient
            </h1>

            <p style="
                margin-top: 7px;
                color: #64748b;
                font-size: 14px;
            ">
                Create a new patient record.
            </p>
        </div>

        <div style="
            max-width: 760px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 28px;
        ">

            <?php if (validation_errors()): ?>

                <div style="
                    background: #fef2f2;
                    border: 1px solid #fecaca;
                    color: #b91c1c;
                    padding: 12px 14px;
                    border-radius: 8px;
                    margin-bottom: 20px;
                    font-size: 14px;
                ">
                    <?= validation_errors(); ?>
                </div>

            <?php endif; ?>

            <form method="post" action="<?= base_url('index.php/patient/create'); ?>">

                <div style="
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 18px;
                ">

                    <div>
                        <label>Medical Record Number</label>

                        <input
                            type="text"
                            name="medical_record_number"
                            value="<?= set_value('medical_record_number'); ?>"
                            placeholder="MR-0005"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                            "
                        >
                    </div>

                    <div>
                        <label>Full Name</label>

                        <input
                            type="text"
                            name="name"
                            value="<?= set_value('name'); ?>"
                            placeholder="Patient name"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                            "
                        >
                    </div>

                    <div>
                        <label>Gender</label>

                        <select
                            name="gender"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                                background: white;
                            "
                        >
                            <option value="">Select gender</option>
                            <option value="Male" <?= set_select('gender', 'Male'); ?>>
                                Male
                            </option>
                            <option value="Female" <?= set_select('gender', 'Female'); ?>>
                                Female
                            </option>
                        </select>
                    </div>

                    <div>
                        <label>Birth Date</label>

                        <input
                            type="date"
                            name="birth_date"
                            value="<?= set_value('birth_date'); ?>"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                            "
                        >
                    </div>

                    <div>
                        <label>Phone</label>

                        <input
                            type="text"
                            name="phone"
                            value="<?= set_value('phone'); ?>"
                            placeholder="08xxxxxxxxxx"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                            "
                        >
                    </div>

                    <div>
                        <label>Address</label>

                        <input
                            type="text"
                            name="address"
                            value="<?= set_value('address'); ?>"
                            placeholder="Jakarta Selatan"
                            style="
                                width: 100%;
                                margin-top: 7px;
                                padding: 11px 12px;
                                border: 1px solid #dfe3e8;
                                border-radius: 8px;
                                font-size: 14px;
                            "
                        >
                    </div>

                </div>

                <div style="
                    display: flex;
                    justify-content: flex-end;
                    gap: 10px;
                    margin-top: 28px;
                    padding-top: 20px;
                    border-top: 1px solid #eef0f3;
                ">

                    <a
                        href="<?= base_url('index.php/patient'); ?>"
                        style="
                            padding: 11px 16px;
                            border: 1px solid #dfe3e8;
                            border-radius: 8px;
                            font-size: 14px;
                        "
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        style="
                            padding: 11px 18px;
                            background: #111827;
                            color: white;
                            border: none;
                            border-radius: 8px;
                            font-size: 14px;
                            font-weight: 600;
                            cursor: pointer;
                        "
                    >
                        Save Patient
                    </button>

                </div>

            </form>

        </div>

    </div>
</main>

<?php $this->load->view('layouts/footer'); ?>
