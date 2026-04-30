
# Software security lab walkthrough
A collection of Security-focused Lab Experiments covering vulnerability analysis, defensive coding, and network security.This repository serves as a hands-on laboratory for exploring the lifecycle of software vulnerabilities. By simulating real-world flaws, these experiments bridge the gap between identifying an exploit and implementing robust, "security-first" remediation.

##  Repository Overview
1. **Security Flaw Analysis**: Static analysis of C/Python code.
2. **Input-Based Attacks**: Local web app simulation for SQLi and XSS.
3. **Cryptographic Hashing**: Secure password storage using SHA-256 and Salting.
4. **Secure Code Review**: Audit of a login system.
5. **Network Traffic Inspection**: Packet analysis using Wireshark.

## 🛠️ Tech Stack & Tools
### **Core Technologies**
* **Languages:** `C`, `Python` (Security Scripting)
* **Web Security:** `HTML5`, `CSS3`, `JavaScript` (DOM-based XSS)
* **Database:** `SQLite` / `MySQL` (SQL Injection testing)

### **Security & Analysis Tools**
* **Network Analysis:** `Wireshark` (Packet Inspection & Protocol Analysis)
* **Vulnerability Scanning:** `Bandit` (Static Analysis for Python), `Flawfinder` (C)
* **Cryptography:** `SHA-256` Hashing, Salted Password Implementations
* **Testing Environment:** `Burp Suite` (Web Vulnerability Research)
  
## 📈 **Future Scope**
Multi-Factor Authentication: Integration of TOTP-based MFA for enhanced identity verification.

Active Defense: Developing automated Python scripts for real-time log monitoring and alerting.

End-to-End Encryption: Transitioning all local data-in-transit experiments to enforced HTTPS/TLS standards.
---

## 🧪 Repository Overview

1. **Security Flaw Analysis**
   * Leveraging static analysis tools to identify **memory leaks** and **buffer overflows** in C and insecure patterns in Python.

2. **Input-Based Attacks**
   * Simulating **SQLi** and **XSS** within a local environment to understand and block injection-based vectors.

3. **Cryptographic Hashing**
   * Implementing **secure-by-design** password storage using **SHA-256 and Salting** to prevent rainbow table attacks.

4. **Secure Code Review**
   * A manual and automated audit of a **Login System** to identify logic flaws and authentication bypasses.

5. **Network Traffic Inspection**
   * Deep-packet analysis using **Wireshark** to detect unencrypted data transmission and potential **Man-in-the-Middle (MitM)** risks.
   * 
6. **. Threat Modeling (STRIDE)**
Designing an architectural threat model for web applications (e.g., Online Bookstore) using the STRIDE framework.

Identifying attack surfaces for Spoofing, Tampering, Repudiation, Information Disclosure, Denial of Service, and Elevation of Privilege.

7. **Cryptographic Authentication**
Implementing secure-by-design password storage utilizing hashlib.sha256 and unique os.urandom(16) salting.

Developing a robust verification logic that protects against Rainbow Table and Brute-Force attacks.

8. ** Vulnerability Assessment**
Conducting passive scans using OWASP ZAP to identify outdated software, misconfigurations, and missing security headers (HSTS, X-Frame-Options).

Auditing system environments for default credentials and common entry-point flaws.

9. **Digital Forensics & Privacy**
Inspecting browser artifacts including Cookies, Session Tokens, and History to evaluate user tracking and privacy risks.

Utilizing forensic tools to reconstruct local user activity and understand data-at-rest vulnerabilities in browsers.

10. **Incident Response Simulation**
Analyzing server access logs to detect Brute-Force patterns (e.g., high-frequency 401 Unauthorized status codes).

Drafting formal incident reports detailing timelines, identification of malicious IPs, and mitigation strategies such as IP Blocking.

📈 Future Scope
Multi-Factor Authentication: Integration of TOTP-based MFA for enhanced identity verification.

Active Defense: Developing automated Python scripts for real-time log monitoring and alerting.

End-to-End Encryption: Transitioning all local data-in-transit experiments to enforced HTTPS/TLS standards.
