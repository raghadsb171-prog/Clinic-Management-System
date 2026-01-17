# Pharmacy & Hospital Management System

This project is a partial fulfillment of the requirements for the **Software Engineering Course (CSCI 2313)**. It demonstrates a robust medical management system built using **Object-Oriented Programming (OOP)** and the **Facade Design Pattern** to ensure a clean separation between the user interface and business logic.

---

## 👤 Student Information
* **Name:** Raghad Soliman Khaled Bolbol
* **Student ID:** 220221269
* **Course:** Software Engineering
* **Instructor:** Dr. Abdelkareem Alashqar
* **Semester:** 1st Semester 2025/2026

---

## 🛠 Project Scope & Functionality
The system is designed to streamline healthcare operations by focusing on two primary modules:

1.  **Schedule Appointments:** Allows staff to manage patient visits by selecting specific dates and times, ensuring organized clinic flow.
2.  **Manage Patient Records:** Provides a secure way to update clinical notes, medical history, and diagnosis for patients.

### 🏗 Architecture
The system follows a **3-Tier Architecture**:
* **Presentation Layer (UserInterface):** Handles the GUI and user inputs.
* **Business Logic Layer (AppLogic):** Processes requests through `ALFacade` and manages core functions via `PharmacyManager`.
* **Data Access Layer (Database):** Interacts with the data source through a unified `DbFacade`.



---

## 📁 Project Structure
```text
/Pharmacy_Project
│
├── /UserInterface          # GUI and View Facade
│   ├── UIFacade.php        
│   └── (Integrated UI in index.php)
│
├── /AppLogic               # Core Business Rules
│   ├── ALFacade.php        # System Gateway
│   └── PharmacyManager.php # Record & Appointment Logic
│
├── /Database               # Data Persistence
│   └── DbFacade.php        # DB Operation Wrapper
│
└── index.php               # System Entry Point & Dashboard
