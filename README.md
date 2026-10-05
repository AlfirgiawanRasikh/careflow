# CareFlow

Clinic Operations System built with CodeIgniter 3 and Microsoft SQL Server.

## Overview

CareFlow is a clinic operations management system designed to manage patient records, appointments, treatments, billing, reports, and basic system information.

## Features

- Dashboard
- Patient Management
- Appointment Management
- Treatment Catalog
- Billing
- Operational Reports
- System Settings
- CRUD operations
- Form validation
- SQL Server integration
- Stored Procedure
- Relational database and JOIN queries

## Tech Stack

- PHP 8.2
- CodeIgniter 3
- Microsoft SQL Server
- T-SQL
- HTML
- CSS
- JavaScript

## Architecture

Browser
→ CodeIgniter Controller
→ Model
→ SQL Server / Stored Procedure
→ View

## Main Modules

### Patients
- View patient records
- Add patient
- Edit patient
- Delete patient

### Appointments
- View appointment schedule
- Patient and appointment relationship
- Appointment status

### Billing
- Invoice records
- Payment status
- Revenue summary

### Reports
- Billing summary
- Appointment summary

## Local Development

Requirements:

- PHP 8.2
- CodeIgniter 3
- Microsoft SQL Server
- SQLSRV PHP Driver
- PDO SQLSRV Driver

Run:

```bash
php -S localhost:8000
