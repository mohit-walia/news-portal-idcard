-- Database Schema for ID Card System

CREATE TABLE applications (
    application_id SERIAL PRIMARY KEY,
    applicant_name VARCHAR(255) NOT NULL,
    applicant_email VARCHAR(255) NOT NULL,
    application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(50) NOT NULL,
    remarks TEXT
);

CREATE TABLE id_cards (
    id_card_id SERIAL PRIMARY KEY,
    application_id INT NOT NULL,
    issued_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expiry_date TIMESTAMP NOT NULL,
    id_card_number VARCHAR(100) NOT NULL UNIQUE,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (application_id) REFERENCES applications(application_id)
);

CREATE TABLE applicants (
    applicant_id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE id_card_types (
    id_card_type_id SERIAL PRIMARY KEY,
    type_name VARCHAR(100) NOT NULL UNIQUE,
    description TEXT
);

CREATE TABLE issued_id_cards (
    issued_id_card_id SERIAL PRIMARY KEY,
    id_card_id INT NOT NULL,
    applicant_id INT NOT NULL,
    issue_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_card_id) REFERENCES id_cards(id_card_id),
    FOREIGN KEY (applicant_id) REFERENCES applicants(applicant_id)
);